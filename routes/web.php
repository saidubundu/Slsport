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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
//Route::get('/', function () {
//    return view('welcome');
//});


Route::resource('/', 'FrontendController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/fixture', 'FixtureController');
Route::resource('/result', 'ResultsController');
Route::resource('/table', 'TablesController');
Route::resource('/clubs', 'ClubsController');
Route::resource('club/player', 'ClubPlayersController');
Route::resource('/post', 'PostsController');


Route::group(['middleware'=>['auth']], function (){

    Route::get('/admin', function (){
        if (!Gate::allows('isAdmin') && !Gate::allows('isModerator') && !Gate::allows('isEditor')){
            return 'Sorry u donot have permission';
        }
        return view('backend.admin.index');
    });

    Route::resource('admin/users', 'AdminUsersController');
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

Route::get('/role',function (){
//        $role = Role::create(['name'=>'Admin']);
        $permission = Permission::create(['name'=>'edit users']);
});
