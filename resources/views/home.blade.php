@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><p>Welcome, {{Auth::user()->name}}!</p></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Today's weather is 23C.</p>
                    <p>Today's exchange rate for 1 USD is 56.89 PHP.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
