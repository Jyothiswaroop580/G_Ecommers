<?php
{% load static %}

{% csrf_token %}
<!DOCTYPE html>
<html lang="en">
<head>
	{% csrf_token %}
	<title>Ecommers</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="static/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{% static 'vendor/bootstrap/css/bootstrap.min.css' %}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{% static 'fonts/font-awesome-4.7.0/css/font-awesome.min.css' %}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{% static 'fonts/iconic/css/material-design-iconic-font.min.css' %}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{% static 'vendor/animate/animate.css' %}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{% static 'vendor/css-hamburgers/hamburgers.min.css' %}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{% static 'vendor/animsition/css/animsition.min.css' %}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{% static 'vendor/select2/select2.min.css' %}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{% static 'vendor/daterangepicker/daterangepicker.css' %}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{% static 'css/util.css' %}">
	<link rel="stylesheet" type="text/css" href="{% static 'css/main.css' %}">
<!--===============================================================================================-->
</head>
<body>
	{% csrf_token %}
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					{% csrf_token %}
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					{% csrf_token %}
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						{% csrf_token %}
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						{% csrf_token %}
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						{% csrf_token %}
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						{% csrf_token %}
						<button class="login100-form-btn" formmethod="POST">
							Login
						</button>
					</div>
					<div class="text-center p-t-90">
						{% csrf_token %}
						<a class="txt1" href="#">
							Forgot Password?
						</a>
						<a class="txt1" href="/Signup">
							Signup?
						</a>
					</div>
					<div class="text-center p-t-90">
						{% for message in messages %}
						<h3>{{message}}</h3>
						{% endfor %}
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{% static 'vendor/jquery/jquery-3.2.1.min.js' %}"></script>
<!--===============================================================================================-->
	<script src="{% static 'vendor/animsition/js/animsition.min.js' %}"></script>
<!--===============================================================================================-->
	<script src="{% static 'vendor/bootstrap/js/popper.js' %}"></script>
	<script src="{% static 'vendor/bootstrap/js/bootstrap.min.js' %}"></script>
<!--===============================================================================================-->
	<script src="{% static 'vendor/select2/select2.min.js' %}"></script>
<!--===============================================================================================-->
	<script src="{% static 'vendor/daterangepicker/moment.min.js' %}"></script>
	<script src="{% static 'vendor/daterangepicker/daterangepicker.js' %}"></script>
<!--===============================================================================================-->
	<script src="{% static 'vendor/countdowntime/countdowntime.js' %}"></script>
<!--===============================================================================================-->
	<script src="{% static 'js/main_l.js' %}"></script>

</body>
</html>
?>