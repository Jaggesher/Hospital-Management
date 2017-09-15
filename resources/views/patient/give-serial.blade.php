@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
   Add Serial
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/serial_add.css') }}" rel="stylesheet">
    {{-- <script src="{{ asset('js/serial_add.js') }}"></script> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection


@section('ContentOfBody')
	{{-- Main Profile View --}}
    <div class="container">
        <div class=" col-sm-12 pro_head">
            <h2>Book Appoinment</h2>
        </div>

        <div class="col-sm-12">
            <p class="alert alert-info"> <strong>Hey Patient!!!!</strong> <br> &nbsp &nbsp Be serious about the doctor. Once you add it then it never undo. So you must be over sure about the doctor. Here to book an appoint you must pay first. And you must be arrive in time. If any problem occure in our side, we inform you via mobile and email. And you must be get your money back. (THANK YOU)<br><i><b>&nbsp&nbsp&nbsp ----Admin. :)</b></i> </p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Select Doctor.</div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('patient.Add.Serial.submit') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="category" class="col-md-2 control-label">Category</label>

                                    <div class="col-md-10">
                                        <select id="category" class="form-control" autofocus="" name="category">
                                            <option value="" disabled selected hidden>Select Category.</option>
                                            @foreach($Categories as $category)
                                                <option value="{{$category->category}}">{{$category->category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="doctor" class="col-md-2 control-label">Doctor</label>

                                    <div class="col-md-10">
                                        <select id="doctor" class="form-control" name="doctor">
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="date" class="col-md-2 control-label">Date's</label>

                                    <div class="col-md-10">
                                        <select id="date" class="form-control" name="date">
                                        </select>
                                    </div>
                                </div>


                                 <div class="form-group">
                                    <label for="Payment" class="col-md-2 control-label">Payment</label>
                                    <div class="col-md-10">
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio" checked>BIKASH
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio">DBBL
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio">OTHER
                                        </label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2">
                                        <button type="submit" class="btn btn-primary" id="BookNow">
                                            Book Now
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 ">
                    <div id="SelectedDoc" class="well cls-doc-blog clearfix">
                        <br>
                        <br>
                        <br>
                        <h3 class="alert alert-success text-center"> No Doctor Selected</h3>  
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script type="text/javascript">
        $(document).ready(function(){
            $("#BookNow").hide();
            $( "#category" ).change(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $("#BookNow").fadeOut('slow');

                $("#SelectedDoc").html('<div align="center" ><br><br><div class="loader"></div></div>');

                $.ajax({
                    type:'POST',
                    url:'<?php echo url('getDoc'); ?>',
                    data:{ category : $('#category option:selected').val() },
                    success:function(data){
                        $("#doctor").html(data);
                   }
                });

                $("#SelectedDoc").html('<br> <br> <br> <h3 class="alert alert-success text-center"> No Doctor Selected</h3>');
                $("#date").html('');

            });

            $( "#doctor" ).change(function() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $("#BookNow").fadeOut('slow');

                $("#SelectedDoc").html('<div align="center" ><br><br><div class="loader"></div></div>');
                //retrive Dates
                $.ajax({
                    type:'POST',
                    url:'<?php echo url('getdates'); ?>',
                    data:{ id : $('#doctor option:selected').val() },
                    success:function(data){
                        $("#date").html(data);
                    }
                });

                //Retrive Doctr's Info
                $.ajax({
                    type:'POST',
                    url:'<?php echo url('getDocInfo'); ?>',
                    data:{ id : $('#doctor option:selected').val() },
                    success:function(data){
                        $("#SelectedDoc").html(data);
                    }
                });
            });

            $( "#date" ).change(function() {
                $("#BookNow").fadeIn('slow');
            });

        });

    </script>
@endsection 