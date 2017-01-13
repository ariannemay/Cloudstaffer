@extends('layouts.wonav')

@section('content')
<div class="wrapper_home">
<div class="mod_container animated fadeInUp">
    <div class="row">
        <div class="col s12">
            <div class="card card_mod">
                <div class="card-content">
                    <h5 class="card-title">Welcome to Cloudstaff</h5>
                    <p>
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                       <br>
                       Aenean commodo ligula eget dolor. Aenean massa.
                    </p>
                </div>
                <div class="card-action">
                    <a href="{{ url('/login') }}">Login</a>
                    <!-- <a href="{{ url('/employee') }}">Employees</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
