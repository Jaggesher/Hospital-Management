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
		<div class=" col-sm-12 add_doc_head">
			<h2 class="pull-left">Edit Doctor</h2>
		</div>
	</div>
@endsection 