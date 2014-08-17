<?php

class Main extends Controller {
	
	function index()
	{
        $db = $this->loadModel('example_model');
        $ddd=$db->getSomething(2);
        
        echo $ddd[0]['username'];
        
        die('This is the default page for Sumisora API.');
	}
    
}

?>