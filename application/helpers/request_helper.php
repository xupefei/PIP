<?php

class Request_helper {
    
	function get_get($key)
	{
		return isset($_GET["$key"]) ? $_GET["$key"] : null;
    }
	
	function get_post($key)
	{
		return isset($_POST["$key"]) ? $_POST["$key"] : null;
	}

}

?>