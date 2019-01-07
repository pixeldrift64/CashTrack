@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bills</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <span>
                      <a class="btn btn-primary" href="/bills/add" role="button">Add new</a>
                    </span>

                    @foreach ($bills as $b)
                      <div class="recent-transaction">
                        <img src="{{ $b->image }}">
                        <h3>{{ $b->name }}</h3>
                        <p><b>&pound;{{ $b->amount }}</b> | Due {{ date('jS F', strtotime($b->payment_date)) }}</p>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
