<?php
/**
	@accessFilter:{LoginFilter}
*/
	class ContactController extends Controller{

		public function index(){
			$contacts = $this->model('Contact')->get();

			$this->view('contact/index', ['contacts'=>$contacts]);
		}

		public function contact_info($contact_id){
			$contacts = $this->model('Contact')->getFromContactId($contact_id);

			$this->view('contact/detail', $contacts);
		}
	}
?>