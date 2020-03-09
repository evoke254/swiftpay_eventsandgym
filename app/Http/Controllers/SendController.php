<?php

namespace App\Http\Controllers;

use App\Send;
use App\Respond;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SendController extends Controller
{


    
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index()
    {
    
        $sid = env('SID');
        $token = env('TOKEN');
        $number = env('MY_NUMBER');
        $whatsappNo = env('WAPP_NUMBER');

        $new_text = "Your appointment is coming up on Friday at 1400hrs";

        $my_twilio = new Client($sid, $token);
        $message = $my_twilio->messages
                             ->create("whatsapp:".$number,
                            [
                                "body" => $new_text ,
                                "from" => "whatsapp:".$whatsappNo
                            ]
                        );
//        print($message->sid);
        $save_msg = new Respond();
        $save_msg->number = $whatsappNo;
        $save_msg->msg_body = $new_text;
        $save_msg->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Send  $send
     * @return \Illuminate\Http\Response
     */
    public function show(Send $send)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Send  $send
     * @return \Illuminate\Http\Response
     */
    public function edit(Send $send)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Send  $send
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Send $send)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Send  $send
     * @return \Illuminate\Http\Response
     */
    public function destroy(Send $send)
    {
        //
    }
}
