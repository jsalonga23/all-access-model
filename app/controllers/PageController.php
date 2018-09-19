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
		$view = View::make('layouts.front.views.pages.registration.register-1');
		$this->layout->themingOptions = data::getThemeOptionsRefences(
			array(
						'register'=>true
				)
			);
		$this->layout->pagename= "home";
		$this->layout->content = $view;

	}



}
