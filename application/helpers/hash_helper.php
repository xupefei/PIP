<?php

class Hash_helper {
    
	function hash($data)
	{
        global $config;
        
        $data = $config['hash_salt'] . $data . time();
        
		return strtoupper(hash('sha256', $data));
    }

}

?>