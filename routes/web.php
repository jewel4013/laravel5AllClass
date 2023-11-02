<?php

use App\Http\Controllers\authorControl;
use App\Http\Controllers\bookControl;
use App\Http\Controllers\countryControl;
use App\Http\Controllers\fileControl;
use App\Http\Controllers\mailControl;
use App\Http\Controllers\memberControl;
use App\Http\Controllers\morphManyCommentControl;
use App\Http\Controllers\morphManyStatusControl;
use App\Http\Controllers\morphManyVideoControl;
use App\Http\Controllers\personControl;
use App\Http\Controllers\signUpControl;
use App\Http\Controllers\tagControl;
use App\Http\Controllers\userControl;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});


Route::get('/authors', [authorControl::class, 'index']);
Route::get('/authors/create', [authorControl::class, 'create']);
Route::post('/authors/create', [authorControl::class, 'store']);
Route::get('/authors/{id}', [authorControl::class, 'show']);

Route::get('/books', [bookControl::class, 'index']);
Route::get('/books/create', [bookControl::class, 'create']);
Route::post('/books/create', [bookControl::class, 'store']);
Route::get('/books/{id}', [bookControl::class, 'show']);
Route::get('/books/{id}/edit', [bookControl::class, 'edit']);




Route::get('/country', [countryControl::class, 'showCountryData']);
Route::get('/country/create', [countryControl::class, 'create']);
Route::get('/country/{id}', [countryControl::class, 'show']);
Route::post('/country/create', [countryControl::class, 'store']);
Route::get('/country/{id}/edit', [countryControl::class, 'edit']);
Route::patch('/country/{id}/edit', [countryControl::class, 'update']);
Route::get('/country/{id}/delete', function(){return back();});
Route::delete('/country/{id}/delete', [countryControl::class, 'destroy']);

Route::get('/files', [fileControl::class, 'index']);
Route::post('/files', [fileControl::class, 'store']);



Route::get('/mailing', [mailControl::class, 'index']);
Route::post('/mailing', [mailControl::class, 'sent']);





Route::get('/morph', function(){
    return view('morph.index');
});

Route::get('/morph/one2one', function(){
    return view('morph.onetoone.oneindex');
});
Route::get('/morph/one2one/member', [memberControl::class, 'index']);
Route::post('/morph/one2one/member', [memberControl::class, 'store']);
Route::get('/morph/one2one/post', [memberControl::class, 'index2']);
Route::post('/morph/one2one/post', [memberControl::class, 'store2']);

Route::get('/morph/one2many', function(){
    return view('morph.onetomany.index');
});
Route::get('/morph/one2many/status', [morphManyStatusControl::class, 'index']);
Route::get('/morph/one2many/status/create', [morphManyStatusControl::class, 'create']);
Route::post('/morph/one2many/status/create', [morphManyStatusControl::class, 'store']);
Route::get('/morph/one2many/status/{id}', [morphManyStatusControl::class, 'show']);

Route::get('/morph/one2many/video', [morphManyVideoControl::class, 'index']);
Route::get('/morph/one2many/video/create', [morphManyVideoControl::class, 'create']);
Route::post('/morph/one2many/video/create', [morphManyVideoControl::class, 'store']);
Route::get('/morph/one2many/video/{id}', [morphManyVideoControl::class, 'show']);


Route::get('/morph/one2many/comment', [morphManyCommentControl::class, 'index']);
Route::post('/morph/one2many/status/{id}/comment', [morphManyCommentControl::class, 'status_comment']);
Route::post('/morph/one2many/video/{id}/comment', [morphManyCommentControl::class, 'video_comment']);

Route::get('/morph/many2many', function(){
    return view('morph.manytomany.index');
});
Route::resource('tags', tagControl::class);






Route::get('/person', [personControl::class, 'index']);
Route::get('/person/create', [personControl::class, 'create']);
Route::post('/person/create', [personControl::class, 'store']);
Route::get('/person/{id}', [personControl::class, 'show']);
Route::delete('/person/{id}/delete', [personControl::class, 'destroy']);



Route::get('/signup', [signUpControl::class, 'index']);
Route::get('/signup/form', [signUpControl::class, 'create']);
Route::post('/signup/form', [signUpControl::class, 'store']);


Route::get('/users', [userControl::class, 'index']);
Route::get('/users/create', [userControl::class, 'create']);
Route::get('/users/{id}', [userControl::class, 'show']);
Route::post('/users/create', [userControl::class, 'store']);

