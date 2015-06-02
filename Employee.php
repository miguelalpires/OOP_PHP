<?php

	class Employee extends Person
	{	
		//Name of the department that the employee belongs to
		private $department;
		
		//Constructor: Employee is a person that belongs to a department
		function __construct($myName, $myDepartement){
			parent::__construct($myName);
			$this->department = $myDepartement;
		}

		/**
		*	
		*	PUBLIC METHODS
		*
		**/
		
		//Returns all avialable employee info
		public function getInfo(){
			echo parent::getInfo();
			echo $this->getDepInfo();			
		}


		/**
		*	
		*	PRIVATE METHODS
		*
		**/

		//Returns employee department info
		private function getDepInfo(){
			return "I work on ".$this->department->getCompany()." - ".$this->department->name."<br><br>";
		}	
	}
?>