<?php

class Main extends Controller {
	
	function __construct(){
		parent::__construct();
	}
	
	function index()
	{
		
		$user = $this->session_helper->get('abc');
		
		$template = $this->loadView('main_view');
		$template->render();
	}
    
}

?>