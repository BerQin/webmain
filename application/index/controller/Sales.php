<?php
namespace app\index\controller;

use think\Controller;

class Sales extends Controller
{
    public function index()
    {
      $id = request()->route('model');

      switch ($id) {
        case 'cleaning-disinfection-technology':
          $this -> assign([
            'name' => '提供清洁解决方案 - MATE ELECTRCAL',
            'bodyClassName' => 'page-12710 pagelevel-2 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
            'hasBackPath' => '/'
          ]);
          return $this->fetch('cleaning-disinfection-technology');
        break;
        case 'what-we-do':
          $this -> assign([
            'name' => '服务协议 - MATE ELECTRCAL',
            'bodyClassName' => 'page-12710 pagelevel-2 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
            'hasBackPath' => '/'
          ]);
          return $this->fetch('wedo');
        break;
        case 'service-contact':
          $this -> assign([
            'name' => '联系我们 - MATE ELECTRCAL',
            'bodyClassName' => 'page-12710 pagelevel-2 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
            'hasBackPath' => '/'
          ]);
          return $this->fetch('service-contact');
        break;
        case 'intimate':
          $this -> assign([
            'name' => '提供清洁解决方案 - MATE ELECTRCAL',
            'bodyClassName' => 'page-12710 pagelevel-2 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
            'hasBackPath' => '/'
          ]);
          return $this->fetch('intimate');
        break;
        case 'mate-sales-partners':
        default:
          $this -> assign([
            'name' => '合作伙伴 - MATE ELECTRCAL',
            'bodyClassName' => 'page-12710 pagelevel-2 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
            'hasBackPath' => '/'
          ]);
          return $this->fetch();
      }
    }
}
