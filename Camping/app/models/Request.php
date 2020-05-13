<?php
	class Request extends Model{
		var $camp_spot_id;
		var $user_id;
		var $start_date;
		var $end_date;
		var $request_status;
		var $req_read;
		var $timestamp;

		public function get(){
			$SQL = 'SELECT * FROM Request JOIN user ON Request.user_id = user.user_id JOIN contact ON user.user_id = user.user_id JOIN Camping_spot ON Request.camp_spot_id = Camping_spot.camping_spot_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Request');
			return $stmt->fetchAll();
		}

		public function create(){
			$SQL = 'INSERT INTO Request(camp_spot_id, user_id, start_date, end_date, request_status, req_read) VALUE(:camp_spot_id, :user_id, :start_date, :end_date, :request_status, :req_read)';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['camp_spot_id'=>$this->camp_spot_id,'user_id'=>$this->user_id,'start_date'=>$this->start_date,'end_date'=>$this->end_date,'request_status'=>$this->request_status,'req_read'=>$this->req_read]);
			return $stmt->rowCount();
		}

		public function find($request_id){
			$SQL = 'SELECT * FROM Request WHERE request_id = :request_id ';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['request_id'=>$request_id]);
			$stmt->setFetchMode(PDO::FETCH_CLASS, 'Request');
			return $stmt->fetch();
		}

		public function update(){
			$SQL = 'UPDATE Request SET camp_spot_id = :camp_spot_id,user_id = :user_id,start_date = :start_date,end_date = :end_date,request_status = :request_status,req_read = :req_read, `timestamp` = now() WHERE request_id = :request_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['camp_spot_id'=>$this->camp_spot_id,'user_id'=>$this->user_id,'start_date'=>$this->start_date,'end_date'=>$this->end_date,'request_status'=>$this->request_status, 'req_read'=>$this->req_read, 'request_id'=>$this->request_id]);
			return $stmt->rowCount();
		}

		public function delete(){
			$SQL = 'DELETE FROM Request WHERE request_id = :request_id';
			$stmt = self::$_connection->prepare($SQL);
			$stmt->execute(['request_id'=>$this->request_id]);
			return $stmt->rowCount();
		}
	}
?>