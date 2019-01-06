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
                  <h2>£4000</h2>
                  <p>Available to spend</p>

                  <p>20 Days until Payday</p>

                </div>

              </div>
          </div>
          <div class="card">
              <div class="card-header">Recent Transactions</div>
              <div class="card-body">

                <div class="recent-transaction">
                  <img src="https://pbs.twimg.com/profile_images/1080454881553645569/LaoFLh4d_400x400.jpg" />
                  <h3>Nintendo</h3>
                  <p><b class="expense">£30</b> | Game purchase</p>
                </div>

                <div class="recent-transaction">
                  <img src="https://pbs.twimg.com/profile_images/816259201425113089/e_th87wB_400x400.jpg" />
                  <h3>Northern Parrots</h3>
                  <p><b class="expense">£50</b> | Parrot Food</p>
                </div>

                <div class="recent-transaction">
                  <img src="https://pbs.twimg.com/profile_images/378800000730321932/70d654373f7121d4ba67b706ab65a4bf_400x400.png" />
                  <h3>Evolution Funding</h3>
                  <p><b class="gain">£3000</b> | Salary</p>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
