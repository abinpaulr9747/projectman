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

        $users = User::where('id','!=',Auth::id())->with('role')->paginate(5);

        if( Request::ajax() )
        {

            $html = View::make('Home.user_list',array('users'=>$users))->render();

            return Response::json(array('html' => $html));

        }

        return View::make('Home.users',array('users'=>$users));

    }

    public function user_add()
    {

        // Save if post request.

        if( Request::isMethod('post') )
        {
            $request_data = Input::all();

            $user = new User;

            $validator = Validator::make($request_data, $user->rules, array(), $user->attributes );

            if( $validator->passes() )
            {

                $user->firstname = Input::get('firstname');
                $user->middlename = Input::get('middlename');
                $user->lastname = Input::get('lastname');
                $user->password = Input::get('password');
                $user->username = Input::get('username');
                $user->role_id = Input::get('role_id');
                $user->status = Input::get('status');

                $user->save();

                return Redirect::route('users')
                    ->with('flash_success','User has been saved successfully');

            }
            else
            {
                return Redirect::back()->withErrors($validator)->withInput();

            }

        }

        // Get roles list

        $roles = Role::orderBy('id')->lists('role','id');

        $status = array('1'=>'Active','2'=>'Inactive');

        return View::make('Home.user_add', compact('roles','status'));

    }


    public function user_edit( $user_id = null )
    {

        if( $user_id !== null )
        {

            $user = User::findOrFail($user_id);

            // Get roles list

            $roles = Role::orderBy('id')->lists('role','id');

            $status = array('1'=>'Active','2'=>'Inactive');

            return View::make('Home.user_edit', compact('roles','status','user'));

        }

    }

}
