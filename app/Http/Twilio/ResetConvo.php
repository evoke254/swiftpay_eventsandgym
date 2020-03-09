<?php
namespace App\Http\Twilio;

class ResetConvo
{

    protected $countFunctionCalls = 0;


    public function resetConversation()
    {
        $count = $this->countFunctionCalls++;
        if ($count > 2) {
        $this->say('Ooops 😟 sorry for the tedious loop but I couldn\'t resolve your request. Kindly respond with *Try again* for us to run through the process once more.');
        return false;
        }
    }

}