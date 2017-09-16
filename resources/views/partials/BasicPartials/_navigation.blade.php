<header>
    <nav class="navbar navbar-default head-nav">
        <div class="container-fluid">
            <div>
                <div class = "navbar-header pull left">
                    <a class = "navbar-brand">
                        <span class="glyphicon glyphicon-list-alt" style="font-size: 25px;"></span>
                        Patient Management System
                    </a>
                </div>
                <!--right navigation start -->
                <div class="navbar-header pull-right customizeNavbarHeader">
                    @if (Auth::guest() && !Auth::guard('admin')->check())
                        <a class = "navbar-brand top-menu" href="{{ route('login') }}">Login</a>
                        <a class = "navbar-brand top-menu" href="{{ route('register') }}">Register</a>
                    @else
                        @if(Auth::guard('admin')->check())
                            <a class = "navbar-brand top-menu" href="#">{{Auth::guard('admin')->user()->name}}<small>(Admin)</small></a>
                            <a class = "navbar-brand top-menu" href="#}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out" style="font-size: 15px;"></span></a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                            </form>
                        @elseif(Auth::guard('web')->check())
                                <a class = "navbar-brand top-menu" href="{{ route('patient.Profile')}}">{{Auth::guard('web')->user()->fname}}</a>
                                <a class = "navbar-brand top-menu" href="#}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out" style="font-size: 15px;"></span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 {{ csrf_field() }}
                            </form>
                        @endif
                    @endif
                   
                    
                </div> <!--right navigation ends -->
            </div>
        </div>
        <script>
        //This is for responsiveness of navbar
            $(document).load($(window).bind("resize", checkPosition));
            function checkPosition()
            {
                  if ($(window).width() <= 768){	
                    $(".customizeNavbarHeader").removeClass("pull-right").addClass("pull-left");
                }
                else{
                     $(".customizeNavbarHeader").removeClass("pull-left").addClass("pull-right");
                }

            }
        </script>
    </nav>
</header>

<div class = "secondNav">
    <nav class="navbar navbar-default my-nav">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fullNavbar"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#">Brand</a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="fullNavbar">
                <!--Left navigation start -->
                <ul class="nav navbar-nav my-menu">
                    <li class="Home"><i class="fa fa-list-alt"></i><a href="/">Home</a></li>
                    <li class="DoctorList"><i class="fa fa-list-alt"></i><a href="{{route('Doctors')}}">Our Doctor's</a></li>

                    @if(Auth::guard('admin')->check())
                        <li class="AddDoctor"><i class="fa fa-list-alt"></i><a href="{{route('Doc.Add')}}">Add Doctor</a></li>
                    @elseif(Auth::guard('web')->check())
                        <li class="Serial"><i class="fa fa-list-alt"></i><a href="{{route('patient.Add.Serial')}}">Book Appointmnet</a></li>
                    @endif
                </ul> <!--Left navigation ends -->
            </div>
        </div>
    </nav>
</div>