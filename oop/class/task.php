<?php 
	/**
	* 
	*/
	class Task{
		
		public $descriptio;

		function __construct($description)
		{
			$this->description= ($description);
		}

	}

	$t=  new Task("lean OOP", "Teacher bla bal...");
	var_dump($t->description);
 ?>