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
            <h2>Book Appoinment</h2>
        </div>

        <div class="col-sm-12">
            <p class="alert alert-info"> <strong>Hey Patient!!!!</strong> <br> &nbsp &nbsp Be serious about the doctor. Once you add it then it never undo. So you must be over sure about the doctor. Here to book an appoint you must pay first. And you must be arrive in time. If any problem occure in our side, we inform you via mobile and email. And you must be get your money back. (THANK YOU)<br><i><b>&nbsp&nbsp&nbsp ----Admin. :)</b></i> </p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Select Doctor.</div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="category" class="col-md-2 control-label">Category</label>

                                    <div class="col-md-10">
                                        <select id="category" class="form-control" autofocus="">
                                            <option value="A">A</option>
                                            <option value="A">B</option>
                                            <option value="A">C</option>
                                            <option value="A">D</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="category" class="col-md-2 control-label">Doctor</label>

                                    <div class="col-md-10">
                                        <select id="category" class="form-control" autofocus="">
                                            <option value="A">A</option>
                                            <option value="A">B</option>
                                            <option value="A">C</option>
                                            <option value="A">D</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="category" class="col-md-2 control-label">Date's</label>

                                    <div class="col-md-10">
                                        <select id="category" class="form-control" autofocus="">
                                            <option value="A">A</option>
                                            <option value="A">B</option>
                                            <option value="A">C</option>
                                            <option value="A">D</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2">
                                        <button type="submit" class="btn btn-primary">
                                            Book Now
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 well cls-doc-blog">
                    <div id="SelectedDoc clearfix">
                        <div class=" col-sm-12 pro_head2">
                            <h4>Doctor's Profile(Selected)</h4>
                        </div>
                        <div class="col-sm-12" align="center"> 
                            <img src="{{ asset('image/RakulPreet.jpg') }}" class="img-thumbnail" alt="Profile Pic" width="200" height="200">
                        </div>

                        <div class="col-sm-12">
                            <div class="pro-info">
                                <table class="table info_table">
                                    <tbody>
                                        <tr>
                                          <td><strong>Name:</strong></td>
                                          <td> <strong><a href="#">Rakul Preet</a></strong></td>
                                        </tr>
                                        <tr>
                                          <td>Category:</td>
                                          <td>Medicine</td>
                                        </tr>
                                        <tr>
                                          <td>Doctor's Office:</td>
                                          <td>202A</td>
                                        </tr>
                                        <tr>
                                          <td>Time :</td>
                                          <td>At 12.12AM</td>
                                        </tr>
                                        <tr>
                                          <td>Total:</td>
                                          <td>500tk</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- <br>
                        <br>
                        <br>
                        <h3 class="alert alert-success text-center"> No Doctor Selected</h3>   --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection 