<?php
class RegisterController extends \BaseController {


   public function insert() {

     $input = Input::all();

     Utilities::debug($input,1);

   }


}
