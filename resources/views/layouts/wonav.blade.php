<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <title>Cloudstaffer</title>

    <!-- Fonts -->
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" rel='stylesheet' type='text/css'>--}}
    <link href="{{url('/font-awesome/css/font-awesome.min.css')}}" rel='stylesheet' type='text/css'>
    {{--<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel='stylesheet' type='text/css'>--}}
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    {{--<link href="{{url('/css/bootstrap-flatly.min.css')}}" rel="stylesheet" type="text/css">--}}
    <link href="{{url('/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('/css/wonav.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ url('/materialize/css/materialize.min.css') }}" type="text/css">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">--}}

    <style>
        html, body, .wrapper_body {
        width: 100%;
        height: 100%;
        overflow: hidden;
            }
        body {
            font-family: 'Roboto', sans-serif;
            background: url('{{URL::asset('OB82EG0-blur.jpg')}}') no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
            }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    
    @yield('content')
    <!-- JavaScripts -->
    <script src="{{url('/js/jquery.min.js')}}"></script>
    <script src="{{url('/materialize/js/materialize.js')}}"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js"></script>--}}
    {{--<script src="{{url('/js/bootstrap.min.js')}}"></script>--}}
    
    <script type="text/javascript">
        $(document).ready(function () {
            $(".button-collapse").sideNav();
            $(".dropdown-button").dropdown();
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-XSRF-Token': $('meta[name="_token"]').attr('content')
                    }
                });
            });
        });
    </script>
    @yield('script')

</body>
</html>
