<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $transactions = Transaction::orderBy('created_at','desc')
          ->where("user_id", Auth::user()->id)
          ->take(5)
          ->get();

        return view('dashboard', [
          'transactions' => $transactions
        ]);
    }
}