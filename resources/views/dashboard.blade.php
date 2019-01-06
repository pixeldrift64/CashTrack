@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Overview graph to go here
                </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-header">Quick Overview</div>
              <div class="card-body">

                <div class="quick-overview">
                  <h2>&pound{{ Auth::user()->salary }}</h2>
                  <p>Available to spend</p>

                  <p>20 Days until Payday</p>

                </div>

              </div>
          </div>
          <div class="card">
              <div class="card-header">Recent Transactions</div>
              <div class="card-body">

                @foreach ($transactions as $t)
                  <div class="recent-transaction">
                    <img src="{{ $t->image }}">
                    <h3>{{ $t->name }}</h3>
                    <p><b class="expense">&pound;{{ $t->amount }}</b> | {{ $t->description }}</p>
                  </div>
                @endforeach

              </div>
          </div>
        </div>
    </div>
</div>
@endsection
