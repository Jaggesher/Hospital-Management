<!DOCTYPE html>
<html>
    <head>
    {{--Every child page should inject page title through section name title--}}
    @include('partials.BasicPartials._head')
    @yield('OuterInclude')
    </head>

    <body>
        @include('partials.BasicPartials._navigation')
     
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{asset('img/1.jpg')}}" alt="image1" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="{{asset('img/2.jpg')}}" alt="image2" style="width:100%;">
                    </div>
                    
                    <div class="item">
                        <img src="{{asset('img/3.jpg')}}" alt="image2" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        

        <div id="ContentOfBody" class="container">
            @yield('ContentOfBody')
            <div class="row">
            </div>
        </div>
        <div class="container">
             <div class="col-sm-6">
                <div class="main-class1">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="main-class2">
                    
                </div>
            </div>
        </div>
        <footer class="clearfix">
            <div>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
            <p><span class="glyphicon glyphicon-copyright-mark"></span> All Right Reserved.</p>
            <p>Developed By. Nandan Sharker, Dept Of CSE University Of Rajsgahi. </p>
        </footer>
    </body>

</html>
