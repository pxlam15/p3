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
	$result = implode('<p>', $paragraphs);
	echo View::make('lorem-ipsum');
	return $result;
});

Route::get('/users', function(){
	return View::make('users');
});

Route::Post('/users', function(){
	require_once '..\..\..\vendor\fzaninotto\faker\src\autoload.php';

	$faker = Faker\Factory::create();

	$input = Input::get('numUsers');

	echo View::make('users');
	//Conditionals for birthdays and etc here. A little belabored but it gets the job done
	if(isset($_POST['birthday']) && isset($_POST['address']) && isset($_POST['profile'])){
		//For Each for Names
		for($i = 0; $i < $input; $i++){
			$name = $faker->name; 
			$birthday = $faker->dateTimeThisCentury->format('Y-m-d'); 
			$address = $faker->address;
			$profile = $faker->text;
			$result = array($name, $birthday, $address, $profile);
			$format = implode('<br>', $result);
			echo "$format <p>"; 
		};
	} elseif(isset($_POST['birthday']) && isset($_POST['address'])){
		for($i = 0; $i < $input; $i++){
			$name = $faker->name; 
			$birthday = $faker->dateTimeThisCentury->format('Y-m-d'); 
			$address = $faker->address;
			$result = array($name, $birthday, $address);
			$format = implode('<br>', $result);
			echo "$format <p>"; 
		};
	} elseif(isset($_POST['address']) && isset($_POST['profile'])){
		for($i = 0; $i < $input; $i++){
			$name = $faker->name; 
			$address = $faker->address;
			$profile = $faker->text;
			$result = array($name, $address, $profile);
			$format = implode('<br>', $result);
			echo "$format <p>"; 
		};
	} elseif(isset($_POST['birthday']) && isset($_POST['profile'])){
		for($i = 0; $i < $input; $i++){
			$name = $faker->name; 
			$birthday = $faker->dateTimeThisCentury->format('Y-m-d'); 
			$profile = $faker->text;
			$result = array($name, $birthday, $profile);
			$format = implode('<br>', $result);
			echo "$format <p>"; 
		};
	} elseif(isset($_POST['birthday'])){
		for($i = 0; $i < $input; $i++){
			$name = $faker->name; 
			$birthday = $faker->dateTimeThisCentury->format('Y-m-d'); 
			$result = array($name, $birthday);
			$format = implode('<br>', $result);
			echo "$format <p>"; 
		};
	} elseif(isset($_POST['address'])){
		for($i = 0; $i < $input; $i++){
			$name = $faker->name; 
			$address = $faker->address;
			$result = array($name, $address);
			$format = implode('<br>', $result);
			echo "$format <p>"; 
		};
	} elseif(isset($_POST['profile'])){
		for($i = 0; $i < $input; $i++){
			$name = $faker->name; 
			$profile = $faker->text;
			$result = array($name, $profile);
			$format = implode('<br>', $result);
			echo "$format <p>"; 
		};
	} else{
		for($i = 0; $i < $input; $i++){
			$name = $faker->name; 
			echo "$name <p>"; 
		};
	}
	
	
	
});
