<?php
namespace app\index\controller;

use think\Controller;

class CaseStudies extends Controller
{
    public function index()
    {

      $this -> assign([
        'name' => '行业定制解决方案 - MEIKO',
        'hasBackPath' => '/'
      ]);
      return $this->fetch();
    }
}
