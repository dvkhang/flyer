<?php 
	use Mike\user\person;
	use Mike\business;
	use Mike\staff;

	$mike = new Mike\user\Person('Mike');

	$staff = new Mike\Staff([$mike]);

	$mage =  new Mike\Business($staff);

	$mage->hire(new Mike\user\Person("Jonh"));
	var_dump($mage->getStaffMember());
 ?>