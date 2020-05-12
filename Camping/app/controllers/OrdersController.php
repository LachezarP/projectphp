<?php
/**
	@accessFilter:{LoginFilter}
*/
	class OrdersController extends Controller{

		public function index(){
			$products = $this->model('Orders')->get();

			$this->view('orders/index', ['orders'=>$products]);
		}

		public function sales(){
			$products = $this->model('Order_items')->getSales();

			$this->view('orders/sales', ['products'=>$products]);
		}

		public function confirmShipping($order_id){
			$products = $this->model('Order_items')->findForOrder($order_id);

			$this->view('orders/shipping', ['orders'=>$products]);
		}

		public function setAsShipped($order_id){
			$theOrder = $this->model('Orders')->find($order_id);

			var_dump($theOrder);

			$theOrder->order_status = 'shipped';
			$theOrder->update();

			header('location:/Camping/orders/index');
		}
	}
?>