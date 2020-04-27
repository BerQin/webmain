<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $this -> assign([
            'name' => '广州迈特洗碗机-全自动洗碗机_大型洗碗机流水线厂家_洗碗机租赁',
            'bodyClassName' => 'page-16 pagelevel-0 language-4 backendlayout-pagets__home layout-0 theme-default mobilemenu--nopush',
            'hasBackPath' => null
        ]);
        return $this->fetch();
    }

    public function search()
    {
        
    }
}
