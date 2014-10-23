<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	$generator = new BadCow\LoremIpsum\Generator();
	$paragraphs = $generator -> getParagraphs(5);
	echo implode('<p>', $paragraphs);

	return View::make('index');
});

Route::get('/lorem-ipsum', function(){
	
	$view = '<form method = "POST" action = "/lorem-ipsum">';
	$view .= 'How Many Paragraphs?: <input type = "text" name = "LI Generator">';
	$view .= '<input type = "Submit">';
	$view .= '</form>';
	
	$input = Input::all();	
	

});

/*
Route::Post('/lorem-ipsum', function(){
	$input = Input::all();
	$generator = new BadCow\LoremIpsum\Generator();
	$paragraphs = $generator -> getParagraphs(5);
	echo implode('<p>', $paragraphs);

});
*/

Route::get('/users', function(){

	$view = '<form method = "Post" action = "/users">';
	$view .= 'Number of Profiles?: <input type = "text" name = "Profiles">';
	$view .= '<input type = "Submit">';
	$view .= '</form>';
	return $view;

});




