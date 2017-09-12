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

    </div>
@endsection 