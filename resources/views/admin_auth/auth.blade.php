<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Authentication</title>
	<link rel="stylesheet" href="{{asset('food_asset/admin_auth/css/admin_auth_style.css')}}">
</head>
<body>
	@if(Session::has('message'))
		<div>{{ Session::get('message') }}</div>
	@endif
	<div class="login-page">
	  <div class="form">
	    <!-- <form class="register-form">
	      <input type="text" placeholder="name"/>
	      <input type="password" placeholder="password"/>
	      <input type="text" placeholder="email address"/>
	      <button>create</button>
	      <p class="message">Already registered? <a href="#">Sign In</a></p>
	    </form> -->

	    <form class="login-form" method="POST" name="frm_login" action="{{url('admin/login')}}">
	   	  <input type="hidden" name="_token" value="{{csrf_token()}}">
	    	{!! $errors->first('usr', '<div class="notice">*:message</div>') !!}
	      <input type="text" name="usr" value="{{old('usr')}}" placeholder="username" autofocus />
	    	{!! $errors->first('pwd', '<div class="notice">*:message</div>') !!}
	      <input type="password" name="pwd" value="" placeholder="password"/>
	      <button>login</button>
	      <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
	    </form>
	  </div>
	</div>

	<!-- Start Script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="{{asset('food_asset/admin_auth/js/admin_auth_script.js')}}"></script>
	<!-- End Script -->
</body>
</html>