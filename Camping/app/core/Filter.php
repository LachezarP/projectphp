<?php
	class Filter extends Controller{
		public static function itemOwner($params){
			$theItem = self::model('Item')->find($params[0]);
			if($theItem->user_id != $_SESSION['user_id']){
				return '/Camping/home/index';
			}
			else{
					return false;
				}
		}

		public static function LoginFilter($params){
			if($_SESSION['user_id'] == null){
				return '/Camping/login/index';
			}
			else{
				return false;
			}
		}

		public static function AdminFilter($params){
			if($_SESSION['role'] !== 'employee'){
				return '/Camping/User/index';
			}
			else{
				return false;
			}
		}
	}
?>