<?php
class Utilities {


	public static function debug($data,$die=false)
	{
		echo '<pre style="font-size:11px;">';print_r($data);echo '</pre>';if($die) die();
	}
	public static  function urlReplaceDefault($stringVal)
	{
		$str = str_replace('/', '-', strtolower(trim($stringVal)));
		$str = str_replace(' ', '-', $str);
		$str = str_replace("’", '-', $str);
		$str = str_replace("'", '-', $str);
		$str = str_replace(".", '-', $str);
		$str = str_replace('"', '', $str);
		$str = str_replace("&", 'and', $str);
		return $str;
	}

	public static function getAllTalentCategory() {
		$talentCategory = TalentCategory::all();
		return $talentCategory;
	}
	public static function getAllEthnicity() {
		$ethnicity = Ethnicity::all();
		return $ethnicity;
	}


	public static function chkBoxChecked($val)
	{
		if ($val) {
			return 'checked = "checked"';
		}
	}

	public static  function getAdminEmail()
	{

		$adminDetails = User::where('role', '=', '1')->first();


		return $adminDetails;
	}



	public static function array_to_csv_download($array, $filename = "members.csv", $delimiter=";") {
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="'.$filename.'";');

    // open the "output" stream
    // see http://www.php.net/manual/en/wrappers.php.php#refsect2-wrappers.php-unknown-unknown-unknown-descriptioq
    $f = fopen('php://output', 'w');

	    foreach ($array as $line) {
	        fputcsv($f, $line, $delimiter);
	    }
	}
}
