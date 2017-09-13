@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
   Update Doctor
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/view_patient.css') }}" rel="stylesheet">
    {{-- <script src="{{ asset('js/view_patient.js') }}"></script> --}}
@endsection


@section('ContentOfBody')
	{{-- Main Profile View --}}
    <div class="container">
        <div class=" col-sm-12 pro_head clearfix">
        <h2 class="pull-left"> <strong>Rakuls's</strong> Profile</h2>
      <h2 class="pull-right">
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
      </h2> 
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-3" align="center"> 
            <img src="{{ asset("image/RakulPreet.jpg") }}" class="img-thumbnail" alt="Profile Pic" width="200" height="200">
            <p class="cls_phn_num"> <span class="glyphicon glyphicon-phone-alt" style="color: #357ed3;"></span>01915770274</p>
        </div>
        <div class="col-sm-6 pro-info">
        <table class="table info_table">
              <tbody>
                <tr>
                  <td><strong>Name:</strong></td>
                  <td> <strong>Rakul Preet Sing</strong></td>
                </tr>
                <tr>
                  <td>Gender:</td>
                  <td>Female</td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td>rakul14@gmail.com</td>
                </tr>
                <tr>
                  <td>Age:</td>
                  <td>22</td>
                </tr>
                <tr>
                  <td>Mobile:</td>
                  <td>01915770274</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>

    {{-- This Section For COntest Log --}}
    <div class="container"> 
        <div class="col-sm-12 pro_head">
        <h2>Your Activity</h2>   
        </div>
      <div class="col-sm-12 contest_table">
        <table class="table contest_info_table">
          <thead>
          <tr>
            <td>Date</td>
            <td>Doctor</td>
            <td>Position</td>
            <td>Code</td>
          </tr>
          </thead>

          <tbody>
            <tr>
                <td>18/09/2017</td>
                <td><a href="#">SK bauliya</a></td>
                <td>1</td>
                <td>112312312321</td>
            </tr>

            <tr>
                <td>18/09/2017</td>
                <td><a href="#">SK bauliya</a></td>
                <td>1</td>
                <td>112312312321</td>
            </tr>
            <tr>
                <td>18/09/2017</td>
                <td><a href="#">SK bauliya</a></td>
                <td>1</td>
                <td>112312312321</td>
            </tr>
            <tr>
                <td>18/09/2017</td>
                <td><a href="#">SK bauliya</a></td>
                <td>1</td>
                <td>112312312321</td>
            </tr>
            <tr>
                <td>18/09/2017</td>
                <td><a href="#">SK bauliya</a></td>
                <td>1</td>
                <td>112312312321</td>
            </tr>

            
          </tbody>

        </table>

        </br>
        </br>
      </div>
    </div>



    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
         });
    </script>
@endsection 