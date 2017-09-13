<header>
    <nav class="navbar navbar-default head-nav">
        <div class="container-fluid">
            <div>
                <div class = "navbar-header pull left">
                    <a class = "navbar-brand">
                        Patient Management System
                    </a>
                </div>
                <!--right navigation start -->
                <div class="navbar-header pull-right customizeNavbarHeader">
                    <a class = "navbar-brand" href="#">Add Doctor</a>
                    <a class = "navbar-brand" href="#">Log In</a>
                    <a class = "navbar-brand" href="#">Log Out</a>
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
                    <li class="Contests"><i class="fa fa-list-alt"></i><a href="">Doctor List</a></li>
                    <li class="Results"><i class="fa fa-list-alt"></i><a href="">Serial</a></li>
                </ul> <!--Left navigation ends -->
            </div>
        </div>
    </nav>
</div>





{{-- @include('login.login') <!-- Login modal --> --}}