<?php
	class Profile extends Model{
		var $user_id;
		var $address_id;
		var $first_name;
		var $last_name;
		var $phone_number;
		var $email;
		var $country;
		
		var $city;
		var $street;
		var $postal_code;
		var $province;

		public function get(){
			$SQL = "SELECT * FROM Contact JOIN user ON Contact.user_id = user.user_id WHERE contact.user_id = '{$_SESSION['user_id']}'";
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Profile');
			return $stmt->fetchAll();
		}
		public function getFromContactId(){
			$SQL = "SELECT * FROM Contact JOIN user ON Contact.user_id = user.user_id JOIN Address ON Contact.address_id = Address.address_id WHERE contact.user_id = '{$_SESSION['user_id']}'";
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Profile');
			return $stmt->fetch();
		}

		public function findUser($user_id){
			$SQL = 'SELECT * FROM Contact WHERE user_id = :user_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['user_id'=>$user_id]);
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Profile');
			return $stmt->fetch();
		}

		public function createContact(){
			$SQL = 'INSERT INTO Contact(user_id, address_id, first_name, last_name, phone_number, email) VALUE(:user_id, :address_id, :first_name, :last_name, :phone_number, :email)';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['user_id'=>$this->user_id,'address_id'=>$this->address_id,'first_name'=>$this->first_name,'last_name'=>$this->last_name,'phone_number'=>$this->phone_number,'email'=>$this->email]);
			return $stmt->rowCount();
		}

		public function createAddress(){
			$SQL = 'INSERT INTO Address(user_id, country, city, street, postal_code, province) VALUE(:user_id, :country, :city, :street, :postal_code, :province)';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['user_id'=>$this->user_id,'country'=>$this->country,'city'=>$this->city,'street'=>$this->street,'postal_code'=>$this->postal_code,'province'=>$this->province]);
			return $this->address_id = self::$_connection->lastInsertId();
		}
	}

?>