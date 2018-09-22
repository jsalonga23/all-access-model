<?php

class Register extends Eloquent {

	protected $table = 'users';
	public $timestamps = true;


	public static $rules = array(
		  'email' => 'required',
			'password' => 'required',
			'fname' => 'required',
			'lname' => 'required',
			'birthday' => 'required',
			'nationalityBorn' => 'required',
			'nationalityPassport' => 'required',
			'ethnicity' => 'required',
			'language' => 'required',
			'hairColor' => 'required',
			'eyeColor' => 'required',
			'height' => 'required',
			'shoeSize' => 'required',
			'experience' => 'required',
			'country' => 'required',
			'city' => 'required',
			'address' => 'required',
			'mobile' => 'required',
		  'whatsapp' => 'required'
	);

	public static function InsertUser() {

		$input = Input::all();

		// utilities::debug($input,1);
		$features = '';
		if(isset($input['features'])) {
			$features = implode(", ",$input['features']);
		}

		$rsUser = new Register();

		$rsUser->email = $input['email'];
		$rsUser->password = Hash::make($input['password']);
		$rsUser->fname = $input['fname'];
		$rsUser->mname = $input['mname'];
		$rsUser->lname = $input['lname'];
		$rsUser->birthday = $input['birthday'];
		$rsUser->nationalityBorn = $input['nationalityBorn'];
		$rsUser->nationalityPassport = $input['nationalityPassport'];
		$rsUser->willingTravel = $input['willingTravel'];
		$rsUser->ethnicity = $input['ethnicity'];
		$rsUser->language = $input['language'];
		$rsUser->hairColor = $input['hairColor'];
		$rsUser->eyeColor = $input['eyeColor'];
		$rsUser->height = $input['height'];
		$rsUser->shoeSize = $input['shoeSize'];
		$rsUser->chestSize = $input['chestSize'];
		$rsUser->waistSize = $input['waistSize'];
		$rsUser->hip = $input['hip'];
		$rsUser->tshirt = $input['tshirt'];
		$rsUser->pants = $input['pants'];
		$rsUser->jacket = $input['jacket'];
		$rsUser->experience = $input['experience'];
		$rsUser->country = $input['country'];
		$rsUser->region = $input['region'];
		$rsUser->city = $input['city'];
		$rsUser->postal = $input['postal'];
		$rsUser->address = $input['address'];
		$rsUser->mobile = $input['mobile'];
		$rsUser->whatsapp = $input['whatsapp'];
		$rsUser->facebook = $input['facebook'];
		$rsUser->instagram = $input['instagram'];
		$rsUser->features = $features;

		// if(isset($input['file'])) {
		// 	$rsUser->image = $input['file']->getClientOriginalName();
		// 	photoImage::ProcessCommitteeImage();
		// }
		$status = $rsUser->save();

		foreach($input['profession'] as $profession) {
			$status = DB::table('tbl_profession_mapping')->insert(array('user' => $rsUser->id, 'category' => $profession));
		}

		return $status;
	}

	public static function UpdateCommittee() {

		$input = Input::all();

		// utilities::debug($input,1);

		$rsCommittee = Committee::find($input['txtId']);

		$rsCommittee->name = $input['txtFullname'];
		$rsCommittee->designation = $input['txtDesignation'];
		$rsCommittee->description = $input['txtDescription'];
		$rsCommittee->email = $input['txtEmail'];
		$rsCommittee->mobile = $input['txtMobile'];

		if(isset($input['file'])) {
			$rsCommittee->image = $input['file']->getClientOriginalName();
			photoImage::ProcessCommitteeImage();
		}
		$status = $rsCommittee->save();

		return $status;
	}



}
