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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/front', 'FrontendController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/fixture', 'FixtureController');
Route::resource('/result', 'ResultsController');
Route::resource('/table', 'TablesController');
Route::resource('/clubs', 'ClubsController');
Route::resource('/post', 'PostsController');

Route::group(['middleware'=>['auth']], function (){
    Route::get('/admin', function (){
        return view('backend.admin.index');
    });

    Route::group(['middleware'=>['admin']], function (){
        Route::resource('admin/users', 'AdminUsersController');
    });
    Route::resource('admin/posts', 'AdminPostsController');
    Route::resource('admin/posts', 'AdminPostsController');
    Route::resource('admin/teams', 'AdminTeamsController');
    Route::resource('admin/players', 'AdminPlayersController');
    Route::resource('admin/fixtures', 'AdminFixturesController');
    Route::resource('admin/tables', 'AdminTablesController');
    Route::resource('admin/results', 'AdminResultsController');
    Route::resource('admin/games', 'AdminGamesController');
    Route::resource('admin/comments', 'PostCommentsController');
    Route::resource('admin/comments/replies', 'CommentRepliesController');
    Route::resource('admin/statistic', 'PlayerStatisticController');


});
Route::group(['middleware'=> 'auth'], function (){
    Route::post('comment/reply', 'CommentRepliesController@createReply');
});
