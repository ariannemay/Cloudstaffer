@extends('layouts.wonav')

@section('content')
<div class="wrapper_home">
<div class="mod_container animated fadeInUp">
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card card_mod">
                <div class="card-content">
                    <h5 class="card-title card-title-mod">
                        <img src="{{URL::asset('logo_white.png')}}" style="width: 320px">
                        <!-- Sign in your account --></h5>
                    <div>
                        <form method="post" action="{{ url('/login') }}">
                            <div class="row">
                                {!! csrf_field() !!}
                                <div class="input-field col s12">
                                    <input id="email_mod" type="email" class="validate{{ $errors->first('email') ? ' animated shake' : '' }}" data-error="{{ $errors->first('email') }}" name="email">
                                    <label for="email">Email</label>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-field col s12">
                                    <input id="password_mod" type="password" class="validate{{ $errors->first('password') ? ' animated shake' : '' }}" name="password">
                                    <label for="password">Password</label>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="input-field col s12">
                                    <button class="btn btn-mod waves-effect waves-light" type="submit" name="submit">Login</button>
                                </div>
                                <div class="input-field col s12">
                                    <input type="checkbox" name="remember" id="remember" class="filled-in">
                                    <label for="remember">Remember me</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        Materialize.updateTextFields();
    })
</script>
@endsection
