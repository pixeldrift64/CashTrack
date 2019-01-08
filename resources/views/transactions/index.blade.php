@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Transactions</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <span>
                      <a class="btn btn-primary" href="/transactions/add" role="button">Add new</a>
                    </span>

                    @foreach ($transactions as $t)
                      <div class="recent-transaction">
                        <img src="{{ $t->image }}">
                        <h3>{{ $t->name }}</h3>
                        <p><b>&pound;{{ $t->amount }}</b></p>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
