<?php
	class ProfileController extends Controller{
		public function index(){
				$theUser = $this->model('Profile')->findUser($_SESSION["user_id"]);
				if($theUser != null){
						$profiles = $this->model('Profile')->get();
						$this->view('profile/index', ['profiles'=>$profiles]);
				}
				else{
					header('location:/Camping/profile/createAddress');
				}
		}

		public function profile_info(){
			$profiles = $this->model('Profile')->getFromContactId();

			$this->view('profile/detail', $profiles);
		}

		public function create($address_id){
			if(isset($_POST['action'])){
				$newContact = $this->model('Profile');
				$newContact->user_id = $_SESSION['user_id'];
				$newContact->address_id = $address_id;
				$newContact->first_name = $_POST['first_name'];
				$newContact->last_name = $_POST['last_name'];
				$newContact->phone_number = $_POST['phone_number'];
				$newContact->email = $_POST['email'];
				$newContact->createContact();	

				header('location:/Camping/profile/index');
			}
			else{
				$this->view('profile/create');
			}
		}
		
		public function createAddress(){
			if(isset($_POST['action'])){
				$newAddress = $this->model('Profile');
				$newAddress->user_id = $_SESSION['user_id'];
				$newAddress->country = $_POST['country'];
				$newAddress->city = $_POST['city'];
				$newAddress->street = $_POST['street'];
				$newAddress->postal_code = $_POST['postal_code'];
				$newAddress->province = $_POST['province'];
				$addressid = $newAddress->createAddress();


				var_dump($addressid);
				header('location:/Camping/profile/create/' . $addressid);
			}
			else{
				$this->view('profile/createAddress');
			}
		}

		public function edit($user_id){
			$theContact = $this->model('Profile')->findUser($user_id);

			if(isset($_POST['action'])){
				$theContact->user_id = $_SESSION['user_id'];
				$theContact->first_name = $_POST['first_name'];
				$theContact->last_name = $_POST['last_name'];
				$theContact->phone_number = $_POST['phone_number'];
				$theContact->email = $_POST['email'];

				$theContact->update();

				header('location:/Camping/profile/index');
			}
			else{
				$this->view('profile/edit', $theContact);
			}
		}

		public function editAddress($user_id){
			$theAddress = $this->model('Profile')->findUser($user_id);

			if(isset($_POST['action'])){
				$theAddress->user_id = $_SESSION['user_id'];
				$theAddress->country = $_POST['country'];
				$theAddress->city = $_POST['city'];
				$theAddress->street = $_POST['street'];
				$theAddress->postal_code = $_POST['postal_code'];
				$theAddress->province = $_POST['province'];

				$theAddress->updateAddress();

				header('location:/Camping/profile/index');
			}
			else{
				$this->view('profile/editAddress', $theAddress);
			}
		}

	}
?>
