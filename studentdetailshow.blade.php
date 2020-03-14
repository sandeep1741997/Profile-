@extends('layout')
@section('header')
@parent
<?php use App\studentdetail ?>


	<style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
.w3-btn {width:150px;}
     table, th, td {
     	 text-align: center;
     border: 2px solid black;
     border-collapse: collapse;
     height:70px;
}
body{
	background-color: lightblue; 
}
button{
  background-color: blue;
  color: white;
  padding: 12px 20px;
  border: 3px;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
</style>
<center>

</center>
	<center>
	<form action="studentdeleted/{id}" method="POST">
    @csrf
	<h1>{{Session::get('detail')}}</h1>
		<h1>Students Details </h1><br>
		<h1>{{Session::get('data')}}</h1><br>
		<table style="width:50%" style="padding: 15px">
	
		<tr>
		<th >Name </th>
		<th > RollNo</th>
		<th>Email </th>
		<th>Class</th>
		<th >Address</th>
		<th >Action</th>
    <th>Profile</th>
		<tr>  
		</tr>
		
		<?php

		  $temp= new studentdetail;

           foreach ($temp->All() as $key => $fet) {
           	?>
           
           <tr>
          
            <td>{{$fet->name}}</td>
            <td >{{$fet->rollno}}</td> 
            <td>{{$fet->email}}</td>
            <td >{{$fet->class}}</td>
            <td >{{$fet->address}}</td> 
            <!--<td><a href='studentdeleted/{{ $fet->id }}' value="{{$fet->id}}">Delete</a></td>-->
          
            
            <!--<td><button  onclick="window.location.href = 'http://127.0.0.1:8000/studentdeleted';" >Delete</button>
            <button onclick="window.location.href = 'http://127.0.0.1:8000/studentupdate';"value="$fet->id">Update</button></td>-->
            <td><a href='studentupdate/{{ $fet->id }}'>Update</a> <a href='/studentdeleted/{{ $fet->id }}'>Delete</a></td>
         <td><img src="{{URL::asset($fet->image)}}"style="width:100px; height:100px;"></td>
        </tr>

        <?php 
            
        }
		?>
		</table>
		   </form>
	</center>
	@endsection
@section('footer')

