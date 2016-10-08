<?php 
namespace Mike;

use Mike\user\person;

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
 ?>