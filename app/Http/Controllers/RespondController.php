<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Cache\SymfonyCache;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

use App\chatResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Twilio\BookClassEvent;

class RespondController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
        
    }*/
    public function index(Request $request)
    {
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

        $botman->hears('hey|hi|niaje|mambo|Hello|Good evening|Good morning', function (BotMan $bot) {
            $bot->startConversation(new BookClassEvent());
        });
        $botman->fallback(function($bot) {
            $bot->reply('🤗 lets take it nice and easy. Reply with a *hi* and I\'ll sure hook you up with a cool event.');
        });

        $botman->listen();

    }
}
