@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
   Add Serial
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/serial_add.css') }}" rel="stylesheet">
   {{--  <script src="{{ asset('js/edit_patient.js') }}"></script> --}}
@endsection


@section('ContentOfBody')
	{{-- Main Profile View --}}
    <div class="container">
        <div class=" col-sm-12 pro_head">
            <h2>Add Serial</h2>
        </div>
    </div>
@endsection 