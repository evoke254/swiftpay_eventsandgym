<?php

namespace App\Http\Controllers;

use App\Mpesa as kahakipesa;
use App\StkpushResponse;
use App\MpesaCallBack;
use Illuminate\Http\Request;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Question;
use Illuminate\Support\Facades\DB;

class MpesaController extends Controller
{
    public function index(Request $request)
    {
        
        $mpesaResponse = json_decode($request);

        $ResultCode = $mpesaResponse->Body->stkCallback->ResultCode;
        $MerchantRequestID = $mpesaResponse->Body->stkCallback->MerchantRequestID;
        $MerchantRequestIDs = DB::table('stkpush_responses')->pluck('MerchantRequestID')->toArray();

/*        if (!in_array($MerchantRequestID, $MerchantRequestIDs)) {
            die('We dont do that here.');
        }
*/

        if ($ResultCode == 0) {
            $Amount = $mpesaResponse->Body->stkCallback->CallbackMetadata->Item[0]->Value;
            $MpesaReceiptNumber = $mpesaResponse->Body->stkCallback->CallbackMetadata->Item[1]->Value;
            $TransactionDate = $mpesaResponse->Body->stkCallback->CallbackMetadata->Item[3]->Value;
            $PhoneNumber = $mpesaResponse->Body->stkCallback->CallbackMetadata->Item[4]->Value;
        }
        $MerchantRequestID = $mpesaResponse->Body->stkCallback->MerchantRequestID;
        $CheckoutRequestID = $mpesaResponse->Body->stkCallback->CheckoutRequestID;
        $ResultDesc = $mpesaResponse->Body->stkCallback->ResultDesc;

        $mpesaCall = new MpesaCallBack;
        $mpesaCall->resultdcode = $ResultCode;
        $mpesaCall->amount = $Amount;
        $mpesaCall->receipt = $MpesaReceiptNumber;
        $mpesaCall->datetime = $TransactionDate;
        $mpesaCall->number = $PhoneNumber;
        $mpesaCall->merchantID = $MerchantRequestID;
        $mpesaCall->checkoutID = $CheckoutRequestID;
        $mpesaCall->resultddesc = $ResultDesc;
        $mpesaCall->save();


        DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);
        DriverManager::loadDriver(\BotMan\Drivers\Twilio\TwilioVoiceDriver::class);
        DriverManager::loadDriver(\BotMan\Drivers\Twilio\TwilioMessageDriver::class);
        $config = [
            'twilio' => [
                'token' => '6d93adebc84ff5779e14a3b3ef0b1409',
            ] 
        ];
        $adapter = new FilesystemAdapter();
        $botman = BotManFactory::create($config, new SymfonyCache($adapter));
        if ($ResultCode == 0) { 
            $botman->hears('', function (BotMan $bot) {
                $bot->reply('Your payment has been received and your slot(s) reserved. See you there 🙌.', $PhoneNumber, TwilioMessageDriver::class);
            });
        } else {
            $botman->hears('', function (BotMan $bot) {
                $bot->reply('Something went wrong. Kindly respond with try again to initiate another STK push request when you are ready.', $PhoneNumber, TwilioMessageDriver::class);
            });
        }

        $botman->listen();


    }


}
