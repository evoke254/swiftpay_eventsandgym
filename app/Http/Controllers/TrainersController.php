<?php

namespace App\Http\Controllers;

use App\Trainers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('SessionAlerts');
    }
    public function index()
    {
        //
        $trainers = DB::table('users')
                    ->where('title', 'trainer')
                    ->get();
        return view('trainers', compact('trainers'));
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
     * @param  \App\Trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function show(Trainers $trainers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainers $trainers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainers $trainers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trainers  $trainers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainers $trainers)
    {
        //
    }
}
