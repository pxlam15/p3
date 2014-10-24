@extends('_master')

@section('title')
	Dev Best Friend
@stop


@section('content')
	<link rel='stylesheet' href='/css/style 1.0.css' type='text/css'>

	<h2>LoremIpsum Generator</h2>
	<p>Lorem Ipsum is essentially placeholder text to highlight graphic 
	elements of a document.  It creates filler text so viewers only 
	focus on graphical elements instead of content.  This is 
	particularly useful when previewing font, typography, and general 
	layout. </p>
	<li><a href = 'lorem-ipsum'> Lorem Ipsum Generator </a></li>

	<h2>Random Profile Generator</h2>
	<p>Create random user data.  Will generate random name, birthday, address, 
		profile information (nonsensical filler text). </p>
	<li><a href = 'users'> Generate Profiles </a></li>
@stop