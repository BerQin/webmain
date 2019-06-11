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
Route::get('product/:id/[:next]', 'index/Product/child');
Route::get('sales/[:model]/[:data]', 'index/Sales/index');
Route::get('our-company/[:model]', 'index/Aboutus/index');
Route::get('contact-us', 'index/Contactus/index');