<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Confirmation - FindATow</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css\site.css') }}">
</head>
<body>
    <div class="container">
        <div class="d-nav justify-content-center">
            <div class="navbar-middle">
                <a href="{{ url('index')}}" class="navbar-brand">FAT</a>
            </div>                    
        </div><hr>
        <div class="card">
            <div class="card-header">
                <h4>Confirmation</h4>
            </div>
            <div class="card-body">
                <p>Your request has been processed, we'll get intouch with you soon.</p>
            </div>
            <div class="card-footer">
                @guest
                    <a href="{{ url('/')}}" class="btn">Back To Home</a>
                @else
                    <a href="{{ url('orderTow', $user->id)}}" class="btn">Back To Home</a>
                @endguest
            </div>            
        </div> 
    </div>    
</body>
</html>