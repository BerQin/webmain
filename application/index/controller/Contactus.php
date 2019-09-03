<?php
namespace app\index\controller;

use think\Controller;

class Contactus extends Controller
{
    public function index()
    {
        $this -> assign([
            'name' => '迈特洗碗机-中国制造 - MATE ELECTRICAL',
            'bodyClassName' => 'page-17146 pagelevel-2 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
            'hasBackPath' => '/'
        ]);
        return $this->fetch('/sales/service-contact');
    }
}