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

Route::get('/error',array('as'=>'error', function(){
    return View::make('error');
}));

Route::match(array('GET', 'POST'),'login',array('as'=>'login', 'uses'=>'UserController@login'))->before('guest');

Route::filter('guest', function()
{
    if (Auth::check())
        return Redirect::route('home')
            ->with('flash_notice', 'You are already logged in!');

});

Route::get('/forgotpassword', 'UserController@forgot_password');

Route::get('logout', array('as' => 'logout', function () {
    Auth::logout();

    return Redirect::route('login')
        ->with('flash_notice', 'You are successfully logged out.');
}))->before('auth');

Route::filter('auth', function()
{
    if (Auth::guest())
        return Redirect::route('login')
            ->with('flash_error', 'You must be logged in to view this page!');
});

Route::get('/', array('as' => 'dashboard','uses'=>'HomeController@dashboard' ))->before('auth');

Route::get('/users', array('as' => 'users','uses'=>'HomeController@users' ))->before('auth');

Route::match(array('GET','POST'),'/users/add', array('as' => 'user_add','uses'=>'HomeController@user_add' ))->before('auth');

Route::match(array('GET','POST'),'/users/edit/{id}', array('as' => 'user_edit','uses'=>'HomeController@user_edit' ))->where('id','[0-9]+')->before('auth');



