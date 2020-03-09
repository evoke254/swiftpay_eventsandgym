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

class BookController extends Controller
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
        return view('admin.newEvent', compact('class_events', 'services', 'trainers', 'PayOptions'));

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        if ($request->has('update')) {
                $updateEvent = class_events::findOrFail($request->input('eventId'));
                $updateEvent->title = $request->input('title');
                $updateEvent->venue = $request->input('venue');
                $updateEvent->desc = $request->input('desc');
                $updateEvent->cost = $request->input('cost');
                $updateEvent->start = $request->input('start');
                $updateEvent->finish = $request->input('finish');
                $updateEvent->status = $request->input('status');
                $updateEvent->updated_at = now();

                $images = $request->file('image');
                $org_img = $thm_img = true;     

                if( ! File::exists('images/events/originals/')) {
                    $org_img = File::makeDirectory(public_path('images/events/originals/'), 0777, true);
                }
                if ( ! File::exists('images/events/thumbnails/')) {
                    $thm_img = File::makeDirectory(public_path('images/events/thumbnails'), 0777, true);
                }
                    $filename = rand(1111,9999).time().'.'.$image->getClientOriginalExtension();
     
                    $org_path = 'images/events/originals/' . $filename;
                    $thm_path = 'images/events/thumbnails/' . $filename;
     
                    $updateEvent->image     = 'images/events/originals/'.$filename;
                    $updateEvent->thumbnail = 'images/events/thumbnails/'.$filename;
     
                   if (($org_img && $thm_img) == true) {
                       Image::make($image)->fit(900, 500, function ($constraint) {
                               $constraint->upsize();
                           })->save($org_path);
                       Image::make($image)->fit(270, 160, function ($constraint) {
                           $constraint->upsize();
                       })->save($thm_path);
                   }


                if (! $updateEvent->save()) 
                {
                    return response()->json(['error' => $updateEvent]);
                } 
                elseif ($updateEvent->save()) 
                {
                    return response()->json(['success' =>'Event succesfully updated.']);   
                }
        } else {
                $createEvent = new class_events;

                    if ($request->input('classOrEvent') == 'Event') {
                        $createEvent->title = $request->input('etitle');
                    } elseif ($request->input('classOrEvent') == 'Class') {
                        $createEvent->title = $request->input('title');
                    }
                    $createEvent->classOrEvent = $request->input('classOrEvent');
                    $createEvent->code =  $this->classEventsCodeGenerator();
                    $createEvent->trainer = $request->input('trainer');  
                    $createEvent->venue = $request->input('venue');
                    $createEvent->desc = $request->input('desc');
                    $createEvent->cost = $request->input('cost');
                    $createEvent->start = $request->input('start');
                    $createEvent->finish = $request->input('finish');
                    $createEvent->status = $request->input('status');

                        //Save images

                        $images = $request->file('image');
                        $org_img = $thm_img = true; 
                        if( ! File::exists('images/events/originals/')) {
                            $org_img = File::makeDirectory(public_path('images/events/originals/'), 0777, true);
                        }
                        if ( ! File::exists('images/events/thumbnails/')) {
                            $thm_img = File::makeDirectory(public_path('images/events/thumbnails'), 0777, true);
                        }
                            $filename = rand(1111,9999).time().'.'.$image->getClientOriginalExtension();
             
                            $org_path = 'images/events/originals/' . $filename;
                            $thm_path = 'images/events/thumbnails/' . $filename;
             
                            $createEvent->image     = 'images/events/originals/'.$filename;
                            $createEvent->thumbnail = 'images/events/thumbnails/'.$filename;
             
             
                           if (($org_img && $thm_img) == true) {
                               Image::make($image)->fit(900, 500, function ($constraint) {
                                       $constraint->upsize();
                                   })->save($org_path);
                               Image::make($image)->fit(270, 160, function ($constraint) {
                                   $constraint->upsize();
                               })->save($thm_path);
                           }

             

                if (! $createEvent->save()) 
                {
                    return response()->json(['error' => $createEvent]);
                } 
                elseif ($createEvent->save()) 
                {
                    return response()->json(['success' =>'Event saved succesfully.']);   
                }
            
        }

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
