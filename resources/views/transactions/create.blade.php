@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add New Transaction</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/transactions">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Amount (£)</label>
                        <input type="number" class="form-control" id="amount" name="amount">
                      </div>
                      <div class="form-group">
                        <label>Payment Date</label>
                        <input type="date" class="form-control" id="date" name="payment_date" value="{{ \Carbon\Carbon::now()->toDateString() }}">
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a class="btn btn-danger" href="/bills" role="button">Cancel</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
