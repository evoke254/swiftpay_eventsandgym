<?php

namespace App\Http\Controllers;

use App\chatResponses;
use Illuminate\Http\Request;

class ChatResponsesController extends Controller
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
     * @param  \App\chatResponses  $chatResponses
     * @return \Illuminate\Http\Response
     */
    public function show(chatResponses $chatResponses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\chatResponses  $chatResponses
     * @return \Illuminate\Http\Response
     */
    public function edit(chatResponses $chatResponses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\chatResponses  $chatResponses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chatResponses $chatResponses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\chatResponses  $chatResponses
     * @return \Illuminate\Http\Response
     */
    public function destroy(chatResponses $chatResponses)
    {
        //
    }
}
