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
	}
?>