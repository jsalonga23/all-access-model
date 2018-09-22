<?php

// Documentation for the Images is located into this link
// http://image.intervention.io/api/crop

class PhotoImage {

	private static $PathDirectory = "/assets/images/events/";
	private static $PathDirectoryUrl = "/assets/images/events/";

	public static function ProcessEventGallery($year,$month,$txtEventId) {

		$file = $_FILES['file'];
		$fileDirectory = "";
		$newFilename = "";
		// utilities::debug($file,1);
		if (Input::file('file')->isValid())
		{
			$size = Input::file('file')->getSize();
			try  {

				$ext = File::extension($file['name']);
				$newFilename =  $file['name'];

				$fileDirectory = public_path().static::$PathDirectory.$txtEventId. "/album/";
				$status = Input::file('file')->move($fileDirectory , $newFilename);

			} catch(\exception $e){

				echo $e->getMessage();
				die();
			}
		}
		return $newFilename;
	}

	public static function ProcessEventImage($year,$month) {

		$file = $_FILES['file'];
		$fileDirectory = "";
		$newFilename = "";
		// utilities::debug($file,1);
		if (Input::file('file')->isValid())
		{
			$size = Input::file('file')->getSize();
			try  {

				$ext = File::extension($file['name']);
				$newFilename = time().$file['name'];

				$fileDirectory = public_path().static::$PathDirectory."/";

				$status = Input::file('file')->move($fileDirectory , $newFilename);

				if ($status) {

					$smallPath = public_path().static::$PathDirectory."/small";

					if (!file_exists($smallPath)) {
					    mkdir($smallPath, 0777, true);
					}

					$smallPath = public_path().static::$PathDirectory.'/small/'.$newFilename;

					$img = Image::make($fileDirectory.$newFilename);

					// resize the image to a width of 250 and constrain aspect ratio (auto height)
					$img->resize(250, null, function ($constraint) {
					    $constraint->aspectRatio();
					});

					$img->save($smallPath);

				}

			} catch(\exception $e){

				echo $e->getMessage();
				die();
			}
		}
		return $newFilename;
	}

	public static function ProcessEventFile($year,$month,$txtEventId) {

		$file = $_FILES['filepdf'];
		$fileDirectory = "";
		$newFilename = "";
		// utilities::debug($file,1);
		if (Input::file('filepdf')->isValid()) {

			$size = Input::file('filepdf')->getSize();
			try  {

				$ext = File::extension($file['name']);
				$newFilename =  $file['name'];

				$fileDirectory = public_path().static::$PathDirectory.$txtEventId;
				$status = Input::file('filepdf')->move($fileDirectory , $newFilename);

			} catch(\exception $e){

				echo $e->getMessage();
				die();
			}
		}
		return $newFilename;

	}


	public static function ProcessMainProfile() {

		$file = $_FILES['profilePhoto'];
		$fileDirectory = "";
		$newFilename = "";
		// utilities::debug($file,1);
		if (Input::file('profilePhoto')->isValid())
		{
			$size = Input::file('profilePhoto')->getSize();
			try  {

				$ext = File::extension($file['name']);
				$newFilename =  $file['name'];

				$fileDirectory = public_path().'/assets/images/mainProfile/';
				$status = Input::file('profilePhoto')->move($fileDirectory , $newFilename);

			} catch(\exception $e){

				echo $e->getMessage();
				die();
			}
		}
		return $newFilename;
	}


	public static function removeFileGallery($filename,$year,$month,$eventId) {
		$fileDirectory = public_path().static::$PathDirectory.$year."/".$month."/".$eventId."/".$filename;
		// utilities::debug($fileDirectory,1);
		File::delete($fileDirectory);
	}



}
