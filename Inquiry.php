<?php

class Inquiry extends Eloquent {
	public $timestamps = true;
	protected $table = 'tbl_inquiry';

	public static $rules = array(
		  'Name' => 'required',
		  'EmailAddress' => 'required',
		  'MobileNumber' => 'required',
		  'Message' => 'required|max:250',
	);

	public static function InsertInquiry() {

		$input = Input::all();

		$rsInquiry = new Inquiry;
		$rsInquiry->name = $input['txtName'];
		$rsInquiry->email = $input['txtEmail'];
		$rsInquiry->mobile = $input['txtMobileNumber'];
		$rsInquiry->message = $input['txtMessage']; 

		$status = $rsInquiry->save();
		
		utilities::emailInquiry($input);
		
		return $status;
	}

}