<?php

namespace App\Http\Controllers;

use File;
use Image;
use Alert;
use App\Gallery;
use App\class_events;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;



class GalleryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except('gallery', 'grid');
        $this->middleware('SessionAlerts');       
    }

      public function grid($category)
    {
        $files = Storage::files('public/'.$category);
        return view('grid', compact('category', 'files'));
    }

    public function index()
    {
        //Test SWAL Fire Alert::success('Success Title', 'Success Message');
         
         $images = Gallery::paginate(10);
         return view('admin.gallery', compact('images'));
    }

    public function gallery()
    {
        
        $images = Gallery::paginate(100)->where('status', 'Active');

        $event = DB::table('class_events')
                        ->where('classOrEvent','=', 'Event')
                        ->pluck('title')
                        ->toArray();
        /*name in array should match folder names as well as event title. Sorry. We had to survive*/
        $postedPics = array('0' => 'Njigari Hike', );
        $eventTitles = array_intersect($event, $postedPics);
        return view('gallery', compact('images', 'eventTitles'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,jpg,png,gif|max:8000'
        ]);
 
        if ($request->hasFile('image')) {
            $images = $request->file('image');
 
            $org_img = $thm_img = true;
 
            if( ! File::exists('images/gallery/originals/')) {
                $org_img = File::makeDirectory(public_path('images/gallery/originals/'), 0777, true);
            }
            if ( ! File::exists('images/gallery/thumbnails/')) {
                $thm_img = File::makeDirectory(public_path('images/gallery/thumbnails'), 0777, true);
            }
 
            foreach($images as $key => $image) {
 
                $gallery = new Gallery;
 
                $filename = rand(1111,9999).time().'.'.$image->getClientOriginalExtension();
 
                $org_path = 'images/gallery/originals/' . $filename;
                $thm_path = 'images/gallery/thumbnails/' . $filename;
 
                $gallery->image     = 'images/gallery/originals/'.$filename;
                $gallery->thumbnail = 'images/gallery/thumbnails/'.$filename;
                $gallery->title     = $request->title;
                $gallery->category  = $request->category;
                $gallery->caption   = $request->caption;
                $gallery->status    = $request->status;
 
                if ( ! $gallery->save()) {
                    flash('Gallery could not be updated.')->error()->important();
                    return redirect()->back()->withInput();
                }
 
               if (($org_img && $thm_img) == true) {
                   Image::make($image)->fit(900, 500, function ($constraint) {
                           $constraint->upsize();
                       })->save($org_path);
                   Image::make($image)->fit(270, 160, function ($constraint) {
                       $constraint->upsize();
                   })->save($thm_path);
               }
            }
        }
        return redirect('admingallery')->withSuccessMessage('Image uploaded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery, $id)
    {
        //
        $image = Gallery::findOrFail($request->id);
 
        if ($image->status == 1) {
            $image->status = 0;
            $status = 'disabled';
        } else {
            $image->status = 1;
            $status = 'enabled';
        }
 
        if ( ! $image->save()) {
            return redirect()->back()->withErrorMessage('Image could not be updated. Call Kahaki on 0742 968 713');
        }
        return redirect()->back()->withSuccessMessage('Image successfully '.$status);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery, $id)
    {
        //
        $post = Gallery::findOrFail($id);
 
        if ($post->delete()) {
            return redirect()->back()->withSuccessMessage('Image successfully Deleted');
        } else {
            return redirect()->back()->withErrorMessage('Ooops Something went wrong. Call Kahaki on 0742 968 713');
        }
    }
}
