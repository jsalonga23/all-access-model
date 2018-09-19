<?php

class data  {
	public static function AdministratorLoginRoles()
	{
		$os = array("10", "9", "8", "7", "6", "5");

		return $os;
	}

	public static function loginRoles()
	{
		$os = array("1");
		return $os;

	}

	public static function getThemeOptionsRefences($object=null)
	{

		$register = false;

		if (isset($object)) {
			if (isset($object['register']))
			{
				$register = $object['register'];
			}

		}

		unset($object);

		$data = array();
		$data['register'] = $register;


		return $data;
	}

}
