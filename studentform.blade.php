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
<center>
<form action="studentsubmit" method="POST" enctype="multipart/form-data">
	@csrf
  <h1>{{Session::get('register')}}</h1>
	<h1>{{Session::get('data')}}</h1><br><br>
	<h2>Fill the student details</h2>
	<input type="text" name="name" placeholder="Enter name of student"><br><br>
	<input type="text" name="rollno" placeholder="Enter roll number"><br><br>
	<input type="text" name="email" placeholder="Enter Email"><br><br>
	<input type="text" name="class" placeholder="Enter class"><br><br>
	<input type="text" name="address" placeholder="Enetr Address"><br><br>
  <input type="file" name="image">
	<br>
	<br>
  <br>
	<button type="submit">Submit</button>
</form>
</center>