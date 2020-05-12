<?php
/**
	@accessFilter:{LoginFilter}
*/
	class ProductController extends Controller{

		public function index(){
			$products = $this->model('Product')->get();

			$this->view('product/index', ['products'=>$products]);
		}

		public function create(){
			if(isset($_POST['action'])){
				$newProduct = $this->model('Product');
				$newProduct->inventory_id = $_POST['inventory_id'];
				$newProduct->name = $_POST['name'];
				$newProduct->price = $_POST['price'];
				$newProduct->description = $_POST['description'];
				$newProduct->availability = $_POST['availability'];
				$newProduct->create();	

				header('location:/Camping/product/index');
			}
			else{
				$this->view('product/create');
			}
		}

		public function detail($product_id){
			$theProduct = $this->model('Product')->find($product_id);

			$this->view('product/detail', $theProduct);
		}

		public function edit($product_id){
			$theProduct = $this->model('Product')->find($product_id);

			if(isset($_POST['action'])){
				$theProduct->inventory_id = $_POST['inventory_id'];
				$theProduct->name = $_POST['name'];
				$theProduct->price = $_POST['price'];
				$theProduct->description = $_POST['description'];
				$theProduct->availability = $_POST['availability'];

				$theProduct->update();

				header('location:/Camping/product/index');
			}
			else{
				$this->view('product/edit', $theProduct);
			}
		}

		public function delete($product_id){
			$theProduct = $this->model('Product')->find($product_id);
			
			if(isset($_POST['action'])){
				$theProduct->delete();
				header('location:/Camping/product/index');
			}
			else{
				$this->view('product/delete', $theProduct);
			}
		}
	}
?>