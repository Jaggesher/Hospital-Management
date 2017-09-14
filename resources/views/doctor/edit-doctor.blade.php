@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
   Update Doctor
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/edit_doctor.css') }}" rel="stylesheet">
    <script src="{{ asset('js/edit_doctor.js') }}"></script>
@endsection


@section('ContentOfBody')
	<div class="container">
		<div class=" col-sm-12 pro_head">
			<h2>Edit Doctor</h2>
		</div>


		 <div class="col-sm-4 pro_image" align="center">
        <h4>Current Profile Picture.</h4>
        <img  id="ProPicUp" src="{{ asset($Personal->img) }}" class="img-thumbnail clearfix" alt="Profile Pic" width="200" height="200">
        <form action="{{route('Doc.savePicture')}}" method="post" enctype="multipart/form-data">
             <input type="hidden" name="_token" value="{{csrf_token()}}">
             <input type="hidden" name="id" value="{{$Personal->id}}">
            <div class="form-group">
                <input type="file" name="fileToUpload" id="fileToUpload" class="file" accept="image/jpg, image/jpeg, image/png" required>
            </div>

            <div class="input-group" style="width:220px;">
                <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                <input id="displayFileName" type="text" class="form-control" value="" readonly placeholder="Upload Image">
                <span class="input-group-btn">
                    <button class="browse btn btn-primary" type="button"><i class="glyphicon glyphicon-folder-open"></i></button>
                </span>
            </div>

          <button id="SavePropic" class="btn btn-primary " type="submit" style="width:220px;"><i class="glyphicon glyphicon-ok-sign"></i> Set as Profile</button>
        </form>
       
          @if ($errors->has('fileToUpload'))
            <div class="alert alert-danger">
              <span class="help-block">
                  <strong>{{ $errors->first('fileToUpload') }}</strong>
              </span>
            </div>
          @endif
          @if (Session::has('wrong'))
            <div class="alert alert-danger">
              <span class="wrong">
                <strong> {{ Session::get('wrong') }}</strong>
              </span>
            </div>
          @endif
        
    </div>

    <div class="col-sm-8 pro_info">
      @if(count($errors) > 0 || Session::has('no_match'))
        <div id="errMsg">
            <button id="fail" type="button" class="pull-right alert-danger"><span class="glyphicon glyphicon-remove alert-danger"> </span></button>
            <p style="margin-bottom: 3px; text-align: center;" class="alert alert-danger fail"><strong>FAIL</strong>, Please fill information correctly.</p>
        </div>
      @endif 
        	<h3 style="margin-bottom: 3px;">Update Your Doctor's info </h3> 

            <br>
            <form class="form-horizontal" role="form" method="post" action="{{route('Doc.Edit.Submit')}}">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
               <input type="hidden" name="id" value="{{$Personal->id}}">

              	<div class="form-group">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-8">
                              <input class="form-control" type="text" name="name" placeholder="Doctor's Name"  value="{{ $Personal->name }}" maxlength="49" required readonly >
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('sort_msg') ? ' has-error' : '' }}">
                            <label class="col-lg-3 control-label">Short Message:</label>
                            <div class="col-lg-8">
                              <input class="form-control" type="text" name="sort_msg" placeholder="Sort Message" value="{{ $Personal->sort_msg }}" maxlength="149" required autofocus>
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
                                        <option value="{{$category->category}}" @if($Personal->category==$category->category){{"selected"}} @endif>{{$category->category}}</option>
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
                              <textarea class="form-control" rows="8" placeholder="About Doctor." name="description" required>{{ $Personal->description }}</textarea>
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
                              <input class="form-control"  type="number" name="Money" placeholder="enter amount"   min="0" max="5000" value="{{ $Personal->Money }}" required >
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
                              <input class="form-control" type="text" name="Office" placeholder="Room No." value="{{ $Personal->Office }}" maxlength="10" required >
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
                              <input class="form-control" type="time" name="duty_time" placeholder="Room No." value="{{ $Personal->duty_time }}" maxlength="10" required >
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
                  <input type="submit" class="btn btn-primary" value="Update Doctor">
                  <span></span>
                  {{-- <input type="reset" class="btn btn-default" value="Cancel"> --}}
                </div>
              </div>
            </form>
            <br>
            <br>
            <br>
    	</div>
	</div>
@endsection 