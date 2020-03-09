<?php

namespace App\Http\Controllers;

use App\User;
use App\Account;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Auth;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('SessionAlerts');
    }

    public function index()
    {
        //
        $accounts = Account::paginate(40);

        return view('admin.accounts', compact('accounts'));
    }

  
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

   
    public function show(Account $account)
    {
        //
    }

    public function edit(Account $account)
    {
        //
    }

  
    public function update(Request $request, Account $account)
    {
        //
    }

   
    public function destroy(Account $account)
    {
        //
    }
}
