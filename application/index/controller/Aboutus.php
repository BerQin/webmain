<?php
namespace app\index\controller;

use think\Controller;

class Aboutus extends Controller
{
    public function index()
    {
      $id = request()->route('model');

      switch ($id) {
        case 'information-for-applicants':
          $this -> assign([
            'name' => '提供清洁解决方案 - MATE ELECTRCAL',
            'bodyClassName' => 'page-12749 pagelevel-3 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
            'hasBackPath' => '/'
          ]);
          return $this->fetch('information-for-applicants');
        case 'career-jobs':
          $this -> assign([
            'name' => '信息招聘 - MATE ELECTRCAL',
            'bodyClassName' => 'page-12749 pagelevel-3 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
            'hasBackPath' => '/'
          ]);
          return $this->fetch('career-jobs');
        break;
        case 'the-discovery-of-cleanliness':
          $this -> assign([
            'name' => '提供清洁解决方案 - MATE ELECTRCAL',
            'bodyClassName' => 'page-25273 pagelevel-2 language-4 backendlayout-pagets__followup layout-0 theme-default mobilemenu--nopush',
            'hasBackPath' => '/'
          ]);
          return $this->fetch('the-discovery-of-cleanliness');
        break;
        case 'awards-prices':
          $this -> assign([
            'name' => '我们的荣誉 - MATE ELECTRCAL',
            'bodyClassName' => 'page-12710 pagelevel-2 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
            'hasBackPath' => '/'
          ]);
          return $this->fetch('awards-prices');
        break;
        default:
          $this -> assign([
            'name' => '公司介绍 - MATE ELECTRCAL',
            'bodyClassName' => 'page-12710 pagelevel-2 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
            'hasBackPath' => '/'
          ]);
          return $this->fetch();
      }
    }
}