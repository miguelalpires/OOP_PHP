<?php

	class Department implements Structable
	{

		//Name of the corporate that the department belongs to 
		//(Must be the same for all objects of this type)
		private static $company = "Blue Media Fountain";

		//Name of the Department (must be public for Employees access)
		public $name;

		//Head of the department name
		private $headOfDepartment;

		//List of departmet goals
		private $goals;

		
		//Constructor
		function __construct($myName){
			$this->name = $myName;
			$this->goals = array();
		}


		/**
		*	
		*	PUBLIC METHODS	
		*
		**/

		//Returns company name (must be public for Employees access)
		public function getCompany(){
			return self::$company;
		}

		
		//Sets HOD name
		public function setHOD($hodName){
			$this->headOfDepartment = $hodName;
		}
		
		//Sets an additional goal to the department
		public function setGoal($newGoal){
			array_push($this->goals, $newGoal);
		}
		
		//Returns all avialable deparment info
		public function getInfo(){
			echo $this->getName();
			echo $this->getGoals();
			echo $this->getHOD();
		}
		

		/**
		*	
		*	PRIVATE METHODS	
		*
		**/

		//Returns department name info
		private function getName(){
			return "Department: ".$this->name."<br>";
		}

		//Returns department goals info
		private function getGoals(){
			$nGoals = count($this->goals);
			echo "Goals: <br>";
			for($i = 0; $i < $nGoals; $i++){
				echo ($i+1)." - ".$this->goals[$i]."<br>";
			}
		}

		//Returns HOD info string
		private function getHOD(){
			return "HOD: ".$this->headOfDepartment."<br><br>";
		}

	}

?>