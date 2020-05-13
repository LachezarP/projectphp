<?php
	class Contact extends model{
		var $user_id;
		var $address_id;
		var $first_name;
		var $last_name;
		var $phone_number;
		var $email;

		public function get(){
			$SQL = 'SELECT * FROM Contact JOIN user ON Contact.user_id = user.user_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Contact');
			return $stmt->fetchAll();
		}

		public function getFromContactId($contact_id){
			$SQL = 'SELECT * FROM Contact JOIN user ON Contact.user_id = user.user_id JOIN Address ON Contact.address_id = Address.address_id WHERE contact_id = :contact_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['contact_id'=>$contact_id]);
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Contact');
			return $stmt->fetch();
		}
	}
?>