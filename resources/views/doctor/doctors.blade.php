@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
   Doctors
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/doctors.css') }}" rel="stylesheet">
    {{-- <script src="{{ asset('js/doctors.js') }}"></script> --}}
@endsection


@section('ContentOfBody')
	<div class="container">
        <div class=" col-sm-12 pro_head">
            <h2>Doctors List.</h2>
        </div>

        <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
                <div class="col-lg-12">
                    <input type="hidden" name="_token" id="csrf" value="{{csrf_token()}}">
                    <select id="category" class="form-control">
                        <option value="" disabled selected hidden>Select Category.</option>
                        @foreach($Categories as $category)
                            <option value="{{$category->category}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="DoctorsList">
        <br>
        <br>
        <br>
        <br>
        <h1 class="alert alert-success text-center">Choose Category Of Doctos.</h1>
    </div>


     <script type="text/javascript">
        $(document).ready(function(){

            $( "#category" ).change(function() {
                $("#DoctorsList").html('<div align="center" ><br><br><br><br><br><div class="loader"></div></div>');

                $.ajax({
                    type:'POST',
                    url:'<?php echo url('doctors'); ?>',
                    data:{ category : $('#category option:selected').val(),_token :$('#csrf').val() },
                    success:function(data){
                        // alert(data);
                        $("#DoctorsList").html(data);
                   }
                });
            });

        });

    </script>

@endsection 