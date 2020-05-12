<?php
	class Product extends Model{
		var $inventory_id;
		var $name;
		var $price;
		var $description;
		var $availability;

		public function get(){
			$SQL = 'SELECT * FROM Product INNER JOIN inventory ON Product.inventory_id = inventory.inventory_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
			return $stmt->fetchAll();
		}

		public function create(){
			$SQL = 'INSERT INTO Product(inventory_id, name, price, description, availability) VALUE(:inventory_id, :name, :price, :description, :availability)';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['inventory_id'=>$this->inventory_id,'name'=>$this->name,'price'=>$this->price,'description'=>$this->description,'availability'=>$this->availability]);
			return $stmt->rowCount();
		}

		public function find($product_id){
			$SQL = 'SELECT * FROM Product INNER JOIN inventory ON Product.inventory_id = inventory.inventory_id WHERE product_id = :product_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['product_id'=>$product_id]);
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
			return $stmt->fetch();
		}

		public function update(){
			$SQL = 'UPDATE Product SET inventory_id = :inventory_id,name = :name,price = :price,description = :description,availability = :availability WHERE product_id = :product_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['inventory_id'=>$this->inventory_id,'name'=>$this->name,'price'=>$this->price,'description'=>$this->description,'availability'=>$this->availability, 'product_id'=>$this->product_id]);
			return $stmt->rowCount();
		}

		public function delete(){
			$SQL = 'DELETE FROM Product WHERE product_id = :product_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['product_id'=>$this->product_id]);
			return $stmt->rowCount();
		}
	}	
?>