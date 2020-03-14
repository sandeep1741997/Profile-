<!DOCTYPE html>
<html>
<head>
	<title>@yield('titile')</title>
	<style type="text/css">
		.header{
			text-align: center;
			background: #333;
			width: 100%;
           padding: 10px 0;
           color: #fff;
           top: 0;

		}
		.footer{
			text-align: center;
			background: #333;
			padding: 50px;
			width: 100%;
			bottom: 0;
		}
		.content{
			left: 500px;
			text-align: center;
			
			padding: 20px;
			height: 500px;
			width: 70%;
		}
	</style>
</head>
<body>
	@section('header')
	<div class="header">
		<h1>Students Details </h1>
	</div>
	@show
    
    <div class="content">
    @yield('content')
  
    </div>


		@section('footer')
	<div class="footer">
		<h2>Student details</h2>
	</div>
	@show

</body>
</html>