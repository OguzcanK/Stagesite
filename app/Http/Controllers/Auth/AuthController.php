<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use App\Contact;
use App\School;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers, ThrottlesLogins;

	/**
	 * Where to redirect users after login / registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';

	/**
	 * Create a new authentication controller instance.
	 *
	 * @return void
	 */
	public
	function __construct ()
	{
		$this->middleware ($this->guestMiddleware (), ['except' => 'logout']);
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected
	function validator (array $data)
	{
		return Validator::make ($data, [
			'name'        => 'required|max:255',
			'Surename'    => 'required|max:255',
			'Phonenumber' => 'required|max:255',
			'email'       => 'required|email|max:255|unique:users',
			'password'    => 'required|min:6|confirmed',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array $data
	 * @return User
	 */
	protected
	function create (array $data)
	{

		if (isset($data['insertion']) && !empty($data['insertion']))
		{
			if (isset($data['comapnyname'], $data['comapanynumber']) && !empty($data['comapnyname']) && !empty($data['comapanynumber']) && !isset($data['schoolname']) && empty($data['schoolname']))
			{
				if ($data['role_id'] == 5)
				{
					$Company = Company::create ([
													'name'        => $data['comapnyname'],
													'phonenumber' => $data['comapanynumber'],
												]);
					$contact = Contact::create ([
													'firstname'   => $data['name'],
													'insertion'   => $data['insertion'],
													'lastname'    => $data['Surename'],
													'email'       => $data['email'],
													'phonenumber' => $data['Phonenumber'],
													'conmpany_id' => $Company->id,
												]);
				}
			}
			elseif (!isset($data['comapnyname'], $data['comapanynumber']) && empty($data['comapnyname']) && empty($data['comapanynumber']) && isset($data['company']) && !empty($data['company']) && isset($data['school']) && !empty($data['school']) && !isset($data['schoolname']) && empty($data['schoolname']))
			{
				if ($data['role_id'] == 5)
				{
					dd ($data['company']);
					$contact = Contact::create ([
													'firstname'   => $data['name'],
													'insertion'   => $data['insertion'],
													'lastname'    => $data['Surename'],
													'email'       => $data['email'],
													'phonenumber' => $data['Phonenumber'],
													'conmpany_id' => $data['company'],
												]);
				}
				if ($data['role_id'] == 3 || $data['role_id'] == 4)
				{
					$contact = Contact::create ([
													'firstname'   => $data['name'],
													'insertion'   => $data['insertion'],
													'lastname'    => $data['Surename'],
													'email'       => $data['email'],
													'phonenumber' => $data['Phonenumber'],
													'school_id'   => $data['school'],
												]);
				}
			}
			elseif (!isset($data['comapnyname'], $data['comapanynumber']) && empty($data['comapnyname']) && empty($data['comapanynumber']) && isset($data['schoolname']) && !empty($data['schoolname']))
			{
				$school = School::create ([
												'name'        => $data['schoolname'],
											]);

				$contact = Contact::create ([
												'firstname'   => $data['name'],
												'insertion'   => $data['insertion'],
												'lastname'    => $data['Surename'],
												'email'       => $data['email'],
												'phonenumber' => $data['Phonenumber'],
												'conmpany_id' => $school->id,
											]);
			}
			else
			{
				$contact = Contact::create ([
												'firstname'   => $data['name'],
												'insertion'   => $data['insertion'],
												'lastname'    => $data['Surename'],
												'email'       => $data['email'],
												'phonenumber' => $data['Phonenumber'],
											]);
			}
		}
		else
		{
			if (isset($data['comapnyname'], $data['comapanynumber']) && !empty($data['comapnyname']) && !isset($data['company']) && empty($data['company']) && !empty($data['comapanynumber']) && !isset($data['school']) && empty($data['school']) && !isset($data['schoolname']) && empty($data['schoolname']))
			{
				if ($data['role_id'] == 5)
				{
					$Company = Company::create ([
													'name'        => $data['comapnyname'],
													'phonenumber' => $data['comapanynumber'],
												]);
					$contact = Contact::create ([
													'firstname'   => $data['name'],
													'lastname'    => $data['Surename'],
													'email'       => $data['email'],
													'phonenumber' => $data['Phonenumber'],
													'conmpany_id' => $Company->id,
												]);
				}
			}
			elseif (!isset($data['comapnyname'], $data['comapanynumber']) && empty($data['comapnyname']) && empty($data['comapanynumber']) && isset($data['company']) && !empty($data['company']) && !isset($data['school']) && empty($data['school']) && !isset($data['schoolname']) && empty($data['schoolname']))
			{
				if ($data['role_id'] == 5)
				{
					dd ($data['company']);
					$contact = Contact::create ([
													'firstname'   => $data['name'],
													'lastname'    => $data['Surename'],
													'email'       => $data['email'],
													'phonenumber' => $data['Phonenumber'],
													'conmpany_id' => $data['company'],
												]);
				}
			}
			elseif (!isset($data['comapnyname'], $data['comapanynumber']) && empty($data['comapnyname']) && empty($data['comapanynumber']) && !isset($data['company']) && empty($data['company']) && isset($data['school']) && !empty($data['school']) && !isset($data['schoolname']) && empty($data['schoolname']))
			{
				if ($data['role_id'] == 3 || $data['role_id'] == 4)
				{
					$contact = Contact::create ([
													'firstname'   => $data['name'],
													'lastname'    => $data['Surename'],
													'email'       => $data['email'],
													'phonenumber' => $data['Phonenumber'],
													'school_id'   => $data['school'],
												]);
				}
			}
			elseif (!isset($data['comapnyname'], $data['comapanynumber']) && empty($data['comapnyname']) && empty($data['comapanynumber']) && !isset($data['company']) && empty($data['company']) && !isset($data['school']) && empty($data['school']) && isset($data['schoolname']) && !empty($data['schoolname']))
			{
				$school = School::create ([
											  'name'        => $data['schoolname'],
										  ]);

				$contact = Contact::create ([
												'firstname'   => $data['name'],
												'lastname'    => $data['Surename'],
												'email'       => $data['email'],
												'phonenumber' => $data['Phonenumber'],
												'conmpany_id' => $school->id,
											]);
			}
			else
			{
				$contact = Contact::create ([
												'firstname'   => $data['name'],
												'insertion'   => $data['insertion'],
												'lastname'    => $data['Surename'],
												'email'       => $data['email'],
												'phonenumber' => $data['Phonenumber'],
											]);
			}
		}

		return User::create ([
								 'email'      => $data['email'],
								 'validation' => 0,
								 'password'   => bcrypt ($data['password']),
								 'role_id'    => $data['role_id'],
								 'contact_id' => $contact->id,
							 ]);
	}
}
