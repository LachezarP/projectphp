<?php
	
	class Model{
		protected static $_connection = null;

		public function __construct(){
			$host = 'localhost';
			$dbname = 'camping';
			$user = 'camping_user';
			$password = 'tjAOLl7NQlvOtES9';

			if(self::$_connection == null){
				self::$_connection = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
			}
		}
	}

?>