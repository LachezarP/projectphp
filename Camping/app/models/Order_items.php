<?php
	class Order_items extends Model{
		var $product_id;
		var $order_id;
		var $price;
		var $qty;

		public function getSales(){
			$SQL = 'SELECT * FROM order_items JOIN orders ON order_items.order_id = orders.order_id JOIN product ON order_items.product_id = product.product_id WHERE orders.order_status != "cart" ';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Order_items');
			return $stmt->fetchAll();
		}

		public function findForOrder($order_id){
			$SQL = 'SELECT * FROM order_items JOIN orders ON order_items.order_id = orders.order_id JOIN product ON order_items.product_id = product.product_id WHERE order_items.order_id = :order_id ';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['order_id'=>$order_id]);
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Order_items');
			return $stmt->fetchAll();
		}

		public function create(){
			$SQL = 'INSERT INTO Order_items(order_id,product_id,qty,price) VALUE(:order_id,:product_id,:qty,:price) ON DUPLICATE KEY UPDATE qty=qty+:qty';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['order_id'=>$this->order_id,'product_id'=>$this->product_id,'qty'=>$this->qty,'price'=>$this->price]);
			return $stmt->rowCount();
		}

		public function find($order_items_id){
			$SQL = 'SELECT * FROM Order_items WHERE order_items_id = :order_items_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['order_items_id'=>$order_items_id]);
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Order_items');
			return $stmt->fetch();
		}

		public function delete(){
			$SQL = 'DELETE FROM Order_items WHERE order_items_id = :order_items_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['order_items_id'=>$this->order_items_id]);
			return $stmt->rowCount();
		}
	}
?>