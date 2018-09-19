<?php 

class errorMessage {
	
	public static function formSuccess() {
		$message  = "<div class='alert alert-success'>";
		$message .= "Request Sent. We will get back to you as soon as possible.";
		$message .= "</div>";
		return $message;
	}
	public static function inquirySuccess() {
		$message  = "<div class='alert alert-success'>";
		$message .= "Message successfully sent. We will get back to you as soon as possible";
		$message .= "</div>";
		return $message;
	}


	public static function formFailed() {
		$message  = "<div class='alert alert-danger'>";
		$message .= "Please complete all required fields with valid data.";
		$message .= "</div>";
		return $message;
	}

}