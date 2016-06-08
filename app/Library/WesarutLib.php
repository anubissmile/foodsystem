<?php
	namespace App\Library;

	class WesarutLib {

		public $greet;
		public $age;

		public function __construct(){
			$this->greet =  "Hello Wesarut Lib";
			$this->age = "24";

		}	

		public function callGreet(){
			return $this->greet;
		}


		public function getAge(){
			return $this->age;
		}


	}