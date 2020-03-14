<!DOCTYPE html>
<html>
<head>
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
body{
	background-color: lightblue; 
}
button[type=submit] {
  background-color: blue;
  color: white;
  padding: 12px 20px;
  border: 3px;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

</style>
</head>
<body>
<center>
<form action="signup" method="post">
	@csrf
	<input type="text" name="name" placeholder="Enter name"><br><br>
	<input type="text" name="email" placeholder="Enter Email">
	@error('email')
	<div>{{$message}}</div>
	@enderror
	<br><br>
	<input type="text" name="address" placeholder="Enetr Address"><br><br>
	<input type="text" name="password" placeholder="Enetr password">
	@error('password')
	<div>{{$message}}</div>
	@enderror
	<br>
	<br>
	<br>
	<button type="submit">Register</button>
</form>
</center>
</body>
</html>