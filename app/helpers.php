<?php
use App\Helpers\User;
use App\Helpers\Menu;
use Illuminate\Routing\UrlGenerator;
/*
 * Global helpers file with misc functions
 */

if (! function_exists('app_name')) {
	/**
	 * Grabs the application name
	 *
	 * @return string
	 */
	function app_name()
	{
		return config('mycp.app_name');
	}
}

if (!function_exists('admin_roles')) {
	/**
	 * Grabs the admin role names
	 *
	 * @return array
	 */
	function admin_roles()
	{
		return explode(',', config('mycp.admin_roles'));
	}
}

if (!function_exists('theme_attr')) {
	/**
	 * Grabs the portal theme attr
	 *
	 * @return string
	 */
	function theme_attr($bAttrCheck=true)
	{
		$str = '';
                
		/* Get The theme color */
		$str .= ' theme-' . config('mycp.theme.color');

		/* Get The theme direction */
		/*
		if (is_rtl()) {
			$str .= ' right-to-left main-menu-right';
		}
		*/

		if ($bAttrCheck) {
			/* Is Fixed Navbar */
			if (config('mycp.theme.navbarFixed', false)) {
				$str .= ' main-navbar-fixed';
			}

			/* Is Fixed Menu */
			if (config('mycp.theme.menuFixed', false)) {
				$str .= ' main-menu-fixed';
			}

			/* Is Animated Menu */
			if (config('mycp.theme.menuAnimated', false)) {
				$str .= ' main-menu-animated';
			}
		}
		return $str;
	}
}

if (!function_exists('current_user')) {
	function current_user()
	{
		$oUser = new User();
		return $oUser;
	}
}

if (!function_exists('get_admin_menu')) {
	function get_admin_menu()
	{
		$oMenu = new Menu(env('ADMIN_NAME'));
		return $oMenu->getAdminMenu();
	}
}

if (!function_exists('get_client_menu')) {
	function get_client_menu()
	{
		$oMenu = new Menu(env('CLIENT_NAME'));
		return $oMenu->getClientMenu();
	}
}

if (!function_exists('th_sort')) {
	function th_sort($sText, $sCol, $oResult)
	{
		if (is_null($oResult) || $oResult->isEmpty()) {
			return '<a href="#">'.$sText.'</a>';
		}

		//$sRouteName = Route::currentRouteName();
		//$sUrl =($sRouteName ==null)? '': route($sRouteName);
		$sRouteName=Request::path();
        $sUrl =($sRouteName ==null)? '/': '/'.$sRouteName;

		$aParams = Input::get();
		$aArrow = '';

			$sUrl .= '?';
		if (count($aParams)) {
			foreach ($aParams as $sKey => $sValue) {
				if (!in_array($sKey, ['order', 'sort'])) {
                                    if(!is_array($sValue)){
					$sUrl .= $sKey.'='.$sValue.'&';
                                    }else{
                                        $sUrl .= $sKey.'='.implode(',',$sValue).'&';
                                    }
				}
			}

		}

			$sUrl .= 'order='.$sCol;

			if (isset($aParams['order']) && $aParams['order'] == $sCol) {
				if ($aParams['sort'] == 'ASC') {
					$sSort = 'DESC';
					$aArrow = ' <i class="fa fa-chevron-down"></i>';
				} else {
					$sSort = 'ASC';
					$aArrow = ' <i class="fa fa-chevron-up"></i>';
				}
			} else {
				$sSort = 'desc';
			}

			$sUrl .= '&sort='.$sSort;
		return '<a href="'.$sUrl.'">'.$sText.$aArrow.'</a>';
	}
}


if (!function_exists('contacts_id')) {
	function contacts_id()
	{

		return \Session::get('contacts_id');
	}
}


if (!function_exists('canAccess')) {
	function canAccess($permission)
	{
		/* todo make class static*/
		$cPermission= new \App\Http\Controllers\common\authorization\PermissionController();
		return $cPermission->access($permission);
	}
}
if (!function_exists('pushNotification')) {
	function pushNotification($users,$title,$body)
	{
if(!isset($users->id)){return false;}
		$android_device_id =$users->android_device_id;
		$ios_device_id =$users->ios_device_id;

		if(strlen($android_device_id)>10){
		$androidPushNotification=  \App\Http\Controllers\common\android\PushNotification::send($android_device_id,$title,$body);
		}

		if(strlen($ios_device_id)>10){
			$iosPushNotification=  \App\Http\Controllers\common\ios\PushNotification::send($ios_device_id,$title,$body);
		}


	}
}



//if (!function_exists('getFooterPopularShopMenu')) {
//	function getFooterPopularShopMenu()
//	{
//
//		/* todo make class static*/
//		$oOrders=\App\Models\Order::select(['id',\Illuminate\Support\Facades\DB::raw('count(id) as orderNumber')])->groupBy('shop_id')->orderBy('orderNumber','desc')->limit(5)->get();
//
//		$shopIds=[];
//		foreach ($oOrders as $oOrder) {
//			$shopIds[]=$oOrder->id;
//		}
//
//		$oShops=  \App\Models\Shop::whereIn('id')->limit(5)->get();
//
//		$shops=[];
//		foreach($oShops as $oShop){
//			$shops[$oShop->id]=$oShop->name_en;
//		}
//		dd($shops);
//		return $shops;
//	}
//	getFooterPopularShopMenu();
//}

