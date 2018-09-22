<?php
class PageController extends \BaseController {
	protected $layout='layouts.front.template.default';


	public function index() {
		$view = View::make('layouts.front.views.pages.splash');
		$this->layout->themingOptions = data::getThemeOptionsRefences(array());
		$this->layout->pagename= "home";
		$this->layout->content = $view;
	}

	public function register() {
		$view = View::make('layouts.front.views.pages.register');
		$this->layout->themingOptions = data::getThemeOptionsRefences(
			array(
						'register'=>true
				)
			);
		$view->rsTalentCategory= Utilities::getAllTalentCategory();
		$view->rsEthnicity= Utilities::getAllEthnicity();
		$this->layout->pagename= "register";
		$this->layout->content = $view;

	}
	public function thankyou() {
		$view = View::make('layouts.front.views.pages.thankyou');
		$this->layout->themingOptions = data::getThemeOptionsRefences(
			array()
			);
		$this->layout->pagename= "thankyou";
		$this->layout->content = $view;

	}



}
