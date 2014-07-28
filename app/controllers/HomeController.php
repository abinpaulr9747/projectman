<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function dashboard()
	{

        return View::make('Home.dashboard');

	}


    /*
	|
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@users');
	|
	*/

    public function users()
    {

        $users = User::with('role')->get();

        return View::make('Home.users',array('users'=>$users, 'check'=> '1'));

    }

    public function user_add(){

        return View::make('Home.user_add');

    }

}
