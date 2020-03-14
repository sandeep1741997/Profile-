<?php use App\studentdetail ?>
@extends('layout')
@section('header')
@parent

<style type="text/css">
input[type=text], select, textarea{
  width: 25%;
  height: 40px;
  text-align: center;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the label to display next to the inputs */
/* Style the submit button */
button[type=submit] {
  background-color: blue;
  color: white;
  padding: 12px 20px;
  border: 3px;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

body{
	background-color:lightblue;
}
</style>
<body>
<center>
<form action=" {{ url ('updatestudent') }}" method="POST">
	@csrf
	<input type="text" name="name" value= "{{$detail->name}}" placeholder="Enter name of student"><br><br><br>
	<input type="text" name="rollno" value= "{{$detail->rollno}}" placeholder="Enter roll number"><br><br><br>
	<input type="text" name="email" value= "{{$detail->email}}" placeholder="Enter Email"><br><br><br>
	<input type="text" name="class" value= "{{$detail->class}}" placeholder="Enter class"><br><br><br>
	<input type="text" name="address" value= "{{$detail->address}}" placeholder="Enetr Address"><br><br>
		<input type="hidden" name="id" value= "{{$detail->id}}" placeholder="Enetr Address"><br><br>
	<br>
	<br>
	<button type="submit">Update</button>
</form>
</center>
</body>
@endsection