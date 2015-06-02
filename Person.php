<?php
	
	class Person implements Consultable
	{

		//Persons birthday date mask (same format for all)
		public static $birthdayFormat = "Y-m-d";

		//Name of the person
		public $name;

		//Persons birthday
		protected $birthday;

		//Persons birthday access controller
		protected $allowBirthdayAccess;
		
		
		//Constructor
		function __construct($myName){
			$this->name = $myName;

		}

		/**
		*	
		*	PUBLIC METHODS
		*
		**/

		//Set persons birthday (even when available can be not shared)
		public function setBirthday($myBirthday, $allowAccess){

			$this->birthday = new DateTime($myBirthday);
			
			$this->setBirthdayAccess($allowAccess);

		}

		//Sets persons birthday access
		public function setBirthdayAccess($allowAccess){
			$this->allowBirthdayAccess = $allowAccess;
		}


		//Returns all avialable personal info		
		public function getInfo(){
			echo $this->getName();
			echo $this->getAge();
		}

		/**
		*	
		*	PRIVATE METHODS
		*
		**/			

		//Returns person name
		private function getName(){
			return "Hi, my name is ".$this->name."<br>";
		}

		//Returns person birthday info
		private function getAge(){
			if($this->allowBirthdayAccess){
				return "\n My birthday is on ".date_format($this->birthday, self::$birthdayFormat)."<br>";
			} else {
				return "\n Sorry but I prefer to keep my birthday as private <br>";
			}
		}

	}
?>