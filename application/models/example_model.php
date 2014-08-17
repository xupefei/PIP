<?php

class Example_model extends Model {
	
    public function __construct()
    {
        parent::__construct('phpwind');
    }
    
	public function getSomething($id)
	{
		$result = $this->get('tbl_user',
            '*',
            [
                "username" => 'abcd'
            ]);
        
		return $result;
	}

}

?>
