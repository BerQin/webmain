<?php
namespace app\index\controller;

use think\Controller;

class Contactus extends Controller
{
    public function index()
    {
        $this -> assign([
            'name' => '迈科洗碗机-德国专业清洗消毒技术 - MEIKO',
            'bodyClassName' => 'page-17146 pagelevel-2 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
            'hasBackPath' => '/'
        ]);
        return $this->fetch('/sales/service-contact');
    }
}