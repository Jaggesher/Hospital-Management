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
    	<div class="col-sm-8 col-sm-offset-2">
	    	<div class="jumbotron">
	    		<form class="form-horizontal" role="form" method="post" action="{{route('Doc.Add.Submit')}}">
					<input type="hidden" name="_token" value="{{csrf_token()}}">

						<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
		                    <label class="col-lg-3 control-label">Name:</label>
		                    <div class="col-lg-8">
		                      <input class="form-control" type="text" name="name" placeholder="Doctor's Name"  value="{{ old('name') }}" maxlength="49" required autofocus >

		                       @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
		                    </div>
	                    </div>

	                    <div class="form-group {{ $errors->has('sort_msg') ? ' has-error' : '' }}">
		                    <label class="col-lg-3 control-label">Short Message:</label>
		                    <div class="col-lg-8">
		                      <input class="form-control" type="text" name="sort_msg" placeholder="Sort Message" value="{{ old('sort_msg') }}" maxlength="149" required >
		                        @if ($errors->has('sort_msg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sort_msg') }}</strong>
                                    </span>
                                @endif
		                    </div>
	                    </div>

	                     <div class="form-group {{ $errors->has('category') ? ' has-error' : '' }}">
		                    <label class="col-lg-3 control-label">Category:</label>
		                    <div class="col-lg-8">
			                    <select class="form-control" name="category">

			                    	@foreach($Categories as $category)
			                    		<option value="{{$category->category}}">{{$category->category}}</option>
			                    	@endforeach
								</select>
								@if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
		                    </div>
	                    </div>


	                    <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
		                    <label class="col-lg-3 control-label">description:</label>
		                    <div class="col-lg-8">
		                      <textarea class="form-control" rows="8" placeholder="About Doctor." name="description" value="{{ old('description') }}" required></textarea>
		                       @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
		                    </div>
	                    </div>

	                    <div class="form-group {{ $errors->has('Money') ? ' has-error' : '' }}">
		                    <label class="col-lg-3 control-label">Money:</label>
		                    <div class="col-lg-8">
		                      <input class="form-control"  type="number" name="Money" placeholder="enter amount"   min="0" max="5000" value="{{ old('Money') }}" required >
		                       @if ($errors->has('Money'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Money') }}</strong>
                                    </span>
                                @endif
		                    </div>
	                    </div>

	                    <div class="form-group {{ $errors->has('Office') ? ' has-error' : '' }}">
		                    <label class="col-lg-3 control-label">Office Room No:</label>
		                    <div class="col-lg-8">
		                      <input class="form-control" type="text" name="Office" placeholder="Room No." value="{{ old('Office') }}" maxlength="10" required >
		                       @if ($errors->has('Office'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Office') }}</strong>
                                    </span>
                                @endif
		                    </div>
	                    </div>

	                    <div class="form-group {{ $errors->has('duty_time') ? ' has-error' : '' }}">
		                    <label class="col-lg-3 control-label">Office Time:</label>
		                    <div class="col-lg-8">
		                      <input class="form-control" type="time" name="duty_time" placeholder="Room No." value="{{ old('duty_time') }}" maxlength="10" required >
		                       @if ($errors->has('duty_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('duty_time') }}</strong>
                                    </span>
                                @endif
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