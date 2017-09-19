<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seril Seet</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		.pro_head{
			margin-bottom: 20px;
			padding-left: 5px;
			width: 100%;
			border-bottom-style: solid; 
			text-align: left;
			border-color: #357ed3;
		}
		.pro_head h2{
			font-family: Georgia, Serif;
			/*font-family: ‘Times New Roman’, Times, serif;*/ 
			font-size: 30px;
		}

		.pro-info{
			padding-left: 10px;
			padding-right: 10px;
			text-align: left;
			border-radius: 5px;
			background-color: rgb(242, 242, 242);
			/*max-width: 450px;*/
			-webkit-box-shadow: 0 6px 6px -6px #0E1119;
		    -moz-box-shadow: 0 6px 6px -6px #0E1119;
		    box-shadow: 0 6px 6px -6px #0E1119; 
		}
		.pro-info h1{
			font-size: 20px;
		}
		footer{
			padding: 15px 10px 10px 10px;
			color: white;
			background-color: black;
			font-size: 16px;
			text-align: center;
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="col-sm-12">

			<div class="pro_head">
		        <h2>Doctors Info</h2>
		    </div>

			<div class="well">
				<div align="center">
					
					<img src="{{ asset($Doctor->img) }}" class="img-thumbnail" alt="Profile Pic" width="200" height="200">
					<div class="docInfo">
						<h2> <strong><i>Name: </i></strong>{{$Doctor->name}}</h2>
						<h3><strong><i>Category: </i></strong>{{$Doctor->category}}</h3>
						<h4><strong><i>Date: </i></strong> {{$Date->serial_date}}</h4>
						<h4><strong><i>patients: </i></strong> {{count($Patients)}} total</h4>
					</div>
				</div>
			</div>
		</div>

		<div class=" col-sm-12 pro_head">
	        <h2>Patients Info</h2>
	    </div>
	</div>

	@foreach($Patients as $val)

		<div class="container">
		<div class="col-sm-2"></div>
	        <div class="col-sm-3" align="center"> 
	            <img src="{{ asset($val->patients->img) }}" class="img-thumbnail" alt="Profile Pic" width="200" height="200">
	        </div>

	        <div class="col-sm-6 ">

	          <div class="pro-info">
	            <table class="table info_table">
	              <tbody>
	                <tr>
	                  <td><strong>Name:</strong></td>
	                  <td> <strong><strong>{{$val->patients->fname.' '.$val->patients->lname}}</strong></strong></td>
	                </tr>
	                <tr>
	                  <td>Gender:</td>
	                  <td>{{$val->patients->gender}}</td>
	                </tr>
	                <tr>
	                  <td>Email:</td>
	                  <td>{{$val->patients->email}}</td>
	                </tr>
	                <tr>
	                  <td>Age:</td>
	                  <td>{{$val->patients->age}}</td>
	                </tr>
	                <tr>
	                  <td>Mobile:</td>
	                  <td>{{$val->patients->phone}}</td>
	                </tr>

	                <tr>
	                  <td>Position:</td>
	                  <td>{{$val->position}}</td>
	                </tr>

	                 <tr>
	                  <td>Code:</td>
	                  <td>{{$val->code}}</td>
	                </tr>
	              </tbody>
	            </table>
	          </div>
	        </div>
	    </div>
	</div>

	@endforeach	

	<footer>
		<p>Developed By Nandan Sharker, Dept Od cse University Of Rajshahi.</p>
	</footer>
</body>
</html>