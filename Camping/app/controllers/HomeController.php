<?php
/**
	@accessFilter:{LoginFilter}
*/
	class HomeController extends Controller{
/**
	@accessFilter:{AdminFilter}
*/
		public function index(){
			$items = $this->model('Camping_spot')->get();

			$this->view('home/index', ['items'=>$items]);
		}

		public function freeSpot(){
			$items = $this->model('Camping_spot')->getFreeSpot();

			$this->view('home/index', ['items'=>$items]);
		}

		public function occupiedSpot(){
			$items = $this->model('Camping_spot')->getOccupiedSpot();

			$this->view('home/index', ['items'=>$items]);
		}

		public function create(){
			if(isset($_FILES['newPicture']) && $_FILES['newPicture']['error'] == UPLOAD_ERR_OK){
				$info = getimagesize($_FILES['newPicture']['tmp_name']);
				$allowedTypes = [IMAGETYPE_JPEG => '.jpg', IMAGETYPE_PNG => '.png', IMAGETYPE_GIF => '.gif'];

				if($info === false){
					//no go
					$this->view('home/create', ['error'=>'Bad file format']);
				}
				else if (!array_key_exists($info[2], $allowedTypes)) {
					$this->view('home/create', ['error'=>'Not an accepted file type']);
				}
				else{
					$path = getcwd().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR;
					$filename = uniqid().$allowedTypes[$info[2]];
					move_uploaded_file($_FILES['newPicture']['tmp_name'], $path.$filename);
					
					if(isset($_POST['action'])){
						$newCampingSpot = $this->model('Camping_spot');
						$newCampingSpot->campground_id = $_POST['campground_id'];
						$newCampingSpot->description = $_POST['description'];
						$newCampingSpot->image = $filename;
						$newCampingSpot->price = $_POST['price'];
						$newCampingSpot->availability = $_POST['availability'];
						$newCampingSpot->spot_number = $_POST['spot_number'];

						$newCampingSpot->create();

						header('location:/Camping/home/index');
					}
					else{
						$this->view('home/create');
					}

				}
			}
			else if  (isset($_FILES['newPicture']) && !is_uploaded_file($_FILES['newPicture']['temp_name'])) {
				if(isset($_POST['action'])){
						$newCampingSpot = $this->model('Camping_spot');
						$newCampingSpot->campground_id = $_POST['campground_id'];
						$newCampingSpot->description = $_POST['description'];
						$newCampingSpot->price = $_POST['price'];
						$newCampingSpot->image = "default.png";
						$newCampingSpot->availability = $_POST['availability'];
						$newCampingSpot->spot_number = $_POST['spot_number'];

						$newCampingSpot->create();

						header('location:/Camping/home/index');
					}
				else{
					$this->view('home/create');
				}
			}
			else{
				$this->view('home/create');
			}
		}

		public function detail($camping_spot_id){

			$theCampingSpot = $this->model('Camping_spot')->find($camping_spot_id);

			$this->view('home/detail', $theCampingSpot);
		}

		public function edit($camping_spot_id){

			$theCampingSpot = $this->model('Camping_spot')->find($camping_spot_id);
			
			if(isset($_FILES['newPicture']) && $_FILES['newPicture']['error'] == UPLOAD_ERR_OK){
				$info = getimagesize($_FILES['newPicture']['tmp_name']);
				$allowedTypes = [IMAGETYPE_JPEG => '.jpg', IMAGETYPE_PNG => '.png', IMAGETYPE_GIF => '.gif'];

				if($info === false){
					//no go
					$this->view('home/edit', ['error'=>'Bad file format']);
				}
				else if (!array_key_exists($info[2], $allowedTypes)) {
					$this->view('home/edit', ['error'=>'Not an accepted file type']);
				}
				else{
					$path = getcwd().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR;
					$filename = uniqid().$allowedTypes[$info[2]];
					move_uploaded_file($_FILES['newPicture']['tmp_name'], $path.$filename);
					
					if(isset($_POST['action'])){
						$theCampingSpot->campground_id = $_POST['campground_id'];
						$theCampingSpot->description = $_POST['description'];
						$theCampingSpot->image = $filename;
						$theCampingSpot->price = $_POST['price'];
						$theCampingSpot->availability = $_POST['availability'];
						$theCampingSpot->spot_number = $_POST['spot_number'];

						$theCampingSpot->update();

						header('location:/Camping/home/index');
					}
					else{
						$this->view('home/edit', $theCampingSpot);
					}

				}
			}
			else if  (isset($_FILES['newPicture']) && !is_uploaded_file($_FILES['newPicture']['temp_name'])) {
				if(isset($_POST['action'])){
						$theCampingSpot->campground_id = $_POST['campground_id'];
						$theCampingSpot->description = $_POST['description'];
						$theCampingSpot->price = $_POST['price'];
						$theCampingSpot->availability = $_POST['availability'];
						$theCampingSpot->spot_number = $_POST['spot_number'];

						$theCampingSpot->update();

						header('location:/Camping/home/index');
					}
				else{
					$this->view('home/edit', $theCampingSpot);
				}
			}
			else{
				$this->view('home/edit', $theCampingSpot);
			}
		}

		public function delete($camping_spot_id){
			
			$theCampingSpot = $this->model('Camping_spot')->find($camping_spot_id);
			
			if(isset($_POST['action'])){
				if($theCampingSpot->image !== 'default.png'){
					unlink(getcwd().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$theCampingSpot->image);
				}
				$theCampingSpot->delete();
				header('location:/Camping/home/index');
			}
			else{
				$this->view('home/delete', $theCampingSpot);
			}
		}


	}
	
?>