<?php
	// define Database class
	class Database{
		public $host = DB_HOST;
		public $username = DB_USER;
		public $password = DB_PASS;
		public $db_name = DB_NAME;

		public $link;
		public $error;
		public $last_id;
		/*
		 * constructor 
		 */
		public function __construct(){
			$this->connect();
		}

		/*
		 * Database connect function
		 */
		private function connect(){
			$this->link = new mysqli($this->host,$this->username,$this->password,$this->db_name);
			// mysqli_query($conn,'SET CHARACTER SET utf8');
		   //mysqli_query($conn,"SET SESSION collation_connection ='utf8_general_ci'");

			if(!$this->link){
				$this->error = "connection Failed : ".$this->link->connect_error;
				return false;
			}
		}



		/*
		 * Select
		 */
		public function select($query){
			$result = $this->link->query($query) or die($this->link->error.__LINE__);

			if($result->num_rows > 0){
				return $result;
			}
			else{
				return false;
			}
		}


		/*
		 * insert
		 */
		public function insert($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);

			if($insert_row){
		 	// header("location: post.php?id=1");
				//$last_id = $this->insert_row->insert_id;
				return true;
			}
			else{
				// die('error : ('.$this->link->error .')'.$this->link->error);
			}
		}

		/*
		 * update
		 */
		public function update($query){
			$update_row = $this->link->query($query) or die($this->link->error.__LINE__);

			if($update_row){
				// header("location: index.php?msg=".".urlencode('updated').");
				return true;
			}
			else{
				die('error : ('.$this->link->error .')'.$this->link->error);
			}
		}

		/*
		 * Delete
		 */
		public function delete($query){
			$delete_row = $this->link->query($query) or die($this->link->error.__LINE__);

			if($delete_row){
				// header("location: index.php?msg=".".urlencode('Deleted').");
			}
			else{
				die('error : ('.$this->link->error .')'.$this->link->error);
			}
		}

	}
?>