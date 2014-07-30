<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
    /*
         *
         * Validation rules.
         *
         * */

    public $rules = array(
        'firstname' => 'required|alpha|min:3',
        'lastname'  => 'required|alpha|min:3',
        'role_id'  => 'required',
        'password'  => 'confirmed',
        'status'  => 'required'
        // .. more rules here ..
    );

    public $attributes = array(
        'firstname' => 'First Name',
        'lastname'  => 'Last Name',
        'username'  => 'Username',
        'role_id'  => 'Role',
        'password'  => 'Password',
        'status'  => 'Status',
    );

    protected $guarded = array('id','created_at','updated_at');

    /*
     *
     * Has one relation for model role.
     *
     * */



    public function role()
    {
        return $this->belongsTo('Role');
    }

    // Set mutator to hash password before saving.

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] =  Hash::make($value);
    }


}
