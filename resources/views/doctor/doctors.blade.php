@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
   Doctors
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/doctors.css') }}" rel="stylesheet">
    <script src="{{ asset('js/doctors.js') }}"></script>
@endsection


@section('ContentOfBody')
	<div class="container">
        <div class=" col-sm-12 pro_head">
            <h2>Doctors List.</h2>
        </div>

        <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
                <div class="col-lg-12">
                    <select id="category" class="form-control">
                        <option value="A">A</option>
                        <option value="A">B</option>
                        <option value="A">C</option>
                        <option value="A">D</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="DoctorsList">
         <h4 class="alert alert-success text-center">here Come Doctors List, According to Category. By ajax</h4>
    </div>
@endsection 