<?php

class UserController extends BaseController {

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

    public function login(){

        if (Request::isMethod('post')){

            $user = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
            );

            if(Auth::attempt($user, true)){

                return Redirect::route('dashboard')
                    ->with('flash_success', 'You are successfully logged in.');

            } else {

                // authentication failure! lets go back to the login page
                return Redirect::route('login')
                    ->with('flash_error', 'Your username/password combination was incorrect.')
                    ->withInput();

            }

        }

        return View::make('User.login');

    }


    public function forgot_password(){

        return View::make('User.login');

    }

}
