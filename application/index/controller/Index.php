<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $this -> assign([
            'name' => '迈科洗碗机-德国专业清洗消毒技术 - MEIKO',
            'bodyClassName' => 'page-16 pagelevel-0 language-4 backendlayout-pagets__home layout-0 theme-default mobilemenu--nopush',
            'hasBackPath' => null
        ]);
        return $this->fetch();
    }
}
