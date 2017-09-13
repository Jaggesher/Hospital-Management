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
			<h2 class="pull-left">Rakul Preet</h2>
			<h2 class="pull-right">
			    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
			</h2>
		</div>

		<div class="row">
			<div class="col-sm-4">
			</div>

			<div class="col-sm-8">
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