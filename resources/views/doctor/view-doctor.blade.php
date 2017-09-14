@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
    Doctor
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/view_doctor.css') }}" rel="stylesheet">
    <script src="{{ asset('js/view_doctor.js') }}"></script>
@endsection


@section('ContentOfBody')
	<div class="container">
		<div class=" col-sm-12 add_doc_head clearfix">
			<h2 class="pull-left">{{$Personal->name}}</h2>
			<h2 class="pull-right">
				@if(Auth::guard('admin')->check())
			    	<a href="{{ route('Doc.edit', ['id' => $Personal->id]) }}" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
			    @endif
			</h2>
		</div>

		<div class="row">
			<div class="col-sm-3" align="center"> 
				<img src="{{ asset($Personal->img) }}" class="img-thumbnail" alt="Profile Pic" width="200" height="200">
				<p class="cls_sort_msg"> Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum.</p>
			</div>
			<div class="col-sm-9">
				<div class="pro-info">
					<table class="table info_table">
						<tbody>
							<tr>
							  <td><strong>Category:</strong></td>
							  <td> <strong>{{$Personal->category}}</strong></td>
							</tr>
							<tr>
							  <td>Doctor's Office:</td>
							  <td>{{$Personal->Office}}</td>
							</tr>
							<tr>
							  <td>Time :</td>
							  <td>At {{$Personal->duty_time}}</td>
							</tr>
							<tr>
							  <td>Total:</td>
							  <td>{{$Personal->Money}}tk</td>
							</tr>
						</tbody>
			        </table>

			        <div class="doc-desc-cls">
			        	<h1>About:</h1>
			        	<p class="doc-description">{{$Personal->description}}</p>
			        </div>
				</div>
				
		        
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>

	@if(Auth::guard('admin')->check())
		<div class="container"> 
			<div class="col-sm-12 add_doc_head clearfix">
			<h2 class="pull-left">Activity</h2>
			<h2 class="pull-right"><button id="addDateBtn" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></button></h2>	
			</div>

			<div class="col-md-8 col-sm-offset-2" id="addDateBlock">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Another Date.</div>
                    <div class="panel-body">
                    	<p class="alert alert-danger"> <strong>Hey Admin!!!!</strong> <br> &nbsp &nbsp Be serious about the date. Once you add it then it never undo. So you must be over sure about the date.<br>&nbsp&nbsp&nbsp ----Thank You. :) </p>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
             				<input type="hidden" name="id" value="{{$Personal->id}}">

                            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Enter Date</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required autofocus>

                                    @if ($errors->has('date'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Date
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


		  <div class="col-sm-12 contest_table">
		    <table class="table contest_info_table">
		      <thead>
		      <tr>
		        <td>Date</td>
		        <td>Total Patients</td>
		        <td>Print List</td>
		      </tr>
		      </thead>

		      <tbody>
		        <tr>
		          <td>12/08/2017</td>
		          <td>240</td>
		          <td><a href="#">Print</a></td>
		        </tr>

		        <tr>
		          <td>12/08/2017</td>
		          <td>240</td>
		          <td><a href="#">Print</a></td>
		        </tr>

		        <tr>
		          <td>12/08/2017</td>
		          <td>240</td>
		          <td><a href="#">Print</a></td>
		        </tr>

		      </tbody>

		    </table>

		    </br>
		    </br>
		  </div>
		</div>
	@endif
	
@endsection 