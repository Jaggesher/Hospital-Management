@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
    Doctor
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/add_doctor.css') }}" rel="stylesheet">
    <script src="{{ asset('js/add_doctor.js') }}"></script>
@endsection


@section('ContentOfBody')
	 {{-- Main Add Doctor View --}}
    <div class="container">
    	 <div class=" col-sm-12 add_doc_head">
	        <h2>Add New Doctor.</h2>
	    </div>
	    <br>
	    <br>
    	<div class="col-sm-9 col-sm-offset-1">
	    	<div class="jumbotron">
	    		<form class="form-horizontal" role="form" method="post" action="#">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group">
		                    <label class="col-lg-3 control-label">Name:</label>
		                    <div class="col-lg-8">
		                      <input class="form-control" type="text" name="name" placeholder="Doctor's Name" value="" maxlength="49" required >
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label class="col-lg-3 control-label">Short Message:</label>
		                    <div class="col-lg-8">
		                      <input class="form-control" type="text" name="sort_msg" placeholder="Sort Message" value="" maxlength="149" required >
		                    </div>
	                    </div>

	                     <div class="form-group">
		                    <label class="col-lg-3 control-label">Category:</label>
		                    <div class="col-lg-8">
			                    <select class="form-control" name="category">
								    <option value="A">A</option>
								    <option value="A">B</option>
								    <option value="A">C</option>
								    <option value="A">D</option>
								</select>
		                    </div>
	                    </div>


	                    <div class="form-group">
		                    <label class="col-lg-3 control-label">description:</label>
		                    <div class="col-lg-8">
		                      <textarea class="form-control" rows="8" placeholder="About Doctor." name="description" ></textarea>
		                    </div>
	                    </div>

	                    <div class="form-group">
		                    <label class="col-lg-3 control-label">Money:</label>
		                    <div class="col-lg-8">
		                      <input class="form-control"  type="number" name="Money" placeholder="enter amount"   min="0" max="5000" required >
		                    </div>
	                    </div>

	                    <div class="form-group">
		                    <label class="col-lg-3 control-label">Office Room No:</label>
		                    <div class="col-lg-8">
		                      <input class="form-control" type="text" name="Office" placeholder="Room No." value="" maxlength="10" required >
		                    </div>
	                    </div>

	                    <div class="form-group">
		                    <label class="col-lg-3 control-label">Office Time:</label>
		                    <div class="col-lg-8">
		                      <input class="form-control" type="time" name="duty_time" placeholder="Room No." value="" maxlength="10" required >
		                    </div>
	                    </div>
	                   
	                    <div class="form-group">
		                    <label class="col-md-3 control-label"></label>
		                    <div class="col-md-8">
		                    	<input type="submit" class="btn btn-primary" value="Add Doctor">
		                    </div>
		                </div>

					</form>
		    	</div>
    		
    	</div>

    </div>
@endsection 