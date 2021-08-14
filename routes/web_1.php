<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

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

//route::get('hello', function () {
//    return view('hello.index');
//});
route::get('hello',[HelloController::class, 'index']);
//Route::get('hello', 'HelloController@index');
//Route::get('/', function () {
//    return view('welcome');
//});


//route::get('hello/{id?}/{pass?}','HelloController@index');
//route::get('hello',[HelloController::class, '__invoke']);

//route::get('hello/other', [HelloController::class, 'other']);
//route::get('hello/other',[HelloController::class, 'other']);
//Route::get('hello',[HelloController::class, 'index']);
//Route::post('hello',[HelloController::class, 'post']);
//route::get('hello',function(){
//    return view('hello.index');
//});


/*
route::get('hello/{msg?}',function ($msg='no message'){
    $html = <<<EOF
    <html>
    <head>
    <style>
    body {font-size:16pt; color:#999;}
    h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
    </style>
    </head>
    <body>
        <h1>Hello</h1>
        <p>{$msg}</p>
        <p>これは、サンプルで作ったページです。</p>
    </body>
    </html>
    EOF;
        
        return $html;
});
*/


//route::get('hello',function () use($html){
//    return $html;
//});

//route::get('hello',function () {
//    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
//});