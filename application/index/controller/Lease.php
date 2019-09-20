<?php
namespace app\index\controller;

use think\Controller;

class Lease extends Controller
{
    public function index()
    {
        $this -> assign([
            'name' => '迈特洗碗机租赁 - MATE ELECTRICAL',
            'bodyClassName' => 'page-16 pagelevel-0 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
            'hasBackPath' => '/index'
        ]);
        return $this->fetch();
    }

    public function search()
    {
        
    }
}
