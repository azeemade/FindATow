<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') Dashboard - FindATow</title>

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
    <div class="fixed-top a-nav">
        <div class="uc-dashboard-nav">
            <div class="container d-nav">
                <div class="navbar-left">
                    <div class="sidenav" id="mySidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="{{ url('orderTow', $users->id)}}">Order Tow</a>
                        <a href="{{ url('contactDashboard',$users->id)}}">Contact Us</a>
                        <a href="{{ url('estimateDashboard', $users->id)}}">Estimate Tow</a>
                        <a href="{{ url('profile', $users->id)}}">Profile</a>
                        
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" onclick="openNav()">
                        <svg class="navbar-toggler-icon"height="30px" width="30px" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none">
                            <path stroke="rgb(245, 95, 0)" d="M4 7 h22 M4 15 h22 M4 23 h22" stroke-width="2" stroke-linecap="round"></path>
                        </g>
                        </svg>
                    </button>                 
               </div>
               <div class="navbar-middle">
                    <a href="{{ url('orderTow', $users->id)}}" class="navbar-brand">
                        <svg id="FATlogo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 187.42 144.01"><defs><style>.cls-1{fill:none;stroke:#ea5b0c;stroke-linecap:round;stroke-linejoin:round;stroke-width:4px;}.cls-2{font-size:30px;fill:#ea5b0c;font-family:Verdana-BoldItalic, Verdana;font-weight:700;font-style:italic;}</style></defs><title>logoFAT+name</title><path class="cls-1" d="M384.11,385.61c5.93,5.83,6.41,12.67,4.93,20.33H323.12v11.3" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M355,351.87c-2.54,2-5.55,3.72-7.54,6.08-7.14,8.5-13.89,17.25-20.93,25.82-1.25,1.53-3.18,2.64-4.8,4" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M227.47,440.43l-13.22-18.88c3.24-10.34,13.86-12.15,21.65-16.51,14.62-8.17,29.85-15.53,45-23,6-3,12.37-5.4,18.69-7.85,5.57-2.15,10.52-1.19,13.77,3,3.68,4.77,6.74,9.9,10.35,15.28l-11.66,7" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M368.17,388.62c-2.77-7.23-5.71-14.41-8.27-21.7-2.31-6.56-4.31-13.22-6.21-19.88-.49-1.7-.07-3.6-.07-5.41,6.94-6.78,13.89-6.83,16.58,0,2.33,6,4.28,12,6.27,18.06,2.38,7.21,4.67,14.45,6.92,21.69a15.3,15.3,0,0,1,.42,3.13l-16.33,3.66v16.1" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M260.74,424.17a39.58,39.58,0,0,1,.66,4.82c.12,6.46-3,11.21-9.65,12.71-6.28,1.41-13.38-.44-16.66-4.88-2.09-2.85-.15-11.52,2.72-14.5,4.15-4.3,11.6-4.61,16.65-2.31,2,.91,3.54,2.55,5.62,4.1l24.92-12" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M312,400.07c2.21,8.27.9,12.51-6.3,15.55-7.57,3.21-14.58,1.76-20.44-5.64-2-7.68-.63-11.71,5.95-14.73,7.54-3.47,14-2.3,20.1,3.61" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M280.84,381.39l-17.71-13.84-43,21.44,6.61,20.12" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M328.66,418.14h-9.35v9.64h9.35" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M233.71,383.2l11.09,16.27" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M356.39,351.27c5,0,10.17.28,13.86-3.61" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M355.7,424.77l6.46,4.05L355.35,434c-7-4-7.07-5.36-1-9.23" transform="translate(-212.25 -334.53)"/><path class="cls-1" d="M358.47,415.73c6.67,1.69,11.09,5.16,11.76,11.45.59,5.52-1.07,10.21-6.9,13.26-5.19,2.71-13,2.47-17.34-.61-5.29-3.78-7.61-10.09-5.54-15.06,2.27-5.45,7.86-8.92,14.55-9h2.78" transform="translate(-212.25 -334.53)"/><text class="cls-2" transform="translate(16.46 134.91)">FindATow</text></svg>
                    </a>
                </div>
                <div class="navbar-right"> 
                    <div class="dropdown">              
                        <a href="" class="btn dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="udd">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.999" height="15.999" viewBox="0 0 15.999 15.999"><path id="Icon" d="M-6120-16074v-2c0-2.2,3.6-4,8-4s8,1.8,8,4v2Zm4-12a4,4,0,0,1,4-4,4,4,0,0,1,4,4,4,4,0,0,1-4,4A4,4,0,0,1-6116-16086Z" transform="translate(6120 16089.998)" fill="rgb(245, 95, 0)"/></svg>
                        </a>                               
                        <ul class="dropdown-menu" aria-labelledby="udd">
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('account') }}">{{ __('Login') }}</a>
                                </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('account') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item">
                                <a  class="nav-link" href="#" role="button">
                                    {{ Auth::user()->email }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('index') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>  
                            @endguest 
                        </ul>
                    </div> 
                </div> 
            </div>            
        </div>
        <div class="c-dashboard-nav navbar">            
            <div class="navbar-left">
                <div class="dropdown">
                    <a href="" class="btn dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="udd">
                        {{ Auth::user()->username }}
                    <span class="caret"></span></a>                    
                    <ul class="dropdown-menu" aria-labelledby="udd">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('account') }}">{{ __('Login') }}</a>
                            </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('account') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button">
                        {{ Auth::user()->email }}
                            </a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('index') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </li>
                        @endguest 
                    </ul> 
                </div>                    
            </div>
            <div class="navbar-right">              
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><svg class="navbar-toggler-icon"height="30px" width="30px" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                  <g fill="none">
                    <path stroke="rgb(245, 95, 0)" d="M4 7 h22 M4 15 h22 M4 23 h22" stroke-width="2" stroke-linecap="round"></path>
                  </g></svg></button>
            </div>
            <div class="collapse mt-3" id="navbarCollapse">
                <div class="accountBtns">
                    <button class="accountLink btn" onclick="openPage('OurService')" id="defaultOpen">Our Service</button>
                    <button class="accountLink btn" onclick="openPage('OurCompany')">Our Company</button>
                </div>
                <div id="OurService" class="footerContent">
                    <ul>
                        <li><a href="{{ url('account') }}">Order Tow</a></li>
                        <li><a href="{{ url('index#how-it-works') }}">How It Works</a></li>
                        <li><a href="{{ url('estimateDashboard') }}">Tow Estimator</a></li>
                        <li><a href="">Service Coverage</a></li>
                    </ul>
                </div>
                <div id="OurCompany" class="footerContent">
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="{{ url('contactDashboard') }}">Contact</a></li>
                        <li><a href="">Investor Relations</a></li>
                        <li><a href="">Careers</a></li>
                        <li><a href="">Terms & Condition</a></li>
                        <li><a href="">Privacy Statement</a></li>
                    </ul>
                </div>              
            </div>                
        </div>
    </div>

        <section class="section-body" onload="myFunction()"> 
                @yield('section-a')
        </section>
            
        <div class="dashboard-footer">
            <div>
                <a href="{{ url('orderTow', $users->id)}}" class="m-footerBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                        <defs>
                            <clipPath id="clip-path">
                              <rect width="16" height="15.999" fill="none"/>
                            </clipPath>
                        </defs>
                        <g id="Symbol_14_14" data-name="Symbol 14 – 14" clip-path="url(#clip-path)">
                            <path id="Union_1" data-name="Union 1" d="M-4613,16V9h-7V7h7V0h2V7h7V9h-7v7Z" transform="translate(4620)" fill="grey"/>
                        </g>
                    </svg>
                </a>
            </div>
            <div>
                <a href="{{ url('contactDashboard',$users->id)}}" class="m-footerBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12">
                      <path id="Path_647" data-name="Path 647" d="M14,2H2L8,7ZM0,2A2.006,2.006,0,0,1,2,0H14a2.006,2.006,0,0,1,2,2v8a2.006,2.006,0,0,1-2,2H2a2.006,2.006,0,0,1-2-2Z" fill="grey" fill-rule="evenodd"/>
                    </svg>
                </a>
            </div>
            <div>
               <a href="{{ url('estimateDashboard', $users->id)}}" class="m-footerBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                        <defs>
                            <clipPath id="clip-path">
                              <rect width="16" height="16" fill="none"/>
                            </clipPath>
                        </defs>
                        <g id="Symbol_213_8" data-name="Symbol 213 – 8" clip-path="url(#clip-path)">
                            <rect id="Rectangle_1459" data-name="Rectangle 1459" width="16" height="16" fill="none"/>
                            <path id="Union_48" data-name="Union 48" d="M-937.766-17060.707h-1.411a4.815,4.815,0,0,1-4.234-2.637l-1.694-3.295a2.783,2.783,0,0,0-2.544-1.6H-950v-1.881h2.351a4.817,4.817,0,0,1,4.238,2.637l1.694,3.293a2.773,2.773,0,0,0,2.54,1.6h1.411v-1.883l3.766,2.826-3.766,2.822Zm-12.234,0v-1.883h2.351a2.766,2.766,0,0,0,2.073-.848l.375.941a5.282,5.282,0,0,0,.472.754,4.414,4.414,0,0,1-2.919,1.035Zm12.234-7.529h-1.411a2.78,2.78,0,0,0-2.073.848l-.375-.939a5.184,5.184,0,0,0-.472-.754,4.414,4.414,0,0,1,2.919-1.035h1.411V-17072l3.766,2.82-3.766,2.828Z" transform="translate(950 17074)" fill="grey"/>
                        </g>
                    </svg>
                </a> 
            </div>
            <div>
                <a href="{{ url('profile', $users->id)}}" class="m-footerBtn">
                   <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                      <path id="Union_69" data-name="Union 69" d="M0,15V13.125c0-2.063,3.375-3.75,7.5-3.75s7.5,1.688,7.5,3.75V15ZM3.75,3.75A3.75,3.75,0,1,1,7.5,7.5,3.75,3.75,0,0,1,3.75,3.75Z" fill="grey"/>
                    </svg> 
                </a>
            </div>   
        </div>

        <footer class="dashboard-footer-section">
            <div class="footer-body container">
                <div class="row">
                    <div class="col-md-4">
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="{{ url('contactDashboard',$users->id)}}">Contact</a></li>
                            <li><a href="">Service Coverage</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li><a href="">Career</a></li>
                            <li><a href="{{ url('home', $users->id)}}">Order Tow</a></li>
                            <li><a href="{{ url('estimateDashboard', $users->id)}}">Tow Estimator</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Privacy Statement</a></li>
                            <li><a href="">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-footer container">
                <hr>
                <p>@2018-2020 FindATow Inc. Designed By PACIFICA</p>
            </div>
        </footer>
</body>
</html>
