<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {
	
	public $template = 'login';

	public function action_homepage(){

		$session = session::instance();
		$data = $session->get('error');
		$session->delete('error');
		$this->template->message = $data;
	}
} // End Welcome
 