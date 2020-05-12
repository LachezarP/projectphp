<?php
	class Camping_spot extends Model{
		var $campground_id;
		var $description;
		var $image;
		var $price;
		var $availability;
		var $spot_number;

		public function get(){
			$SQL = 'SELECT * FROM Camping_spot INNER JOIN campground ON Camping_spot.campground_id = campground.campground_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Camping_spot');
			return $stmt->fetchAll();
		}

		public function getFreeSpot(){
			$SQL = "SELECT * FROM Camping_spot INNER JOIN campground ON Camping_spot.campground_id = campground.campground_id WHERE availability = 'not occupied' ";
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Camping_spot');
			return $stmt->fetchAll();
		}

		public function getOccupiedSpot(){
			$SQL = "SELECT * FROM Camping_spot INNER JOIN campground ON Camping_spot.campground_id = campground.campground_id WHERE availability = 'occupied' ";
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Camping_spot');
			return $stmt->fetchAll();
		}

		public function create(){
			$SQL = 'INSERT INTO camping_spot(campground_id,description,image,price,availability,spot_number) VALUE(:campground_id, :description, :image, :price, :availability, :spot_number)';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['campground_id'=>$this->campground_id,'description'=>$this->description,'image'=>$this->image,'price'=>$this->price,'availability'=>$this->availability,'spot_number'=>$this->spot_number]);
			return $stmt->rowCount();
		}

		public function find($camping_spot_id){
			$SQL = 'SELECT * FROM Camping_spot INNER JOIN campground ON Camping_spot.campground_id = campground.campground_id WHERE camping_spot_id = :camping_spot_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['camping_spot_id'=>$camping_spot_id]);
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Camping_spot');
			return $stmt->fetch();
		}

		public function update(){
			$SQL = 'UPDATE Camping_spot SET campground_id = :campground_id,description = :description,image = :image,price = :price,availability = :availability,spot_number = :spot_number WHERE camping_spot_id = :camping_spot_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['campground_id'=>$this->campground_id,'description'=>$this->description,'image'=>$this->image,'price'=>$this->price,'availability'=>$this->availability,'spot_number'=>$this->spot_number, 'camping_spot_id'=>$this->camping_spot_id]);
			return $stmt->rowCount();
		}

		public function delete(){
			$SQL = 'DELETE FROM Camping_spot WHERE camping_spot_id = :camping_spot_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['camping_spot_id'=>$this->camping_spot_id]);
			return $stmt->rowCount();
		}
	}
?>