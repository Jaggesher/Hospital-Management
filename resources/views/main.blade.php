<!DOCTYPE html>
<html>
    <head>
    {{--Every child page should inject page title through section name title--}}
    @include('partials.BasicPartials._head')
    @yield('OuterInclude')
    </head>

    <body>
        @include('partials.BasicPartials._navigation')
        @yield('Home')
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
