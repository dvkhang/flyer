<?php 
	class Person{
		protected $name;
		function __construct($name)
		{
			$this->name = $name;
		}
	}

	class Business{
		protected $staff;

		function __construct(Staff $staff)
		{
			$this->staff = $staff;
		}

		public function hire(Person $person){
			$this->staff->add($person);
		}

		public function getStaffMember(){
			return 	$this->staff->member();
		}
	}

	class Staff{	
		protected $member = [];

		function __construct($member = [])
		{
			$this->member = $member;
		}
		public function add(Person $person){
			$this->member[] = $person;
		}

		public function member(){
			return $this->member;
		}
	}

// $mike = new Person('Mike');

// $staff = new Staff([$mike]);

// $mage =  new Business($staff);

// $mage->hire(new Person("Jonh"));
// var_dump($mage->getStaffMember());
 ?>