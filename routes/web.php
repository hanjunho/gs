<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
     $items = [
        'Apple',
        'Banana',
        'podo'
    ];

    return view('index',compact('items'));
});
*/
/* DB::listen(function ($event) {
    var_dump($event->sql);
    // var_dump($event->bindings);
    // var_dump($event->time);
});
*/

/*
Route::get('/', function() {
    $lists = App\Guruchain::orderBy( 'createdAt' )->paginate(30);

    return view('welcome', compact('lists'));
});

Route::get('/sort/{name}', function($name) {
    $lists = App\Guruchain::where('creatorNm',$name)->orderBy( 'createdAt' )->paginate(30);
    return view('welcome', compact('lists')); 
});

Route::get('/sortb/{name}', function($name) {
    $lists = App\Guruchain::where('cafeBoardName',$name)->orderBy( 'createdAt' )->paginate(30);
    return view('welcome', compact('lists')); 
});

Route::get('/sortc/', function() {
    $lists = App\Guruchain::where('cafeBoardName','원리와 방법1' )->orWhere('cafeBoardName','글읽고 질문')->orWhere('cafeBoardName','정회원 이상 공지')->orderBy( 'createdAt' )->paginate(30);
    return view('welcome', compact('lists')); 
});

*/

Route::get('/','IndexController@index');
Route::get('/sort/{name}','IndexController@sort');
Route::get('/sortb/{name}','IndexController@sortb');
Route::get('/sortc/','IndexController@sortc');


Route::resource('posts', 'PostsController');
Route::get('posts', [
    'as'   => 'posts.index',
    'uses' => 'PostsController@index'
]);

