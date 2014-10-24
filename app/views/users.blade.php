@extends('_master')

@section('title')
	Dev Best Friend
@stop

@section('content')
	<link rel='stylesheet' href='/css/style 1.0.css' type='text/css'>
	<form method = "POST" action = "/users">
		How Many User Profiles?: <select class = "numUsers" name = "numUsers">
		<option value="1" >1</option>
		<option value="2" >2</option>
		<option value="3" >3</option>
		<option value="4" >4</option>
		<option value="5" selected = "selected" >5</option>
		<option value="6" >6</option>
		<option value="7" >7</option>
		<option value="8" >8</option>
		<option value="9" >9</option>
		<input type = "Submit"> <br>

		<label for='birthday'> Birthday </label>
		<input type='checkbox' name='birthday' val = '1'/> <br>

		<label for='address'> Address </label>
		<input type='checkbox' name='address' val = '1'/> <br>

		<label for='profile'> Profile </label>
		<input type='checkbox' name='profile' val = '1'/> <br>		
@stop