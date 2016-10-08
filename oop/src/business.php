<?php 
namespace Mike;

use Mike\user\person;

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
 ?>