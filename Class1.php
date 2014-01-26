<?php
/**
 * File description doc block.
 */
/**
 * Class description doc block.
 */
class Class1
{
	public $var1;
	protected $var2;
	private $_var3;

	public function __construct()
	{
		//parent::__construct();
		$var1 = 1;
		//$this->$_var3 = mysql_connect();
	}

	public function __destruct()
	{
		//$_var3->disconnect();
	}

	public function init()
	{
		$this->myPrivateFunction();
		echo $this->var2;
	}	

	private function myPrivateFunction()
	{

	}
}

