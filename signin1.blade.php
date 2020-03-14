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
button{
  background-color: blue;
  color: white;
  padding: 12px 20px;
  border: 3px;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}
.h2{
	color: red;
}
::placeholder {
  color: blue;
  font-size: 1.5em;
}
body{
	background-color:lightblue;
}
</style>
<center>
    <h2>If You have not account please Register first!</h2>
	<button onclick="window.location.href = 'http://127.0.0.1:8000/create';">Register</button><br><br><br>
</center>	
<center>
<form action="submit" method="post">
	
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="text" name="email" placeholder="Enter Email"><br><br>
	
	<input type="text" name="password" placeholder="Enetr password"><br><br>
	<br>
	<br>
	<button type="submit">Login</button>
</form>
</center>