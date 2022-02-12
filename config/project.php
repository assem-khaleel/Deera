<?php
/*
  |--------------------------------------------------------------------------
  | Fxwebkit General Config
  |--------------------------------------------------------------------------
  |
  |	* Theme Colors:
  |		default, asphalt, purple-hills,
  |		adminflare, dust, frost, fresh,
  |		silver, clean, white
 */

return [
    'app_name' => env('APP_NAME', 'app'),
   'pagination_size' => env('PAGINATION_SIZE', 25),
'deliver_charge'=>'1',
    'deliver_period'=>'15',
      'senderEmail' => 'm.hashim@mqplanet.com',
    'displayName' => 'Mqplanet',
    'layoutAssetsFolder'=>'elite',


    'adminEmail' => 'mag@mqplanet.com',
    'pagination_size' => env('PAGINATION_SIZE', 25),
    'theme' => [
        'color' => 'default',
        'navbarFixed' => true,
        'menuFixed' => true,
        'menuAnimated' =>true,
    ],



    'adminEmail' => 'manager@fintolog.com',

    'facebookLoginCallback' => 'http://localhost:8000/facebook-callback-login',
    'facebookLoginProvider' => 'facebook',
    'facebookLoginDriver' => 'Facebook',
    'facebookLoginIdentifier' => '134086637144806',
    'facebookLoginApp_id' => '134086637144806',
    'facebookLoginSecret' => '6674265d12c68857fec46db83b6d71ee',
    'EnableFacebookRegister'=>false,
    'facebookLoginScopes' => ['email'],

    'googleCallback' => 'http://localhost:8000/google-callback-login',
    'googleProvider' => 'google',
    'googleDriver' => 'Google',
    'googleIdentifier' => '723816850274-o395qrmm75m7ljpc1r3a65tb7rgg04gp.apps.googleusercontent.com',
    'googleSecret' => 'EMuCoSfKGINQXQpTd--SRdRL',
    'EnableGoogleRegister'=>false,
    'googleScopes' => ['email'],

    'linkedinCallback' => 'http://localhost:8000/linkedin-callback-login',
    'linkedinProvider' => 'linkedin',
    'linkedinDriver' => 'LinkedIn',
    'linkedinIdentifier' => '779y8ism8ovwns',
    'EnableLinkedinRegister'=>false,
    'linkedinSecret' => 'l9paUw3eQJgtYRRV',

    'client_menu' => [


       [
           'route' => 'dashboard.index',
           'title' => 'dashboard',
           'icon' => 'fa fa-dashboard',
           'subMenus' => [

               [
                   'route' => 'dashboard.index',
                   'title' => 'dashboard',
                   'icon' => 'fa fa-dashboard',
               ],
           ]
       ],



       /*_______________________________________________________admin_menu*/


       [
           'route' => 'admin.governorate.index',
           'title' => 'governorate',
           'icon' => 'fa  fa-globe',
           'subMenus' => [

               [
                   'route' => 'admin.governorate.index',
                   'title' => 'governorate',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'admin.governorate.create',
               //     'title' => 'governorateCreate',
               //     'icon' => 'fa fa-gears',
               // ],
               [
                   'route' => 'admin.area.index',
                   'title' => 'area',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.areaReport.main',
                   'title' => 'mainReport',
                   'icon' => 'fa fa-gears',
               ],

               // [
               //     'route' => 'admin.area.create',
               //     'title' => 'areaCreate',
               //     'icon' => 'fa fa-gears',
               // ]
           ]
       ],

//       [
//           'route' => 'admin.area.index',
//           'title' => 'area',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.area.index',
//                   'title' => 'area',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.area.create',
//                   'title' => 'areaCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

       [
           'route' => 'admin.shop.index',
           'title' => 'shop',
           'icon' => 'fa  fa-coffee',
           'subMenus' => [
//               [
//                   'route' => 'admin.cuisine.index',
//                   'title' => 'cuisine',
//                   'icon' => 'fa fa-gears',
//               ],
               [
                   'route' => 'admin.shop.index',
                   'title' => 'shop',
                   'icon' => 'fa fa-gears',
               ],

               [
               'route' => 'admin.shop_users.index',
               'title' => 'shop_users',
               'icon' => 'fa fa-gears',
           ],



//               [
//                   'route' => 'admin.category.index',
//                   'title' => 'category',
//                   'icon' => 'fa fa-gears',
//               ],
//
//               [
//                   'route' => 'admin.delivery_menu.index',
//                   'title' => 'delivery_menu',
//                   'icon' => 'fa fa-gears',
//               ],


//               [
//                   'route' => 'admin.shop_rate.index',
//                   'title' => 'shop_rate',
//                   'icon' => 'fa fa-gears',
//               ],

//               [
//                   'route' => 'admin.shop_cuisine.index',
//                   'title' => 'shop_cuisine',
//                   'icon' => 'fa fa-gears',
//               ],

               [
                   'route' => 'admin.menu_section.index',
                   'title' => 'menu_section',
                   'icon' => 'fa fa-gears',
               ],

               [
                   'route' => 'admin.coffee.index',
                   'title' => 'coffee',
                   'icon' => 'fa fa-gears',
               ],
//               [
//                   'route' => 'admin.coffee.create',
//                   'title' => 'coffeeCreate',
//                   'icon' => 'fa fa-gears',
//               ],
               [
                   'route' => 'admin.shop_area.index',
                   'title' => 'shop_area',
                   'icon' => 'fa fa-gears',
               ],
//               [
//                   'route' => 'admin.shop_area.create',
//                   'title' => 'shop_areaCreate',
//                   'icon' => 'fa fa-gears',
//               ],


               [
                   'route' => 'admin.operation_hour.index',
                   'title' => 'operation_hour',
                   'icon' => 'fa fa-gears',
               ],


           ]
       ],

//       [
//           'route' => 'admin.category.index',
//           'title' => 'category',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.category.index',
//                   'title' => 'category',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.category.create',
//                   'title' => 'categoryCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

//       [
//           'route' => 'admin.cuisine.index',
//           'title' => 'cuisine',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.cuisine.index',
//                   'title' => 'cuisine',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.cuisine.create',
//                   'title' => 'cuisineCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

//       [
//           'route' => 'admin.delivery_menu.index',
//           'title' => 'delivery_menu',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.delivery_menu.index',
//                   'title' => 'delivery_menu',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.delivery_menu.create',
//                   'title' => 'delivery_menuCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

//       [
//           'route' => 'admin.shop_rate.index',
//           'title' => 'shop_rate',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.shop_rate.index',
//                   'title' => 'shop_rate',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.shop_rate.create',
//                   'title' => 'shop_rateCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

//       [
//           'route' => 'admin.shop_cuisine.index',
//           'title' => 'shop_cuisine',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.shop_cuisine.index',
//                   'title' => 'shop_cuisine',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.shop_cuisine.create',
//                   'title' => 'shop_cuisineCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

//       [
//           'route' => 'admin.menu_section.index',
//           'title' => 'menu_section',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.menu_section.index',
//                   'title' => 'menu_section',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.menu_section.create',
//                   'title' => 'menu_sectionCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],
//
//       [
//           'route' => 'admin.coffee.index',
//           'title' => 'coffee',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.coffee.index',
//                   'title' => 'coffee',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.coffee.create',
//                   'title' => 'coffeeCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

//       [
//           'route' => 'admin.coffee_rate.index',
//           'title' => 'coffee_rate',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.coffee_rate.index',
//                   'title' => 'coffee_rate',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.coffee_rate.create',
//                   'title' => 'coffee_rateCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

//       [
//           'route' => 'admin.shop_area.index',
//           'title' => 'shop_area',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.shop_area.index',
//                   'title' => 'shop_area',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.shop_area.create',
//                   'title' => 'shop_areaCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],
//
//       [
//           'route' => 'admin.operation_hour.index',
//           'title' => 'operation_hour',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.operation_hour.index',
//                   'title' => 'operation_hour',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.operation_hour.create',
//                   'title' => 'operation_hourCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

       [
           'route' => 'admin.order.index',
           'title' => 'order',
           'icon' => 'fa  fa-shopping-cart',
           'subMenus' => [

               [
                   'route' => 'admin.order.index',
                   'title' => 'order',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.order.bill',
                   'title' => 'bill',
                   'icon' => 'fa fa-gears',
               ],

               [
                   'route' => 'admin.order.index',
                   'title' => 'todayOrder',
                   'icon' => 'fa fa-gears',
                   'parameter'=>'?deliver_date='.gmdate('Y-m-d'),
               ],
               [
                   'route' => 'admin.order.index',
                   'title' => 'newUsersOrder',
                   'icon' => 'fa fa-gears',
                   'parameter'=>'?order=users_id&sort=DESC',
               ],


               // [
               //     'route' => 'admin.order.create',
               //     'title' => 'orderCreate',
               //     'icon' => 'fa fa-gears',
               // ],

               [
                   'route' => 'admin.cart.index',
                   'title' => 'cart',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'admin.cart.create',
               //     'title' => 'cartCreate',
               //     'icon' => 'fa fa-gears',
               // ] ,
               [
               'route' => 'admin.order_driver.index',
               'title' => 'order_driver',
               'icon' => 'fa fa-gears',
           ],
//           [
//               'route' => 'admin.order_driver.create',
//               'title' => 'order_driverCreate',
//               'icon' => 'fa fa-gears',
//           ],
               [
                   'route' => 'admin.payment.index',
                   'title' => 'payment',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'admin.payment.index',
                   'title' => 'cashPayment',
                   'icon' => 'fa fa-gears',
                   'parameter'=>'?type='.config('array.payment_type_cash_index'),
               ],
               [
                   'route' => 'admin.payment.index',
                   'title' => 'knetPayment',
                   'icon' => 'fa fa-gears',
                   'parameter'=>'?type='.config('array.payment_type_knet_index'),
               ],
               [
                   'route' => 'admin.payment.index',
                   'title' => 'visaPayment',
                   'icon' => 'fa fa-gears',
                   'parameter'=>'?type='.config('array.payment_type_visa_index'),
               ],
               [
                   'route' => 'admin.order.index',
                   'title' => 'todaySchedule',
                   'icon' => 'fa fa-gears',
                   'parameter'=>'?period_type=daily&deliver_type=1&search=Search',
               ],

               [
                   'route' => 'admin.order.index',
                   'title' => 'todayPickup',
                   'icon' => 'fa fa-gears',
                   'parameter'=>'?period_type=daily&deliver_type=2&search=Search',
               ],

               // [
               //     'route' => 'admin.payment.create',
               //     'title' => 'paymentCreate',
               //     'icon' => 'fa fa-gears',
               // ],

               [
                   'route' => 'admin.voucher.index',
                   'title' => 'voucher',
                   'icon' => 'fa fa-gears',
               ],
//               [
//                   'route' => 'admin.payment_way.index',
//                   'title' => 'payment_way',
//                   'icon' => 'fa fa-gears',
//               ],

               [
                   'route' => 'admin.knet.index',
                   'title' => 'knet',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'admin.payment_way.create',
               //     'title' => 'payment_wayCreate',
               //     'icon' => 'fa fa-gears',
               // ]





           ]
       ],

//       [
//           'route' => 'admin.payment.index',
//           'title' => 'payment',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.payment.index',
//                   'title' => 'payment',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.payment.create',
//                   'title' => 'paymentCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

//       [
//           'route' => 'admin.cart.index',
//           'title' => 'cart',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//
//               [
//                   'route' => 'admin.cart.index',
//                   'title' => 'cart',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.cart.create',
//                   'title' => 'cartCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

       [
           'route' => 'admin.address.index',
           'title' => 'address',
           'icon' => 'fa  fa-map-marker',
           'subMenus' => [

               [
                   'route' => 'admin.address.index',
                   'title' => 'address',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'admin.address.create',
               //     'title' => 'addressCreate',
               //     'icon' => 'fa fa-gears',
               // ]
           ]
       ],

//       [
//           'route' => 'admin.order_driver.index',
//           'title' => 'order_driver',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.order_driver.index',
//                   'title' => 'order_driver',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.order_driver.create',
//                   'title' => 'order_driverCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

//       [
//           'route' => 'admin.users.index',
//           'title' => 'users',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.users.index',
//                   'title' => 'users',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.users.create',
//                   'title' => 'usersCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

       [
           'route' => 'admin.service_company.index',
           'title' => 'service_company',
           'icon' => 'fa fa-truck',
           'subMenus' => [

               [
                   'route' => 'admin.service_company_order.index',
                   'title' => 'service_company_order',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'admin.service_company_order.create',
               //     'title' => 'service_company_orderCreate',
               //     'icon' => 'fa fa-gears',
               // ],

               [
                   'route' => 'admin.service_company.index',
                   'title' => 'service_company',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'admin.service_company.create',
               //     'title' => 'service_companyCreate',
               //     'icon' => 'fa fa-gears',
               // ],

               [
                   'route' => 'admin.service_boy.index',
                   'title' => 'service_boy',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'admin.service_boy.create',
               //     'title' => 'service_boyCreate',
               //     'icon' => 'fa fa-gears',
               // ],

               [
                   'route' => 'admin.service.index',
                   'title' => 'service',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'admin.service.create',
               //     'title' => 'serviceCreate',
               //     'icon' => 'fa fa-gears',
               // ]
           ]
       ],

//       [
//           'route' => 'admin.service_boy.index',
//           'title' => 'service_boy',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.service_boy.index',
//                   'title' => 'service_boy',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.service_boy.create',
//                   'title' => 'service_boyCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

//       [
//           'route' => 'admin.service_company_order.index',
//           'title' => 'service_company_order',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.service_company_order.index',
//                   'title' => 'service_company_order',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.service_company_order.create',
//                   'title' => 'service_company_orderCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

       [
           'route' => 'admin.cms.index',
           'title' => 'cms',
           'icon' => 'fa  fa-television',
           'subMenus' => [

               [
                   'route' => 'admin.cms.index',
                   'title' => 'cms_1',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'admin.cms.create',
               //     'title' => 'cmsCreate',
               //     'icon' => 'fa fa-gears',
               // ],
               [
                   'route' => 'admin.contact_us.index',
                   'title' => 'contact_us',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'admin.contact_us.create',
               //     'title' => 'contact_usCreate',
               //     'icon' => 'fa fa-gears',
               // ],

               [
                   'route' => 'admin.banner.index',
                   'title' => 'banner',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'admin.banner.create',
               //     'title' => 'bannerCreate',
               //     'icon' => 'fa fa-gears',
               // ],
               [
                   'route' => 'admin.faq.index',
                   'title' => 'faq',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'admin.faq.create',
               //     'title' => 'faqCreate',
               //     'icon' => 'fa fa-gears',
               // ]
           ]
       ],
//
//       [
//           'route' => 'admin.contact_us.index',
//           'title' => 'contact_us',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.contact_us.index',
//                   'title' => 'contact_us',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.contact_us.create',
//                   'title' => 'contact_usCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

//       [
//           'route' => 'admin.shop_users.index',
//           'title' => 'shop_users',
//           'icon' => 'fa fa-gears',
//           'subMenus' => [
//
//               [
//                   'route' => 'admin.shop_users.index',
//                   'title' => 'shop_users',
//                   'icon' => 'fa fa-gears',
//               ],
//               [
//                   'route' => 'admin.shop_users.create',
//                   'title' => 'shop_usersCreate',
//                   'icon' => 'fa fa-gears',
//               ]
//           ]
//       ],

       [
           'route' => 'admin.audit_track.index',
           'title' => 'audit_track',
           'icon' => 'fa fa-eye',
           'subMenus' => [

               [
                   'route' => 'admin.audit_track.index',
                   'title' => 'audit_track',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'admin.audit_track.create',
               //     'title' => 'audit_trackCreate',
               //     'icon' => 'fa fa-gears',
               // ]
           ]
       ],







        /*______________________________________________aditional pages*/



        [
            'route' => 'admin.offer.index',
            'title' => 'offer',
            'icon' => 'fa fa-tag',
            'subMenus' => [

                [
                    'route' => 'admin.offer.index',
                    'title' => 'offer',
                    'icon' => 'fa fa-gears',
                ],
                // [
                //     'route' => 'admin.offer.create',
                //     'title' => 'offerCreate',
                //     'icon' => 'fa fa-gears',
                // ]
            ]
        ],

        [
            'route' => 'admin.gift_card.index',
            'title' => 'gift_card',
            'icon' => 'fa fa-gift',
            'subMenus' => [

                [
                    'route' => 'admin.gift_card.index',
                    'title' => 'gift_card',
                    'icon' => 'fa fa-gears',
                ],
                // [
                //     'route' => 'admin.gift_card.create',
                //     'title' => 'gift_cardCreate',
                //     'icon' => 'fa fa-gears',
                // ],
                [
                    'route' => 'admin.gift_card_users.index',
                    'title' => 'gift_card_users',
                    'icon' => 'fa fa-gears',
                ],
                // [
                //     'route' => 'admin.gift_card_users.create',
                //     'title' => 'gift_card_usersCreate',
                //     'icon' => 'fa fa-gears',
                // ],

                [
                    'route' => 'admin.gift_card_order.index',
                    'title' => 'gift_card_order',
                    'icon' => 'fa fa-gears',
                ],
                // [
                //     'route' => 'admin.gift_card_order.create',
                //     'title' => 'gift_card_orderCreate',
                //     'icon' => 'fa fa-gears',
                // ]
            ]
        ],



        [
            'route' => 'admin.media.index',
            'title' => 'media',
            'icon' => 'fa fa-file-image-o',
            'subMenus' => [

                [
                    'route' => 'admin.media.index',
                    'title' => 'media',
                    'icon' => 'fa fa-gears',
                ],
                // [
                //     'route' => 'admin.media.create',
                //     'title' => 'mediaCreate',
                //     'icon' => 'fa fa-gears',
                // ]
            ]
        ],

        [
            'route' => 'admin.blog.index',
            'title' => 'blog',
            'icon' => 'fa fa-comments-o ',
            'subMenus' => [

                [
                    'route' => 'admin.blog.index',
                    'title' => 'blog',
                    'icon' => 'fa fa-gears',
                ],
                [
                    'route' => 'admin.blog.create',
                    'title' => 'blogCreate',
                    'icon' => 'fa fa-gears',
                ],
                [
                    'route' => 'admin.blogger.index',
                    'title' => 'blogger',
                    'icon' => 'fa fa-gears',
                ],
                // [
                //     'route' => 'admin.blogger.create',
                //     'title' => 'bloggerCreate',
                //     'icon' => 'fa fa-gears',
                // ]
            ]
        ],

        [
            'route' => 'admin.career.index',
            'title' => 'career',
            'icon' => 'fa fa-briefcase',
            'subMenus' => [

                [
                    'route' => 'admin.career.index',
                    'title' => 'career',
                    'icon' => 'fa fa-gears',
                ],
                // [
                //     'route' => 'admin.career.create',
                //     'title' => 'careerCreate',
                //     'icon' => 'fa fa-gears',
                // ]
            ]
        ],

        [
            'route' => 'admin.catering.index',
            'title' => 'catering',
            'icon' => 'fa fa-cutlery ',
            'subMenus' => [

                [
                    'route' => 'admin.catering.index',
                    'title' => 'catering',
                    'icon' => 'fa fa-gears',
                ],
                // [
                //     'route' => 'admin.catering.create',
                //     'title' => 'cateringCreate',
                //     'icon' => 'fa fa-gears',
                // ]
            ]
        ],


        /*___________________________________________end__aditional*/




       /*____________________________________________________________-end___ admin ____ menu ___*/




       [
           'route' => 'common.email_template.index',
           'title' => 'email_template',
           'icon' => 'fa  fa-envelope-o',
           'subMenus' => [

               [
                   'route' => 'common.email_template.index',
                   'title' => 'email_template',
                   'icon' => 'fa fa-gears',
               ],


               [
                   'route' => 'common.email_mass_template.index',
                   'title' => 'notification',
                   'icon' => 'fa fa-gears',
               ],

//               [
//                   'route' => 'common.email_mass_queue.index',
//                   'title' => 'email_mass_queue',
//                   'icon' => 'fa fa-gears',
//               ],


               [
                   'route' => 'common.email_group.index',
                   'title' => 'group',
                   'icon' => 'fa fa-gears',
               ],



//               [
//                   'route' => 'common.email_group_users.index',
//                   'title' => 'email_group_users',
//                   'icon' => 'fa fa-gears',
//               ],


           ]
       ],





       [
           'route' => 'common.roles.index',
           'title' => 'settings',
           'icon' => 'fa fa-gears',
           'subMenus' => [

               [
                   'route' => 'common.roles.index',
                   'title' => 'rolesList',
                   'icon' => 'fa fa-gears',
               ],
               // [
               //     'route' => 'common.roles.create',
               //     'title' => 'rolesCreate',
               //     'icon' => 'fa fa-gears',
               // ],
               [
                   'route' => 'common.language.translate',
                   'title' => 'language',
                   'icon' => 'fa fa-language',
               ],
           ]
       ],


       [
           'route' => 'common.users.index',
           'title' => 'users',
           'icon' => 'fa fa-users',
           'subMenus' => [

               [
                   'route' => 'common.users.index',
                   'title' => 'users',
                   'icon' => 'fa fa-gears',
               ],
               [
                   'route' => 'common.users.index',
                   'title' => 'newUsers',
                   'icon' => 'fa fa-gears',
                   'parameter'=>'?users_type='.config('array.users_type_registered_index').'&newUsers=1'
               ],
               [
                   'route' => 'common.users.index',
                   'title' => 'bestUsers',
                   'icon' => 'fa fa-gears',
                   'parameter'=>'?bestUser=1'
               ],
               // [
               //     'route' => 'common.users.create',
               //     'title' => 'usersCreate',
               //     'icon' => 'fa fa-gears',
               // ]
           ]
       ],



























   ],




];




























