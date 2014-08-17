<?php

class Model {

	private $connection;
    
	public function __construct($db_label)
	{
		global $config;
        
        require(ROOT_DIR .'system/medoo.php');
        
        $this->connection = new medoo([
            // required
            'database_type' => $config[$db_label]['db_type'],
            'database_name' => $config[$db_label]['db_name'],
            'server' => $config[$db_label]['db_host'],
            'username' => $config[$db_label]['db_username'],
            'password' => $config[$db_label]['db_password'],
 
            // optional
            'port' => $config[$db_label]['db_port'],
            'charset' => 'utf8',
            // driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
            'option' => [
                PDO::ATTR_CASE => PDO::CASE_NATURAL
            ]
        ]) or die('MySQL Error: '. $this->connection->error());
	}

	public function query($query)
    {
        return $this->connection->query($query);
    }
    
    public function exec($query)
    {
        return $this->connection->exec($query);
    }
    
    public function quote($query)
    {
        return $this->connection->quote($query);
    }
    
    public function select($table, $join, $columns = null, $where = null)
    {
        return $this->connection->select($table, $join, $columns, $where);
    }
    
    public function insert($table, $datas)
    {
        return $this->connection->insert($table, $datas);
    }
    
    public function update($table, $data, $where = null)
    {
        return $this->connection->update($table, $data, $where);
    }
    
    public function delete($table, $where)
    {
        return $this->connection->delete($table, $where);
    }
    
    public function replace($table, $columns, $search = null, $replace = null, $where = null)
    {
        return $this->connection->replace($table, $columns, $search, $replace, $where);
    }
    
    public function get($table, $columns, $where = null)
    {
        return $this->connection->get($table, $columns, $where);
    }
    
    public function has($table, $join, $where = null)
    {
        return $this->connection->has($table, $join, $where);
    }
    
    public function count($table, $join = null, $column = null, $where = null)
    {
        return $this->connection->count($table, $join, $column, $where);
    }
    
    public function max($table, $join, $column = null, $where = null)
    {
        return $this->connection->max($table, $join, $column, $where);
    }
    
    public function min($table, $join, $column = null, $where = null)
    {
        return $this->connection->min($table, $join, $column, $where);
    }
    
    public function avg($table, $join, $column = null, $where = null)
    {
        return $this->connection->avg($table, $join, $column, $where);
    }
    
    public function sum($table, $join, $column = null, $where = null)
    {
        return $this->connection->sum($table, $join, $column, $where);
    }
    
    public function error()
    {
        return $this->connection->error();
    }
    
    public function last_query()
    {
        return $this->connection->last_query();
    }
    
    public function info()
    {
        return $this->connection->info();
    }
    
}
?>