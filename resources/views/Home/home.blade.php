@extends('main')

@section('Home')
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
                    <img class= "img-responsive" src="{{asset('img/1.jpg')}}" alt="image1" style="width:100%;">
                </div>

                <div class="item">
                    <img class= "img-responsive" src="{{asset('img/2.jpg')}}" alt="image2" style="width:100%;">
                </div>
                
                <div class="item">
                    <img class= "img-responsive" src="{{asset('img/3.jpg')}}" alt="image2" style="width:100%;">
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
    <hr>
    <div class="contain">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <img src="{{ asset('img/1.jpg') }}" alt="Image">
                    <div class="contain">
                        <h4 class="name">Mister Modu</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat adipisci sit eos dolorum fugiat. Pariatur cupiditate repellat odit assumenda explicabo iusto tempora eaque vitae itaque, aperiam recusandae quibusdam dolores laudantium?</p>
                        <button type="button" class="btn btn-success">Success</button>
                    </div>
                </div>
            </div>  
            <div class="col-sm-3">
                <div class="card">
                    <img src="{{ asset('img/1.jpg') }}" alt="Image">
                    <div class="contain">
                        <h4 class="name">Mister Modu</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat adipisci sit eos dolorum fugiat. Pariatur cupiditate repellat odit assumenda explicabo iusto tempora eaque vitae itaque, aperiam recusandae quibusdam dolores laudantium?</p>
                        <button type="button" class="btn btn-success">Success</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <img src="{{ asset('img/1.jpg') }}" alt="Image">
                    <div class="contain">
                        <h4 class="name">Mister Modu</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat adipisci sit eos dolorum fugiat. Pariatur cupiditate repellat odit assumenda explicabo iusto tempora eaque vitae itaque, aperiam recusandae quibusdam dolores laudantium?</p>
                        <button type="button" class="btn btn-success">Success</button>
                    </div>
                </div>
            </div>

               <div class="col-sm-3">
                    <div class="card">
                        <img src="{{ asset('img/1.jpg') }}" alt="Image">
                        <div class="contain">
                            <h4 class="name">Mister Modu</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat adipisci sit eos dolorum fugiat. Pariatur cupiditate repellat odit assumenda explicabo iusto tempora eaque vitae itaque, aperiam recusandae quibusdam dolores laudantium?</p>
                            <button type="button" class="btn btn-success">Success</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
      <hr>
     <div class="statement">
        <div>
            <div class="content">
                <h1>Patient Management  System</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam atque recusandae, veniam necessitatibus vitae unde. Possimus iste, debitis corporis sed quisquam tempore accusantium. Magni voluptate et quo odio quibusdam obcaecati.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam atque recusandae, veniam necessitatibus vitae unde. Possimus iste, debitis corporis sed quisquam tempore accusantium. Magni voluptate et quo odio quibusdam obcaecati.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection