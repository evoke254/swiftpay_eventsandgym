<?php

namespace App\Http\Controllers;

use App\class_events;
use App\Services;
use App\User;
use App\PayOptions;
use App\Booking;
use Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassEventsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('SessionAlerts');       
    }

    public function index()
    {
        //
        $class_events = class_events::all();
        $services = Services::all();
        $trainers = DB::table('users')
                    ->where('title', 'trainer')
                    ->get();
        $PayOptions = PayOptions::all();
        return view('admin.schedule_editor', compact('class_events', 'services', 'trainers', 'PayOptions'));

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
     *            $appointment = class_events:: Appointment::with('client')->findOrFail($request->appointment_id);
            $appointment->update($request->all());

    return response()->json(['appointment' => $appointment]);
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->has('ajaxUpdateEvent')) {
                $updateEvent = class_events::findOrFail($request->input('eventId'));
                $updateEvent->title = $request->input('title');
                $updateEvent->venue = $request->input('venue');
                $updateEvent->desc = $request->input('desc');
                $updateEvent->cost = $request->input('cost');
                $updateEvent->start = $request->input('start');
                $updateEvent->finish = $request->input('finish');
                $updateEvent->status = $request->input('status');
                $updateEvent->updated_at = now();


                if (! $updateEvent->save()) 
                {
                    return response()->json(['error' => $updateEvent]);
                } 
                elseif ($updateEvent->save()) 
                {
                    return response()->json(['success' =>'Event succesfully updated.']);   
                }
        } else {

                
                if ($request->input('repeatClass') == 'false') {
                    $createEvent = new class_events;
                        if ($request->input('classOrEvent') == 'Event') {
                            $createEvent->title = $request->input('etitle');
                        $createEvent->desc = $request->input('desc');
                        } elseif ($request->input('classOrEvent') == 'Class') {
                           // $createEvent->title = $request->input('title');
                            $service = $this->services($request->input('title'));
                            $createEvent->title = $service->title;
                        $createEvent->desc = $request->input('desc'). '=> '.$service->desc;
                        }

                        $createEvent->classOrEvent = $request->input('classOrEvent');
                        $createEvent->code =  $this->classEventsCodeGenerator();
                        $createEvent->trainer = $request->input('trainer');  
                        $createEvent->venue = $request->input('venue');
                        $createEvent->cost = $request->input('cost');
                        $createEvent->start = $request->input('start');
                        $createEvent->finish = $request->input('finish');
                        $createEvent->status = $request->input('status');

                    if (! $createEvent->save()) 
                    {
                        return response()->json(['error' => $createEvent]);
                    } 
                    elseif ($createEvent->save()) 
                    {
                        return response()->json(['success' =>'Event saved succesfully.']);   
                    }
                } 
                elseif ($request->input('repeatClass') == 'true') {

                    $service = $this->services($request->input('title'));
                
                    date_default_timezone_set('Africa/Nairobi');
                    $endMonth = date('Y-m-t H:i:s');
                    
                    $title = $service->title;
                    $trainer = $request->input('trainer');
                    $classOrEvent = $request->input('classOrEvent');
                    $class_start_dateTime = $request->input('start');
                    $class_end_dateTime  = $request->input('finish');
                    $venue = $request->input('venue');
                    $desc = $request->input('desc'). '=> '.$service->desc;
                    $cost = $request->input('cost');
                    $status = $request->input('status');

                    while ( strtotime($class_start_dateTime) <= strtotime($endMonth) ) {
                        
                        $createEvent = new class_events;
                        $createEvent->title = $title;
                        $createEvent->classOrEvent = $classOrEvent;
                        $createEvent->code =  $this->classEventsCodeGenerator();
                        $createEvent->trainer = $trainer;  
                        $createEvent->venue = $venue;
                        $createEvent->desc = $desc;
                        $createEvent->cost = $cost;
                        $createEvent->start = $class_start_dateTime;
                        $createEvent->finish = $class_end_dateTime;
                        $createEvent->status = $status;
                        $saved = $createEvent->save();

                        $class_start_dateTime = date('Y-m-d H:i:s', strtotime('+7 day', strtotime($class_start_dateTime)));
                        $class_end_dateTime = date('Y-m-d H:i:s', strtotime('+7 day', strtotime($class_end_dateTime)));
                    }
                    if (!$saved) {
                        return response()->json(['error' => $createEvent]);
                    }
                    else {
                        return response()->json(['success' =>'Classes populated succesfully.']); 
                    }

                }
            
        }

    }

    public function services($service_id)
    {
        $service = DB::table('services')
                        ->where('id', $service_id)
                        ->first();
        return $service;
    }




    public function show(class_events $class_events, $id)
    {
        //
        $userId = Auth::user()->id;
        $event = Booking::whereUser_id($userId)->whereEvent_id($id)->first();     
                $trainer = class_events::find($id)->getTrainer;
                $class = class_events::find($id)->getClass;
                $class_event = class_events::find($id);
              //  dd($class);
                $PayOptions = PayOptions::all();
        if (empty($event)){  
                $submit = 1;
                return view('bookclass', compact('class_event', 'submit', 'trainer', 'class', 'PayOptions'));  
         }
         else
         {
                $submit = 0;
                return view('bookclass', compact('class_event', 'submit', 'trainer', 'class', 'PayOptions'));
         }
    }

    public function edit(class_events $class_events)
    {
        //
    }

    public function update(Request $request, class_events $class_events)
    {
        //
        dd('kevin');
        
    }

    public function destroy(class_events $class_events)
    {
        //

    }
}
