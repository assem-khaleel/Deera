<?php




//Route::get('car',function(){return 'hello world';});

require_once __DIR__ . "/Routes/common/files.php";

require_once __DIR__ . "/Routes/common/authentication.php";

require_once __DIR__ . "/Routes/common/Dashboard.php";
require_once __DIR__ . "/Routes/common/email.php";
require_once __DIR__ . "/Routes/common/authorization.php";
require_once __DIR__ . "/Routes/common/language.php";

require_once __DIR__ . "/Routes/common/users.php";
require_once __DIR__ . "/Routes/common/json.php";
//dd(route('common.json.jsonFromUrl'));

require_once __DIR__ . "/Routes/website/Dashboard.php";
require_once __DIR__ . "/Routes/website/shop.php";
require_once __DIR__ . "/Routes/website/users.php";
require_once __DIR__ . "/Routes/website/address.php";
require_once __DIR__ . "/Routes/website/contact_us.php";
require_once __DIR__ . "/Routes/website/cart.php";
require_once __DIR__ . "/Routes/website/shop_rate.php";
require_once __DIR__ . "/Routes/website/coffee_rate.php";
require_once __DIR__ . "/Routes/website/product_option.php";
require_once __DIR__ . "/Routes/website/blogger.php";

require_once __DIR__ . "/Routes/website/offer.php";
require_once __DIR__ . "/Routes/website/blog.php";
require_once __DIR__ . "/Routes/website/gift_card.php";
require_once __DIR__ . "/Routes/website/gift_card_order.php";
require_once __DIR__ . "/Routes/website/gift_card_users.php";
require_once __DIR__ . "/Routes/website/career.php";
require_once __DIR__ . "/Routes/website/catering.php";
require_once __DIR__ . "/Routes/website/media.php";
require_once __DIR__ . "/Routes/website/faq.php";
require_once __DIR__ . "/Routes/website/payment_way.php";
require_once __DIR__ . "/Routes/website/voucher.php";

require_once __DIR__ . "/Routes/admin/cashondelivery.php";
require_once __DIR__ . "/Routes/admin/governorate.php";
require_once __DIR__ . "/Routes/admin/cms.php";
require_once __DIR__ . "/Routes/admin/address.php";
require_once __DIR__ . "/Routes/admin/area.php";
require_once __DIR__ . "/Routes/admin/audit_track.php";
require_once __DIR__ . "/Routes/admin/cart.php";
require_once __DIR__ . "/Routes/admin/category.php";
require_once __DIR__ . "/Routes/admin/contact_us.php";
require_once __DIR__ . "/Routes/admin/cuisine.php";
require_once __DIR__ . "/Routes/admin/delivery_menu.php";
require_once __DIR__ . "/Routes/admin/coffee.php";
require_once __DIR__ . "/Routes/admin/coffee_rate.php";
require_once __DIR__ . "/Routes/admin/menu_section.php";
require_once __DIR__ . "/Routes/admin/operation_hour.php";
require_once __DIR__ . "/Routes/admin/order.php";
require_once __DIR__ . "/Routes/admin/order_driver.php";
require_once __DIR__ . "/Routes/admin/payment.php";
require_once __DIR__ . "/Routes/admin/service_company_order.php";
require_once __DIR__ . "/Routes/admin/service_company.php";
require_once __DIR__ . "/Routes/admin/service_boy.php";
require_once __DIR__ . "/Routes/admin/shop_users.php";
require_once __DIR__ . "/Routes/admin/shop_rate.php";
require_once __DIR__ . "/Routes/admin/shop_cuisine.php";
require_once __DIR__ . "/Routes/admin/shop_area.php";
require_once __DIR__ . "/Routes/admin/shop.php";
require_once __DIR__ . "/Routes/admin/banner.php";
require_once __DIR__ . "/Routes/admin/service.php";
require_once __DIR__ . "/Routes/admin/product_option.php";
require_once __DIR__ . "/Routes/admin/offer.php";
require_once __DIR__ . "/Routes/admin/blog.php";
require_once __DIR__ . "/Routes/admin/gift_card.php";
require_once __DIR__ . "/Routes/admin/gift_card_order.php";
require_once __DIR__ . "/Routes/admin/gift_card_users.php";
require_once __DIR__ . "/Routes/admin/career.php";
require_once __DIR__ . "/Routes/admin/catering.php";
require_once __DIR__ . "/Routes/admin/media.php";
require_once __DIR__ . "/Routes/admin/faq.php";
require_once __DIR__ . "/Routes/admin/payment_way.php";
require_once __DIR__ . "/Routes/admin/blogger.php";
require_once __DIR__ . "/Routes/admin/voucher.php";
require_once __DIR__ . "/Routes/admin/knet.php";
require_once __DIR__ . "/Routes/admin/voucher_users.php";


require_once __DIR__ . "/Routes/website/cms.php";


//Event::listen('illuminate.query', function($query)
//{
//    print_r($query);
//    echo '<br><br><br>
//';
//});

