<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('SessionAlerts');
    }
    public function index()
    {
        //
        $services = DB::table('services')
                    ->where('category', 'Studio Classes')
                    ->get(); 

        return view('services', compact('services'));
    }
    public function outdoor()
    {
        //
        $services = DB::table('services')
                    ->where('category', 'Outdoor')
                    ->get(); 

        return view('services', compact('services'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Services $services)
    {
        //
    }


    public function edit(Services $services)
    {
        //
    }

    public function update(Request $request, Services $services)
    {
        //
    }
    public function destroy(Services $services)
    {
        //
    }
}
