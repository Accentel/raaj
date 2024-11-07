<?php
class DbConfig 
{	
	private $_host = 'localhost';
	private $_username = 'a16673ai_payamath';
	private $_password = 'Payamath@2016';
	private $_database = 'a16673ai_raaj';
	
	protected $connection;
	
	public function __construct()
	{
		if (!isset($this->connection)) {
			
			$this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
			
			if (!$this->connection) {
				echo 'Cannot connect to database server';
				exit;
			}			
		}	
		
		return $this->connection;
	}
}
?>
