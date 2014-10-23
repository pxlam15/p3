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
	return View::make('index');
});

Route::get('/lorem-ipsum', function(){
	return View::make('lorem-ipsum');
});

Route::Post('/lorem-ipsum', function(){
	$input = Input::get('numPara');
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator -> getParagraphs($input);
	echo implode('<p>', $paragraphs);
	return View::make('lorem-ipsum');
});

Route::get('/users', function(){
	return View::make('users');
});

Route::Post('/users', function(){
	require_once '..\vendor/fzaninotto\faker\src\autoload.php';

	$faker = Faker\Factory::create();

	$input = Input::get('numUsers');
	//Conditionals for birthdays and etc here. A little belabored but it gets the job done
	if(isset($_POST['birthday']) && isset($_POST['address']) && isset($_POST['profile'])){
		//For Each for Names
		for($i = 0; $i < $input; $i++){
			echo $faker->name; 
			echo $faker->dateTimeThisCentury->format('Y-m-d'); 
			echo $faker->address;
			echo $faker->text;
		};
	} elseif(isset($_POST['birthday']) && isset($_POST['address'])){
		for($i = 0; $i < $input; $i++){
			echo $faker->name; 
			echo $faker->dateTimeThisCentury->format('Y-m-d'); 
			echo $faker->address;
		};
	} elseif(isset($_POST['address']) && isset($_POST['profile'])){
		for($i = 0; $i < $input; $i++){
			echo $faker->name; 
			echo $faker->address;
			echo $faker->text;
		};
	} elseif(isset($_POST['birthday']) && isset($_POST['profile'])){
		for($i = 0; $i < $input; $i++){
			echo $faker->name; 
			echo $faker->dateTimeThisCentury->format('Y-m-d'); 
			echo $faker->text;
		};
	} elseif(isset($_POST['birthday'])){
		for($i = 0; $i < $input; $i++){
			echo $faker->name; 
			echo $faker->dateTimeThisCentury->format('Y-m-d'); 
		};
	} elseif(isset($_POST['address'])){
		for($i = 0; $i < $input; $i++){
			echo $faker->name; 
			echo $faker->address;
		};
	} elseif(isset($_POST['profile'])){
		for($i = 0; $i < $input; $i++){
			echo $faker->name; 
			echo $faker->text;
		};
	} else{
		for($i = 0; $i < $input; $i++){
			echo $faker->name; 
		};
	}

	return View::make('users');
	
});
