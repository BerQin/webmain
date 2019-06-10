<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $this -> assign([
            'name' => '迈科洗碗机-德国专业清洗消毒技术 - MEIKO',
            'hasBackPath' => null
        ]);
        return $this->fetch();
    }
}
