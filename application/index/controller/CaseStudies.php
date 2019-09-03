<?php
namespace app\index\controller;

use think\Controller;

class CaseStudies extends Controller
{
    public function index()
    {

      $this -> assign([
        'name' => '行业定制解决方案 - MATE ELECTRICAL',
        'bodyClassName' => 'page-16 pagelevel-0 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
        'hasBackPath' => '/'
      ]);
      return $this->fetch();
    }

    public function child()
    {
      $id = request()->route('id');
      $this -> assign([
        'name' => '公司产品调研 - MATE ELECTRICAL',
        'bodyClassName' => 'page-16 pagelevel-0 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
        'hasBackPath' => '/casestudies'
      ]);
      return $this->fetch();
    }
}
