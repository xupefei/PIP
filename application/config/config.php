<?php 

$config['base_url'] = ''; // Base URL including trailing slash (e.g. http://localhost/)

$config['default_controller'] = 'main'; // Default controller to load
$config['error_controller'] = 'error'; // Controller used for errors (e.g. 404, 500 etc)

$config['phpwind']['db_type'] = 'mariadb'; // Database type (can be one among mariadb, mysql, pgsql, sybase, oracle, mssql, sqlite)
$config['phpwind']['db_host'] = 'localhost'; // Database host (e.g. localhost)
$config['phpwind']['db_port'] = '3306'; // Database port (e.g. 3306)
$config['phpwind']['db_name'] = 'bbs'; // Database name
$config['phpwind']['db_username'] = 'bbs'; // Database username
$config['phpwind']['db_password'] = '1111111111'; // Database password

$config['platform']['db_type'] = 'mariadb'; // Database type (can be one among mariadb, mysql, pgsql, sybase, oracle, mssql, sqlite)
$config['platform']['db_host'] = 'localhost'; // Database host (e.g. localhost)
$config['platform']['db_port'] = '3306'; // Database port (e.g. 3306)
$config['platform']['db_name'] = 'bbs2'; // Database name
$config['platform']['db_username'] = 'bbs2'; // Database username
$config['platform']['db_password'] = '222222222'; // Database password

$config['memcache_host'] = 'localhost'; // Memcache username
$config['memcache_port'] = '11211'; // Memcache password

$config['hash_salt'] = 'CkNh5X*Qzrj%HkRkn8p%CbkN8jHz9YKC'; // Salt when doing hash

$config['autoload'] = array(
    'plugins' => array(),
    'helpers' => array('session_helper', 'url_helper', 'request_helper')
);

?>