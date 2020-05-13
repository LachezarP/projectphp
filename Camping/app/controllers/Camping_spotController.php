<?php
	class Camping_spotController extends Controller{

		public function index(){
			$items = $this->model('Camping_spot')->get();

			$this->view('camping_spot/index', ['items'=>$items]);
		}

		public function request($camping_spot_id){
			$theCampingSpot = $this->model('Camping_spot')->find($camping_spot_id);

			if(isset($_POST['action'])){
				$newRequest = $this->model('Request');
				$newRequest->camp_spot_id = $theCampingSpot->camping_spot_id;
				$newRequest->user_id = $_SESSION['user_id'];
				$newRequest->start_date = $_POST['start_date'];
				$newRequest->end_date = $_POST['end_date'];
				$newRequest->request_status = 'Pending';
				$newRequest->req_read = 'Not Read';
				$newRequest->create();

				$theRequest = $this->model('Request')->find($newRequest->request_id);

				if($theRequest !== null){
					$theCampingSpot->availability = 'pending';
					$theCampingSpot->update();
				}

				header('location:/Camping/camping_spot/index');
			}
			else{
				
				$this->view('camping_spot/request');
			}
		}
	}
?>