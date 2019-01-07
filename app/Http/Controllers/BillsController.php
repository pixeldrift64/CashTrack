<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use Auth;

class BillsController extends Controller
{

  public function index()
  {

    $bills = Bill::where("user_id", Auth::user()->id)
      ->get();

    return view('bills.index', [
      'bills' => $bills
    ]);
  }

  public function create()
  {
    return view('bills.create');
  }

  public function store()
  {

    $bill = new Bill();

    $bill->user_id = Auth::user()->id;
    $bill->name = request('name');
    $bill->description = request('description');
    $bill->amount = request('amount');
    $bill->recurs = request('recur');
    $bill->payment_date = request('payment_date');

    $bill->save();

    return redirect('/bills');

  }

}
