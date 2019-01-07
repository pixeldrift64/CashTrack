@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add New Bill</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/bills">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label>Bill Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                      </div>
                      <div class="form-group">
                        <label>Bill Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Amount (£)</label>
                        <input type="number" class="form-control" id="amount" name="amount">
                      </div>
                      <div class="form-group">
                        <label>Payment Date</label>
                        <input type="date" class="form-control" id="date" name="payment_date">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Payment Frequency</label>
                        <select class="form-control" id="recur" name="recur">
                          <option value=0>Never</option>
                          <option value=1>Daily</option>
                          <option value=2>Weekly</option>
                          <option value=3>Bi-Weekly</option>
                          <option value=4>Monthly</option>
                          <option value=5>Yearly</option>
                        </select>
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
