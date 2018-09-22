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

	public static $changePassword = array(
		  'password' => 'required|alpha_num|min:3|confirmed',
		  'password_confirmation' => 'required|alpha_num|min:3',
	);

		public static $rulesresetpassword = array(
		'password' => 'required|alpha_num|min:5|confirmed',
		'password_confirmation' => 'required|alpha_num|min:5'
	);


	public static function resetPassword()
	{
		$input = Input::all();
		$rsSearchUsers = User::where('confirm_code', '=', $input['txtConfirmationcode'])->first();

		if ($rsSearchUsers)
		{
			$rsUser = User::find($rsSearchUsers->id);
			$rsUser->confirm_code = "";
			$rsUser->password = Hash::make($input['txtPassword']);

			return $rsUser->save();
		}
		else
		{
			return false;
		}
	}

	public static function updatePassword()
	{
		$input = Input::all();

		$rsUser = User::find(Auth::User()->id);
		$rsUser->password = Hash::make($input['newpassword']);

		return $rsUser->save();
	}

	public static function ForgetPasswordSendEmailRegistration()
	{
		$input = Input::all();

		$rsUsers = User::where('email', '=', $input['txtEmailAddress'])->first();

		$confirm_code  = str_random(30);

		$findUser = User::find($rsUsers->id);
		$findUser->confirm_code = $confirm_code;
		$findUser->save();

		if ($findUser) {

			$data = array('firstname'=> ucfirst($rsUsers->firstname), 'confirm_code' => $confirm_code);

			$status = Mail::send('emails.forgotpassword', $data, function($message) use ($rsUsers) {
					$message->from('info@creativouae.com', 'Reset Password');
			        $message->to($rsUsers->email,ucfirst($rsUsers->firstname))->subject('Ram Club | Forgot Password');
			});

			return 1;

		}
		else
		{
			return 0;
		}
	}


}
