<?php

class Memcache_helper {
    
	private $cache;
    
    function __construct()
    {
        global $config;
        
        $this->cache = new Memcache;
        $this->cache->connect($config['memcache_host'], $config['memcache_port']) or die('Memcache Error');
    }
    
	function add($key, $var, $expire = 900)
	{
		return $this->cache->add($key, $var, false, $expire);
    }
    
	function set($key, $var, $expire = 900)
	{
		return $this->cache->set($key, $var, false, $expire);
    }
    
	function get($key)
	{
		return $this->cache->get($key);
    }
	
	function exist($key)
	{
		return ($this->cache->get($key) !== FALSE);
    }
    
	function renew($key, $expire = 900)
	{
        if(!$this->exist($key)){
            return false;
        }
        
        $var = $this->get($key);
        
		return $this->cache->replace($key, $var, false, $expire);
    }

}

?>