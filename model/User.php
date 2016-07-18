<?php 
	class User {
		public $id;
		public $firstname;
		public $lastname;
		public $fullname;
		public $datet;
		public $gender;
		public $email;
		public $avatar;
		public function __construct($id,$firstname,$lastname,$fullname,$datet,$gender,$email,$avatar){
			$this->id = $id;
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->fullname = $fullname;
			$this->datet = $datet;
			$this->gender = $gender;
			$this->email = $email;
			$this->avatar = $avatar;
		}
	}
	$u = new User();
 ?>