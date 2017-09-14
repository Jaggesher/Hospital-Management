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
			    <a href="{{ route('Doc.edit', ['id' => $Personal->id]) }}" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
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

	<div class="container"> 
		<div class="col-sm-12 add_doc_head">
		<h2>Activity</h2>	
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

	
@endsection 