<?php

	include "./AutoLoader.php";

	//Create a new departments
	$dev = new Department("Development");
	$dev->setHOD("Mike");
	$dev->setGoal("Turn design into websites and mobile apps");
	$dev->setGoal("Delivery projects ontime");
	
	$hr = new Department("Human Resources");
	$hr->setHOD("Samantha");
	$hr->setGoal("Mantain all personal files");
	$hr->setGoal("Hire and retain best professionals");
	
	//Create a new employees for each department
	$me = new Employee("Miguel", $dev);
	$me->setBirthday("1982-07-15", true);
	
	$chris = new Employee("Chris", $hr);
	$chris->setBirthdayAccess(false);

	//Print out created objects info
	$elements = [$dev, $me, $hr, $chris];
	foreach ($elements as $elem) {
		$elem->getInfo();
	}

?>
