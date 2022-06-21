@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello ! <b>{{ Auth::user()->name }}</b> {{ __('You are logged in!') }}<br>
                    ID: {{ Auth::user()->id }} <br>
                    Avatar: {{ Auth::user()->avatar }} <br>
                    Email: {{ Auth::user()->email }} <br>
                    Email verified at: {{ Auth::user()->email_verified_at }} <br>
                    Created at: {{ Auth::user()->created_at }}<br>
                    Type: {{ Auth::user()->type }}<br>
                    Updated at: {{ Auth::user()->updated_at }}<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
