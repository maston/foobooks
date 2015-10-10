<?php
// use \Rych\Random\Random;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', 'BookController@getIndex');
Route::get('/books/show/{title}', 'BookController@getShow');
Route::get('/books/create', 'BookController@getCreate');
Route::post('/books/create', 'BookController@postCreate');



// Route::get('/books/{category}', function($category){
// 	return 'Here are all the books in the category of '.$category;
// });

// Route::get('/new', function() {
// 	$view  = '<form method="POST">';
//     $view .= csrf_field(); # This will be explained more later
//     $view .= 'Title: <input type="text" name="title">';
//     $view .= '<input type="submit">';
//     $view .= '</form>';
//     return $view;
// });

// Route::post('/new', function() {
// 	$input = Input::all();
// 	print_r($input);
// });

Route::get('/practice', function() {

    $random = new Random();
    return $random->getRandomString(8);

});


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');




?>
