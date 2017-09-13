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
			<div class="col-sm-3" align="center"> 
				<img src="{{ asset("image/RakulPreet.jpg") }}" class="img-thumbnail" alt="Profile Pic" width="200" height="200">
				<p class="cls_sort_msg"> Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum.</p>
			</div>
			<div class="col-sm-9">
				<div class="pro-info">
					<table class="table info_table">
						<tbody>
							<tr>
							  <td><strong>Category:</strong></td>
							  <td> <strong>Medicine</strong></td>
							</tr>
							<tr>
							  <td>Doctor's Office:</td>
							  <td>202</td>
							</tr>
							<tr>
							  <td>Time :</td>
							  <td>At 10.30PM</td>
							</tr>
							<tr>
							  <td>Total:</td>
							  <td>500tk</td>
							</tr>
						</tbody>
			        </table>

			        <div class="doc-desc-cls">
			        	<h1>About:</h1>
			        	<p class="doc-description">Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibu. Suspendisse congue 1986 viverra nunc sed ultrices. Aliquam erat volutpat. Sed feugiat semper elit nec euismod. Cras pretium ultricies adipiscing. Etiam id dolor ligula. Sed feugiat pretium scelerisque. Vestibulum porta nisi in purus egestas vehicula. Mauris ligula dolor, facilisis vel varius sit amet, fringilla at augue. Duis rutrum 1994 elementum sem a venenatis. Aenean justo neque, auctor eu semper eget, sollicitudin in diam. Mauris mattis porta quam, id placerat tortor venenatis ac. In in tincidunt leo.</p>
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