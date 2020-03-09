<?php

namespace App\Http\Controllers;

use File;
use Image;
use Alert;
use App\class_events;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('SessionAlerts');
    }
    public function index()
    {
        $begin = date("Y-m-d H:i:s");
        $events = DB::table('class_events')
                            ->where('start', '>=', $begin)
                            ->where('classOrEvent', '=', 'Event')
                            ->orderBy('start', 'asc')
                            ->get();
        return view('event', compact('events'));
    }
   	public function teambuilding()
   	{
   		return view('teambuilding');
   	}


    public function blog()
    {
      return view('blog');  
    }

    public function dec()
    {
      return view('blog.dec-2019-coachs-corner-tipwatipwa');
    }
    public function jan()
    {
      return view('blog.jan-2020-coachs-corner-tipwatipwa');
    }
    public function feb()
    {
      return view('blog.feb-2020-coachs-corner-tipwatipwa');
    }

}
