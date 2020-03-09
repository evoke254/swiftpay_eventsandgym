<?php
namespace App\Http\Twilio;
use Illuminate\Foundation\Bus\DispatchesJobs;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Question;

use App\chatResponses;
use App\Respond;
use App\User;
use App\Customer;
use App\class_events;
use App\Booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Mpesa as kahakipesa;
use App\StkpushResponse;
class BookClassEvent extends Conversation
{
	protected $askService;
	protected $events_text;
	protected $events;
    protected $classEventCode;
    protected $classEventObj;
    protected $confirmation;
    protected $user;
    protected $slots;
    protected $kahakiCode;
    protected $mpesaNumber;


    protected $eventBookingID;

    public function welcome()
    {
        $this->ask('<p>Hi 👋, Welcome to the Chat n Pay booking assistant. Kindly respond with <b>Studio Classes</b> or <b>Hikes</b> to checkout upcoming events.</p>', function(Answer $answer){
                $this->askService = $answer->getText();
                if (strtolower($this->askService) == 'studio classes'){
                $this->getClassOrEvents('Class');
                } 
                elseif (strtolower($this->askService) == 'hikes') {
                $this->getClassOrEvents('Event');
                } 
                else {
                    return $this->repeat('<p><i>'.$this->askService.'</i> doesn\'t look like a valid respond. Please reply with either <b>Studio Classes</b> or <b>Hikes</b>.</p>');                  
                }
        });
    }

    public function getClassOrEvents($classOrEvent)
    {
        $now = date('Y-m-d H:i:s');
        $events =  DB::table('class_events')
                            ->where('classOrEvent', $classOrEvent)
                            ->where('start', '>=', $now)
                            ->get()
                            ->take(7);
                    $events_text = "";
                    $counter = 1;
                    foreach ($events as $event) {
                        $events_text .=$counter.'. <b>'.$event->code.'</b>  '.$event->title.' at '.$event->venue.'.  ';
                        $counter++;
                    }
        $eventsCount =  DB::table('class_events')
                            ->where('classOrEvent', $classOrEvent)
                            ->where('start', '>=', $now)
                            ->get()
                            ->count();
        if ($eventsCount >= 1) {
            $this->ask('We have the following '.$classOrEvent.'s lined up: '.$events_text.'Kindly respond with the respective 👆 code to book.' , function(Answer $answer){
                $this->classEventCode = $answer->getText();
                if ( preg_match('/^[A-Z]{3}-{1}\d{2}$/i', strtoupper($this->classEventCode))){
                        $results = DB::table('class_events')
                                ->where('code', strtoupper($this->classEventCode))
                                ->get()
                                ->count();
                            if ($results >= 1) {
                                $this->confirmEvent($this->classEventCode);
                            } else {                    
                                return $this->repeat($this->classEventCode.' 🌝 is not correct. Kindly try again.');
                            }
                } else  {
                    return $this->repeat(' 👶 Ooops I couldn\'t understand <i>'.$this->classEventCode.'</i> . Please check the submitted phrase matches the respective event code.');
                }       
            });             
        } else {
            $this->ask('👨‍💻 Ooops looks like my admin is currently updating <i>'.$classEvent.'s</i> . Please check back after an hour 👋. Looking forward to our chat. Thank you' , function(Answer $answer){ 
                $this->stopsConversation();      
            });
        }

    }


    public function confirmEvent($code)
    {
            $this->kahakiCode = $code;
            $classEventCollection = DB::table('class_events')
                                    ->where('code', strtoupper($code))
                                    ->first();
            $this->ask('To book a spot for: <b>'.$classEventCollection->code.'</b> '.$classEventCollection->title.' at '.$classEventCollection->venue.' for Kshs. '.$classEventCollection->cost .' <i>Description</i> '.$classEventCollection->desc.' kindly respond with the MPESA number to receive an STK Push. Accepatble <i>Number format</i> is <b>2547XXXXXXXX</b> .' , function(Answer $answer){

                $this->mpesaNumber = $answer->getText();
                    if (preg_match('/^[2]{1}[5]{1}[4]{1}[0-9]{9}$/i', $this->mpesaNumber)) {
                            
                            $customer_numbers = DB::table('users')->pluck('number')->toArray();
                            if (!in_array($this->mpesaNumber, $customer_numbers)) {
                                 
                                $checkLAstID = DB::table('users')->latest('created_at')->first();
                                $lastuserID = $checkLAstID->id; 
                                $createUser = new User();
                                $createUser->number = $this->mpesaNumber;
                                $createUser->title = 'customer';
                                $createUser->fname = 'whatsapp';
                                $createUser->lname = 'whatsapp';
                                $createUser->email = 'apps.kahaki@softwares'.$lastuserID.'.com';
                                $createUser->password = Hash::make('password');
                                $createUser->save();
                                $user_id = $createUser->id;
                            } 

                            //get customer_id
                            elseif (in_array($this->mpesaNumber, $customer_numbers)) {
                                $user_id = DB::table('users')
                                                    ->where('number', $this->mpesaNumber)
                                                    ->value('id');   
                            }

                            $classEventCollection = DB::table('class_events')
                                                            ->where('code', strtoupper($this->kahakiCode))
                                                            ->first();
                            $createBooking = new Booking();
                            $createBooking->booking_code = $this->bookingCodeGenerator();
                            $createBooking->user_id = $user_id;
                            $createBooking->number = $this->mpesaNumber;
                            $createBooking->status = 'Initiated';
                            $createBooking->amount = $classEventCollection->cost;
                            $createBooking->event_id = $classEventCollection->id;
                            $createBooking->title = $classEventCollection->title;
                            $createBooking->save();
                            $bookingsID = $createBooking->id;
                            $this->askNumberOfSlots($bookingsID);
                               
                    } else  {
                        return $this->repeat('Something is not correct with the shared number ( <i>'.$this->mpesaNumber.'</i>  ). Please check on that and try again. NB use a <b>2547XXXXXXXX</b> Safaricom registered number.');
                    }

            });
    }


    public function askNumberOfSlots($bookID)
    {
        $this->eventBookingID = $bookID;
        $this->ask('We are almost done 🤓. How many slots would you like to reserve? <b>NB<b/> you are allowed to reserve a min of 1 and a max of 15 slots. ', function(Answer $answer){
            $this->slots = $answer->getText();
             if (($this->slots >= 1) && ($this->slots <= 15) ) {
                    $updateBooking = Booking::findOrFail($this->eventBookingID);
                    $updateBooking->slots = (int)$this->slots;
                    $updateBooking->save();
                    $this->askPayment($this->eventBookingID);
                } else  {
                    return $this->repeat(' 👶 <i>'.$this->slots.'</i> does not fall in the range defined above 👆 rule. Kindly enter a number (1-15)');
                }    
        });
    }

public function askPayment($bookID)
{
    $updateBooking = Booking::findOrFail($bookID);
    $event = class_events::findOrFail($updateBooking->event_id);
    $eventCost = ($event->cost * $updateBooking->slots);
    $updateBooking->amount = $eventCost;
    $updateBooking->status = 'Pending MPESA approval';
    $updateBooking->save();
    $this->mpesaSTK($updateBooking->number, $updateBooking->amount, $event->title, $updateBooking->slots);

    $this->ask($updateBooking->slots.' slot(s) for '.$event->title.' will cost Kshs. '.$updateBooking->amount. '. Please enter your MPESA <i>pin</i> on the STK pop dialog to checkout. I will take several seconds break as we wait for MPESA confirmation.', function(Answer $answer){
            
    });

}


    public function bookingCodeGenerator()
        {            
            $rand_str1 = strtoupper(substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 2));
            $rand_str2 = strtoupper(substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, 2));
            $rand_int = mt_rand(10, 100);

            $rand_code = $rand_str1.$rand_str2.$rand_int;
            while (DB::table('bookings')->where('booking_code', $rand_code)->exists()) {
                    $rand_str1 = strtoupper(substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 2));
                    $rand_str2 = strtoupper(substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, 2));
                    $rand_int = mt_rand(10, 100);
                    $rand_code = $rand_str1.$rand_str2.$rand_int;
            }
            return $rand_code;
        }

    public function mpesaSTK($user, $amount, $eventTitle, $slots)
        {
        $mpesa= new \Safaricom\Mpesa\Mpesa();

        $BusinessShortCode = '767219';
        $LipaNaMpesaPasskey = '2f17ec5bd74084eb21121d75ec6f69f49e3b02d493747fd03f25740f74f57849';
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = $amount;
        $PartyA = $user;
        $PartyB = $BusinessShortCode;
        $PhoneNumber = $user;
        $CallBackURL = 'http://kahakiapps.tk/zlDprOsOdrlDkaVSdd2ipGZcpuDH8a';
        $AccountReference = $user;
        $TransactionDesc = Str::limit($slots.' slot(s) for '.$eventTitle, 196);
        $Remarks = 'Thank you for using Kahaki Solutions.';

        $trans_push =$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
        $stkresponse = json_decode($trans_push);
        $stkpushResponse = new StkpushResponse();

        $stkpushResponse->PartyA = $PartyA;
        $stkpushResponse->PartyB = $PartyB;
        $stkpushResponse->Amount = $Amount;
        $stkpushResponse->TransactionType = $TransactionType;
        if ( array_key_exists('errorMessage', $stkresponse) ) {
                $stkpushResponse->errorCode = $stkresponse->errorCode;
                $stkpushResponse->errorMessage = $stkresponse->errorMessage;
                $stkpushResponse->CustomerMessage  = $stkresponse->requestId;
        } else{
        $stkpushResponse->MerchantRequestID = $stkresponse->MerchantRequestID;
        $stkpushResponse->CheckoutRequestID = $stkresponse->CheckoutRequestID;
        $stkpushResponse->ResponseCode = $stkresponse->ResponseCode;
        $stkpushResponse->ResponseDescription = $stkresponse->ResponseDescription;
        $stkpushResponse->CustomerMessage  = $stkresponse->CustomerMessage;
         }  
        $stkpushResponse->save(); 
        }



    public function run()
    {
        // This will be called immediately
        $this->welcome();
    }






















}