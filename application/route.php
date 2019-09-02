<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use \think\Route;

Route::get('casestudies', 'index/CaseStudies/index');
Route::get('casestudie/:id', 'index/CaseStudies/child');
Route::get('products', 'index/Product/index');
Route::get('product', 'index/Product/child');
Route::get('detail/:id/[:next]', 'index/Product/detail');
Route::get('sales/[:model]/[:data]', 'index/Sales/index');
Route::get('our-company/[:model]', 'index/Aboutus/index');
Route::get('contact-us', 'index/Contactus/index');
Route::get('search', 'index/Index/search');
// Route::get('websiteowner', 'index/Aboutus/websiteowner');
// Route::get('disclaimer', 'index/Aboutus/disclaimer');
// Route::get('dataprivacy', 'index/Aboutus/dataprivacy');