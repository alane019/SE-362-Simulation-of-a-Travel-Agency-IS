<?php
	class Account {
		private $con;
		private $errorArray;

		public function __construct($con) {
			$this->con=$con;
			$this->errorArray = array(); // ERROR ARRAY 
		}

		public function adminLogin($un,$pw){
			$query=mysqli_query($this->con,"SELECT * FROM admin WHERE username='$un' AND password='$pw'");
	  
			if(mysqli_num_rows($query)==1){
			  return true;
			}
			else{
			  return false;
			}
			
	  
		  }


		public function login($un,$pw) {
			//ENCRIPTS THE PASSWORD
			$pw = md5($pw);
				
			// CONNECTION TO THE LOGIN
      		$query = mysqli_query($this->con,"SELECT * FROM users WHERE username='$un' AND password='$pw'");

			//Show the Name and Surname of the user
			//while($row = $query->mysql_fetch_assoc()) {
			//	echo "Welcome ".$row['firstName']." ".$row['lastName']; 
			//}


			// IF ROW EXISTS MAKE CONNECTION
      		if(mysqli_num_rows($query) == 1){
       			return true;
			}
			// ELSE ROW DOESN'T EXIST
      		else {
        		array_push($this->errorArray,Constants::$loginFailed);
        		return false;
      		}
    	}

		//REGISTER FUNCTION
		public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
			$this->validateUsername($un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			$this->validateEmails($em, $em2);
			$this->validatePasswords($pw, $pw2);

			if(empty($this->errorArray) == true) {
				//INSERT INTO DB
				return $this->insertUserDetails($un,$fn,$ln,$em,$pw);
			}
			else {
				return false;
			}
		}

		// RETURNS TO THE ERROR THE COLUMN
		public function getError($error) {
			if(!in_array($error, $this->errorArray)) {
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>"; // SENDS THE ERROR MESSAGE
		}

		private function insertUserDetails($un,$fn,$ln,$em,$pw){
				$encryptedPw = md5($pw); // Password -> ffdsfnasf2376tffa
				$profilePic  = "assests/images/profile-pics/head_emerald.jpg";
				$date = date("Y-m-d");

				$result = mysqli_query($this->con,"INSERT INTO users VALUES ('','$un','$fn','$ln','$em','$encryptedPw','$date','$profilePic')");

				return $result;


		}

		private function validateUsername($un) {

			if(strlen($un) > 25 || strlen($un) < 5) {
				array_push($this->errorArray, Constants::$usernameCharacters);
				return;
			}

			// check if username exists

			$checkUsernameQuery = mysqli_query($this->con,"SELECT username FROM users WHERE username='$un'");
			if(mysqli_num_rows($checkUsernameQuery) !=0){
				array_push($this->errorArray, Constants::$usernameTaken);
				return;
			}

		}

		private function validateFirstName($fn) {
			if(strlen($fn) > 25 || strlen($fn) < 2) {
				array_push($this->errorArray,Constants::$firstNameCharacters );
				return;
			}
		}

		private function validateLastName($ln) {
			if(strlen($ln) > 25 || strlen($ln) < 2) {
				array_push($this->errorArray, Constants::$lastNameCharacters);
				return;
			}
		}

		private function validateEmails($em, $em2) {
			// password fields doesnt not equal
			if($em != $em2) {
				array_push($this->errorArray, Constants::$emailsDoNotMatch);
				return;
			}

			// e.g @gmail.com doesnt exits
			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, Constants::$emailInvalid);
				return;
			}

			// Check that username hasn't already been used
			$checkEmailQuery = mysqli_query($this->con,"SELECT email FROM users WHERE email='$em'");
			if(mysqli_num_rows($checkEmailQuery) !=0){
				array_push($this->errorArray, Constants::$emailTaken);
				return;
			}

		}

		private function validatePasswords($pw, $pw2) {
			
			if($pw != $pw2) {
				array_push($this->errorArray, Constants::$passwordsDoNoMatch );
				return;
			}

			//IF IT IS OUT OF A-Z or a-z or 0-9
			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
				return;
			}	
			
			//RANGE IS LESS THAN 5 AND LESS THAN 30
			if(strlen($pw) > 30 || strlen($pw) < 5) {
				array_push($this->errorArray, Constants::$passwordCharacters);
				return;
			}

		}


	}
?>