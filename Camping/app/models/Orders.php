<?php
	class Orders extends Model{
		var $user_id;
		var $date;
		var $order_status;
		var $order_total;
		
		public function get(){
			$SQL = 'SELECT * FROM orders JOIN user ON orders.user_id = user.user_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Orders');
			return $stmt->fetchAll();
		}

		public function findUserCart($user_id){
			$SQL = 'SELECT * FROM Orders WHERE user_id = :user_id && order_status = :order_status';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['user_id'=>$user_id, 'order_status'=>'cart']);
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Orders');
			return $stmt->fetch();
		}

		public function find($order_id){
			$SQL = 'SELECT * FROM Orders WHERE order_id = :order_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['order_id'=>$order_id]);
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Orders');
			return $stmt->fetch();
		}

		public function create(){
			$SQL = 'INSERT INTO Orders(user_id,date,order_status,order_total) VALUE(:user_id, :date,:order_status,:order_total)';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['user_id'=>$this->user_id,'date'=>$this->date,'order_status'=>$this->order_status,'order_total'=>$this->order_total]);
			return $this->order_id = self::$_connection->lastInsertId();
		}

		public function update(){
			$SQL = 'UPDATE Orders SET user_id = :user_id,date = :date,order_status = :order_status,order_total = :order_total WHERE order_id = :order_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['user_id'=>$this->user_id,'date'=>$this->date,'order_status'=>$this->order_status,'order_total'=>$this->order_total, 'order_id'=>$this->order_id]);
			return $stmt->rowCount();
		}
	}
?>