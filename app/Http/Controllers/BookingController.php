<?php

namespace App\Http\Controllers;

use App\Booking;
use App\class_events;
use Illuminate\Http\Request;

use App\User;
use App\Services;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Support\Facades\Hash;

use DateTime;
use DateInterval;
use DatePeriod;

class BookingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('bulletbooking');
        $this->middleware('SessionAlerts');
    }

     public function schedule(Request $request)
    {
        return $this->homeSchedule($request);
    }
    public function index(Request $request)
    {
           $trainers = DB::table('users')
                    ->where('title', 'trainer')
                    ->limit(4)
                    ->get();

        $services = Services::all();
        $class_events = $this->getSchedule($request);
        if ((! is_array($class_events)) && DateTime::createFromFormat('Y-m-d', $class_events->keys()->first()) ) {
                $days = $class_events->keys();
                $datef = $this->formatday($days);
                $monthf = $this->getMonth($days);
                $daysArr = $this->daysArray($days);

                return view('admin.classes', compact('trainers','monthf','datef', 'daysArr','class_events', 'services'));   
        }
        elseif (is_array($class_events) && !empty($class_events)) {
            return response()->json($class_events);
        }
        else {
            return redirect()->back()->withErrorMessage("Ooops, no events match your search criteria. Don");  
        }
    }


    public function getSchedule(Request $request)
    {
        
        date_default_timezone_set('Africa/Nairobi');
        $today = date('Y-m-d');
        if ($request->has('getPrevWeek')) {
                $week = $request->input('week') - 1;
                $year = $request->input('year');
        } elseif ( $request->has('getNextWeek')) {
                $week = $request->input('week1') + 1;
                $year = $request->input('year1');
        }
        else
        {
                $week = date('W');
                $year = date('Y');
        }
        $DateTime = new DateTime();
        $week_start = $DateTime->setISODate($year, $week)->format('Y-m-d');
        $week_end = $DateTime->modify('+7 days')->format('Y-m-d');
        //get an array of the week.
        $class_events[] = array();
        $begin = new DateTime($week_start);
        $end = new DateTime($week_end);
        $interval = new DateInterval('P1D');
        $dateRange = new DatePeriod($begin, $interval, $end);


                //loop to get nested array of the dates with associated events/classes.
                if($request->ajax()) {
                    //my ajax calls later
                    if ($request->has('next') && $request->has('mobile')) 
                    {
                        $beginD = $request->input('begin');
                        $begin = date('Y-m-d H:i:s', strtotime($beginD. '+1 days'));
                        $end = date('Y-m-d H:i:s', strtotime($beginD. '+2 days'));

                        $class_events = DB::table('class_events')
                                    ->where('start', '>=', $begin)
                                    ->where('start', '<=', $end)
                                    ->get()
                                    ->sortByDesc('start');
                    }
                    elseif ($request->has('prev') && $request->has('mobile')) {
                        $beginP = $request->input('begin');
                        $begin = date('Y-m-d H:i:s', strtotime($beginP));
                        $end = date('Y-m-d H:i:s', strtotime($beginP. '-1 days'));
                        
                        $class_events = DB::table('class_events')
                                    ->where('start', '>=', $end)
                                    ->where('start', '<=', $begin)
                                    ->get()
                                    ->sortByDesc('start'); 
                        }

                }
                else {
                    $class_events = DB::table('class_events')
                                    ->where('start', '>=', $begin)
                                    ->where('start', '<=', $end)
                                    ->get()
                                    ->groupBy(function($classByDay){
                                        return Carbon::parse($classByDay->start)->format('Y-m-d'); 
                                    })
                                    ->sortKeys()
                                    ->sortByDesc('start');
                }

            return($class_events);
                    
        }
        public function formatday($date)
        {
            $array_date = $date->toArray();
            asort($array_date);
            foreach ($array_date as $dte) {
                $Date = new DateTime($dte);
                $daysf[] = $Date->format('D jS');
            }
            return($daysf);
        }
        public function getMonth($date)
        {
            $array_date = $date->toArray();
            asort($array_date);
            foreach ($array_date as $dte) {
                $Date = new DateTime($dte);
                $getMonth['month'] = $Date->format('F');
                $getMonth['week'] = $Date->format('W');
                $getMonth['year'] = $Date->format('Y');
            }
            return($getMonth);
        }

        public function daysArray($sort_date)
        {
            $sort_date->sortKeys();
            foreach ($sort_date as $dte) {
                $Date = new DateTime($dte);
                $daysArr[] = $Date->format('Y-m-d');
            }
            return($daysArr);
        }
    


    public function homeSchedule($request)
    {
        $trainers = DB::table('users')
                    ->where('title', 'trainer')
                    ->limit(4)
                    ->get();

        $services = Services::all();
        $class_events = $this->getSchedule($request);
        if ((! is_array($class_events)) && DateTime::createFromFormat('Y-m-d', $class_events->keys()->first()) ) {
                $days = $class_events->keys();
                $datef = $this->formatday($days);
                $monthf = $this->getMonth($days);
                $daysArr = $this->daysArray($days);

                return view('admin.classes', compact('trainers','monthf','datef', 'daysArr','class_events', 'services'));   
        }
        elseif (is_array($class_events) && !empty($class_events)) {
            return response()->json($class_events);
        }
        else {
            return redirect()->back()->withErrorMessage("Ooops, no events Scheduled. Please call us for enquiries");  
        }

    }


  
    public function classBookings(Request $request, $id)
    {
   // dd('hhh');
       $bookings = DB::table('bookings')
        ->where('event_id', $id)
        ->orderBy('updated_at', 'desc')
        ->get();
        $class_events = class_events::all();
        $users = User::all();
        

        if (empty($bookings)) {
            return redirect()->back()->withErrorMessage('There are no bookings for this class');
        } else {
            return view('admin.bookings', compact('bookings', 'users', 'class_events' ));
        }
    }
    public function show(Booking $booking)
    {

        $class_event = Booking::find($booking->id)->getClassEvent;
        $user = Booking::find($booking->id)->getUser;
        
       return view('admin.bookingDetails', compact('booking', 'class_event', 'user'));
    }

    public function allBookings()
    {
//        $bookings = Booking::paginate(40);
        if (empty($bookings)) {
            return view('admin.bookings', compact('bookings'))->withErrorMessage('No bookings defined yet');
        } else {
            return view('admin.bookings', compact('bookings'));
        }
    }

    public function bulletbooking(Request $request)
    {
        $slots = $request->input('slots');
        $code = $request->input('code');
        $number = $request->input('number'); 




        if (preg_match('/^[2]{1}[5]{1}[4]{1}[0-9]{9}$/i', $number)) {            
                $customer_numbers = DB::table('users')->pluck('number')->toArray();
                if (!in_array($number, $customer_numbers)) {
                     
                    $checkLAstID = DB::table('users')->latest('created_at')->first();
                    $lastuserID = $checkLAstID->id; 
                    $createUser = new User();
                    $createUser->number = $number;
                    $createUser->title = 'customer';
                    $createUser->fname = 'Web Bulletbooking';
                    $createUser->lname = 'Website';
                    $createUser->email = 'apps.kahaki@softwares'.$lastuserID.'.com';
                    $createUser->password = Hash::make('password');
                    $createUser->save();
                    $user_id = $createUser->id;
                } 

                //get customer_id
                elseif (in_array($number, $customer_numbers)) {
                    $user_id = DB::table('users')
                                        ->where('number', $number)
                                        ->value('id');   
                }

                $classEventCollection = DB::table('class_events')
                                                ->where('code', strtoupper($code))
                                                ->first();
               if ($classEventCollection != null) {
                $createBooking = new Booking();
                $createBooking->booking_code = $this->bookingCodeGenerator();
                $createBooking->user_id = $user_id;
                $createBooking->slots = $slots;
                $createBooking->number = $number;
                $createBooking->status = 'Pending MPESA approval';
                $createBooking->event_id = $classEventCollection->id;
                $createBooking->title = $classEventCollection->title;
                $eventCost = ($classEventCollection->cost * $slots);
                $createBooking->amount = $eventCost;
                $createBooking->save();
                $booking_id = $createBooking->id;
                $this->mpesaSTK($number, $eventCost, $classEventCollection->title, $slots, $booking_id);
               } else {
                   return redirect()->back()->withErrorMessage('😔 Ooops! Something is not correct with the shared code. NB: Accepted format is ljb-72.');
               }
               return redirect()->back()->withSuccessMessage('👏 Hurray! We have forwaded details to MPESA. Please confirm payment on your end and leave the rest to us ☺.');
        } else  {
          return  redirect()->back()->withErrorMessage('😔 Ooops! Something is not correct with the shared number. Please check on that and try again. NB: use the format 2547XXXXXXXX Safaricom registered number.'); 
        }

    } 


}
