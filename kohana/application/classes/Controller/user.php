<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller {

	public function action_login()
	{
		$View = View::Factory('login');
		$user = $this->request->post("username");
		$password = $this->request->post("pass");
	  	if($user == 'chinh' && $password == '123456'){
	  		
		  	$this->response->body(View::Factory('success'));
		} else{
			$session = session::instance();
			$session->set('error' , 'Invalid username or password');
			$this->redirect('home');
		}
		// $this->redirect('home');

		
		//echo 'LOGOUT';
	}
}