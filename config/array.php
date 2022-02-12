<?php
return [
    'days' => [
        0 => 'sunday',
        1 => 'monday',
        2 => 'tuesday',
        3 => 'wednesday',
        4 => 'thursday',
        5 => 'friday',
        6 => 'saturday',
    ],
    'rate' => [
        0 => 0,
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
    ],
    'payment_type' => [
        0 => 'cash',
        1 => 'knet',
        2 => 'visa',
        3=>'Voucher Code',
    ],
    'payment_type_cash_index'=>0,
    'payment_type_knet_index'=>1,
    'payment_type_visa_index'=>2,
    'payment_type_voucher_index'=>3,

    'address_type' => ['appartment', 'house', 'Office'],
    'address_default' => ['no', 'yes'],
    'address_notification' => ['yes', 'no'],
    'banner_status' => ['show', 'hide'],
    'banner_status_show_index' => 0,
    'banner_status_hide_index' => 1,
    'banner_type'=>['home banner','advertisement','inner banner','home Main Advertise Slide','home bottom Advertise','Shop List Top Banner'],
    'banner_type_home_banner_index'=>0,
    'banner_type_advertisement_index'=>1,
    'banner_type_inner_banner_index'=>2,
    'banner_type_home_adv_slide_index'=>3,
    'banner_type_bottom_adv_index'=>4,
    'banner_type_shop_list_index'=>5,

    'cuisine_status' => ['show', 'hide'],
    'cuisine_status_show_index' => 0,
    'cuisine_status_hide_index' => 1,
    'delivery_menu_status' => ['show', 'hide'],
    'coffee_status' => ['available', 'not available'],
    'coffee_status_available_index'=>0,
    'coffee_status_not_available_index'=>1,

    'coffee_rate_status' => ['pending', 'accepted', 'reject'],

    'coffee_rate_status_pending_index' => 0,
    'coffee_rate_status_accepted_index' => 1,
    'coffee_rate_status_rejected_index' => 2,


    'coffee_rate_notification' => ['yes', 'no'],
    'menu_section_status' => ['show', 'hide'],
    'order_status_color' => ['#e4e7ea', '#00c292', '#00c292', '#a198e7', '#e798aa', '#fec107','#1E2032','#b59778'],


    /* \admin\order\EloquentOrderRepository.php TODO 1 (statistic) -  when you add new status for order just add it here if it's complete or in progress */

    /* Controllers\admin\order_driver\OrderDriver.php TODO 1 (getDispatcherMap)-  if the status is need to be assign to driver or need to display for dispatcher add status here*/

    /* Controllers\admin\order_driver\OrderDriver.php TODO 2 -  if the status no running or current with driver add status here*/
    'order_status' => [0=>'pending',1=> 'paid',2=> 'delivered', 3=>'delivering', 4=>'reject', 5=>'delay',6=>'Placed',7=>'ready'],
    'order_status_pending_index' => 0,
    'order_status_payed_index' => 1,
    'order_status_delivered_index' => 2,
    'order_status_delivering_index' => 3,
    'order_status_reject_index' => 4,
    'order_status_delay_index' => 5,
    'order_status_preparing_index' => 6,
    'order_status_ready_index' => 7,



    'order_notification' => ['yes', 'no'],
    'order_driver_status' => ['pending', 'accepted', 'rejected', 'delay'],
    'order_driver_notification' => ['yes', 'no'],
    'payment_notification' => ['yes', 'no'],
    'shop_area_status' => ['open', 'close'],
    'shop_rate_status' => ['pending', 'accepted', 'rejected'],
    'shop_rate_status_pending_index' => 0,
    'shop_rate_status_accepted_index' => 1,
    'shop_rate_status_rejected_index' => 2,

    'shop_rate_notification' => ['yes', 'noe'],
    'service_boy_status' => ['online', 'offline'],
    'service_company_order_status' => ['pending', 'accepted', 'rejected', 'completed', 'delay'],
    'service_company_order_status_pending_index' => 0,
    'service_company_order_status_accepted_index' => 1,
    'service_company_order_status_rejected_index' => 2,
    'service_company_order_status_completed_index' => 3,
    'service_company_order_status_delay_index' => 4,
    'service_company_order_notification' => ['yes', 'no'],
    'users_mobile_company' => ['zain', 'ooredoo', 'viva'],
    'users_gender' => ['male', 'female'],
    'users_occupation' => ['employee', 'self-employee', 'other'],
    'shop_status' => ['pending', 'open', 'close','busy'],
    'shop_status_pending_index' => 0,
    'shop_status_open_index' => 1,
    'shop_status_close_index' => 2,
    'shop_status_busy_index' => 3,
    'shop_available_payment' => [    0 => 'cash',
        1 => 'knet',
        2 => 'visa'],
    'shop_offline_order' => ['disable', 'enable'],
    'shop_offline_order_enable_index' =>1,


    'shop_commission_type' => ['fixed', 'percentage'],
    'shop_discount_type' => ['fixed', 'percentage'],
    'shop_discount_type_fixed_index' => 0,
    'shop_discount_type_percentage_index' => 1,
    'gift_card_discount_type'=> ['fixed', 'percentage'],
    'gift_card_discount_type_fixed_index' => 0,
    'gift_card_discount_type_percentage_index' => 1,

    'gift_card_users_status'=>['pending','sent','completed'],
    'gift_card_users_status_pending_index'=>0,
    'gift_card_users_status_sent_index'=>1,
    'gift_card_users_status_completed_index'=>2,
    'gift_card_users_status_users_have_index'=>[0,2],

    'shop_follow_us' => ['yes', 'no'],
    'shop_notification' => ['yes', 'no'],

    'shop_deliver_type' =>[''=>'both',1=>'deliver',2=>'pickup'],
    'shop_deliver_type_both_index'=>0,
    'shop_deliver_type_deliver_index'=>1,
    'shop_deliver_type_pickup_index'=>2,

    'payment_status' => ['pending', 'canceled', 'completed'],
    'payment_status_pending_index' => 0,
    'payment_status_canceled_index' => 1,
    'payment_status_completed_index' => 2,
    'payment_type' => [    0 => 'cash',
        1 => 'knet',
        2 => 'visa'],
    'delivery_menu_status' => ['hide', 'show'],
    'banner_status' => ['enable', 'disable'],
    'banner_status_enable_index' => 0,
    'cuisine_status' => ['show', 'hide'],
    'cuisine_status_show_index' => 0,
    'cuisine_status_hide_index' => 1,
    'order_driver_status' => ['pending', 'assigned', 'reject_by_driver', 'deliverd'],
    'order_driver_status_pending_index' => 0,
    'order_driver_status_assigned_index' => 1,
    'order_driver_status_reject_index' => 2,
    'order_driver_status_deliverd_index' => 3,
    'users_gender' => ['male', 'female'],
    'shop_users_status' => ['online', 'offline'],
    'shop_users_type' => ['admin', 'call Center', 'service', 'dispatcher', 'driver', 'review comments'],
    'shop_users_type_driver_index' => 4,
    'users_type' => [0 => 'registered', 1 => 'guest'],
    'users_type_registered_index' => 0,
    'users_type_guest_index' => 1,
    'category_status' => [
        0 => 'active',
        1 => 'not active',
        2 => 'deleted'

    ],
    'category_place' => [
        0 => 'None',
        1 => 'top',
        2 => 'bottom'

    ],
    'product_option_option'=>[0=>'size',1=>'Add Ons'],
    'product_option_option_size_index'=>0,
    'product_option_option_additional_index'=>1,

   'catering_status'=>[ 'new','in process','approved','reject','cancel'],
    'payment_way_list'=>[
        0=>'cash on delivery',
        1=>'knet',
        2=>'Visa, Master',
    ],
    'users_blogger'=>[
        0=>'no',
        1=>'Become Bloger Request',
        2=>'completed'
    ],
    'users_blogger_no_index'=>0,
    'users_blogger_request_index'=>1,
    'users_blogger_completed_index'=>2,

'blogger_status'=>[0=>'pendding',1=>'approved'],
    'blogger_status_pending_index'=>0,
    'blogger_status_approved_index'=>1,

    'voucher_type'=> ['fixed','percentage' ],
    'voucher_type_fixed_index' => 0,
    'voucher_type_percentage_index' => 1,

    'voucher_status'=>['not active','active'],
    'voucher_status_not_active_index'=>0,
    'voucher_status_active_index'=>1,

    'extensions'=>['doc','docx','pdf','php'],
];