<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class ProcessBills extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bills:process';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process outstanding user bills to transactions';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      //process user bills into transactions
      $bills = DB::table("bills")
        ->where("payment_date", \Carbon\Carbon::now()->toDateString())
        ->get();

      foreach ($bills as $bill) {
        DB::table('transactions')
          ->insert([
            "user_id" => $bill->user_id,
            "name" => "Bill: " . $bill->name,
            "description" => $bill->description,
            "amount" => $bill->amount
          ]);

        DB::table('bills')
          ->where('user_id', $bill->user_id)
          ->where('id', $bill->id)
          ->update([
            'payment_date' => \Carbon\Carbon::now()->addMonths(1)
          ]);
      }
    }
}
