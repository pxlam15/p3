@extends('_master')

@section('title')
	Dev Best Friend
@stop

@section('content')
	<form method = "POST" action = "/lorem-ipsum">
		How Many Paragraphs?: <select class = "numPara" name = "numPara">
		<option value="1" >1</option>
		<option value="2" >2</option>
		<option value="3" >3</option>
		<option value="4" >4</option>
		<option value="5" selected = "selected" >5</option>
		<option value="6" >6</option>
		<option value="7" >7</option>
		<option value="8" >8</option>
		<option value="9" >9</option>
		<input type = "Submit">
@stop