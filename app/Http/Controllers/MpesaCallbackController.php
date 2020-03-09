<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mpesa as kahakipesa;

class MpesaCallbackController extends Controller
{
   
	public function mpesa(Request $request)
	{

		$mpesa= new \Safaricom\Mpesa\Mpesa();
		$callbackData=$mpesa->getDataFromCallback();
		$callbackData=$mpesa->finishTransaction(true);

		$decodeMPESA = json_decode($callbackData);
		$kahakipesa = new kahakipesa();
		$kahakipesa->TransactionType = $decodeMPESA->TransactionType;
		$kahakipesa->TransID = $decodeMPESA->TransID;
		$kahakipesa->TransTime = $decodeMPESA->TransTime;
		$kahakipesa->TransAmount = $decodeMPESA->TransAmount;
		$kahakipesa->BusinessShortCode = $decodeMPESA->BusinessShortCode;
		$kahakipesa->BillRefNumber = $decodeMPESA->BillRefNumber;
		$kahakipesa->InvoiceNumber = $decodeMPESA->InvoiceNumber;
		$kahakipesa->ThirdPartyTransID = $decodeMPESA->ThirdPartyTransID;
		$kahakipesa->MSISDN = $decodeMPESA->MSISDN;
		$kahakipesa->FirstName = $decodeMPESA->FirstName;
		$kahakipesa->MiddleName = $decodeMPESA->MiddleName;
		$kahakipesa->LastName = $decodeMPESA->LastName;
		$kahakipesa->OrgAccountBalance = $decodeMPESA->OrgAccountBalance;

		$kahakipesa->save();
	}

	public function mpes()
	{
		$mpesa= new \Safaricom\Mpesa\Mpesa();

		$InitiatorName = 'TestInit603';
		$SecurityCredential = 'APItest603#';
		$CommandID = 'BusinessPayment';
		$Amount = 10;

		$PartyA = 600603;
        $PartyB = 254708374149;
        $QueueTimeOutURL = env('MPESA_CALLBACK');
        $ResultURL = env('MPESA_CALLBACK');
        $Occasion = "Vodacom Hike";
        $Remarks = env('MPESA_REMARKS');

		$b2cTransaction=$mpesa->b2c($InitiatorName, $SecurityCredential, $CommandID, $Amount, $PartyA, $PartyB, $Remarks, $QueueTimeOutURL, $ResultURL, $Occasion);

		dd($b2cTransaction);
	}
}
