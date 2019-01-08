<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Auth;

class TransactionsController extends Controller
{

  public function index()
  {

    $transactions = Transaction::where("user_id", Auth::user()->id)
      ->get();

    return view('transactions.index', [
      'transactions' => $transactions
    ]);
  }

  public function create()
  {
    return view('transactions.create');
  }

  public function store()
  {

    $transaction = new Transaction();

    $transaction->user_id = Auth::user()->id;
    $transaction->name = request('name');
    $transaction->description = request('description');
    $transaction->amount = request('amount');

    $payment_date = request('payment_date');
    if ($payment_date != \Carbon\Carbon::now()->toDateString()) {
      $transaction->created_at = request('payment_date');
    }

    $transaction->save();

    return redirect('/transactions');

  }

}
