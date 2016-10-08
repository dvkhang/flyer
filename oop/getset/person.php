<?php 
	class Person{
		public $name;
		public $age;

		function __construct($name)
		{
			$this->name = $name;
		}


	}

	$mike =  new Person('Mike');
	$mike->age = 23;
	var_dump($mike);
 ?>