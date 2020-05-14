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

		public function productdetail($product_id){
			$theProduct = $this->model('Product')->find($product_id);

			$this->view('product/productdetail', $theProduct);
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

		public function catalog(){
			$products = $this->model('Product')->getAvailable();

			$this->view('product/catalog', ['products'=>$products]);
		}

		public function addToCart($product_id){
			$cart = $this->model('Orders')->findUserCart($_SESSION['user_id']);
			if ($cart == null) {
				$cart = $this->model('Orders');
				$cart->user_id = $_SESSION['user_id'];
				$cart->date = date('Y/m/d');
				$cart->order_status = 'cart';
				$cart->order_total = 0;
				$cart->order_id = $cart->create();
			}
			$newItem = $this->model('Order_items');
			$newItem->order_id = $cart->order_id;
			$newItem->product_id = $product_id;
			$newItem->price = $this->model('Product')->find($product_id)->price;
			$newItem->qty = 1;
			$cart->order_total = $cart->order_total + $newItem->price;
			$cart->update();
			$newItem->create();

			header('location:/Camping/product/catalog/');
		}

		public function viewCart(){
			$cart = $this->model('Orders')->findUserCart($_SESSION['user_id']);

			if($cart !== false){
				$items = $this->model('Order_items')->findForOrder($cart->order_id);
				$this->view('product/cart', $items);
			}
			else{
				$cart = $this->model('Orders');
				$cart->user_id = $_SESSION['user_id'];
				$cart->date = date('Y/m/d');
				$cart->order_status = 'cart';
				$cart->order_total = 0;
				$cart->order_id = $cart->create();

				$this->view('product/cart');
			}
		}

		public function removeFromCart($order_items_id){
			$item = $this->model('Order_items')->find($order_items_id);
			$order = $this->model('Orders')->find($item->order_id);

			$order->order_total = $order->order_total - ($item->price * $item->qty);
			$order->update();

			if($order->user_id == $_SESSION['user_id']) {
				$item->delete();
			}
			header('location:/Camping/product/viewCart');
		}

		public function checkout(){
			$cart = $this->model('Orders')->findUserCart($_SESSION['user_id']);

			$cart->order_status = 'paid';
			$cart->update();

			header('location:/Camping/product/catalog');
		}
	}
?>