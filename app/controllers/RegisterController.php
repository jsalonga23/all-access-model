<?php
class RegisterController extends \BaseController {


   public function insert() {

     $input = Input::all();

     $data =  array(
       'email' => $input['email'],
 			'password' => $input['password'],
 			'fname' => $input['fname'],
 			'lname' => $input['lname'],
 			'birthday' => $input['birthday'],
 			'nationalityBorn' => $input['nationalityBorn'],
 			'nationalityPassport' => $input['nationalityPassport'],
 			'ethnicity' => $input['ethnicity'],
 			'language' => $input['language'],
 			'hairColor' => $input['hairColor'],
 			'eyeColor' => $input['eyeColor'],
 			'height' => $input['height'],
 			'shoeSize' => $input['shoeSize'],
 			'experience' => $input['experience'],
 			'country' => $input['country'],
 			'city' => $input['city'],
 			'address' => $input['address'],
 			'mobile' => $input['mobile'],
 		  'whatsapp' => $input['whatsapp']

 		);

 		$validator = Validator::make($data, Register::$rules);

 		if ($validator->fails())
 		{
 			return Redirect::to('/register')
                  ->with('message_error',true) // send back all errors to the login form
 					        ->with('authenticated_message','Please input correct details. Try again.') // send back all errors to the login form
 					        ->withInput();
 		}
 		else
 		{
      if($input['email'] == $input['emailVerif'] && $input['password'] == $input['passwordVerif']) {

        $status = Register::InsertUser();
        if($status) {
          return Redirect::to('/thank-you');

        }else {
          return Redirect::to('/register')
                      ->with('message_error', true) // send back all errors to the login form
     					        ->with('authenticated_message', "System Failed. Please try again.") // send back all errors to the login form
     					        ->withInput();
        }

      }else {
        return Redirect::to('/register')
                    ->with('message_error', true) // send back all errors to the login form
   					        ->with('authenticated_message', "Email/Password did not match. Please try again.") // send back all errors to the login form
   					        ->withInput();
      }

    }

   }


}
