<?php
namespace app\index\controller;

use think\Controller;

class Product extends Controller
{
    public function index()
    {
        $this -> assign([
            'name' => '迈特洗碗机-中国制造 - MATE ELECTRICAL',
            'bodyClassName' => 'page-17146 pagelevel-2 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
            'hasBackPath' => '/'
        ]);
        return $this->fetch();
    }

    public function child()
    {
        $list = Array(
            array(
            'path' => '/assets/image/chanp/hongganji.jpg',
            'xnpath' => '/assets/image/chanp/hongganji-xn.png',
            'name' => '烘干机',
            'doc' => '餐具所选材料的种类很多，与陶瓷餐具相比，不锈钢和密胺等餐具不易保存热量，导致餐具干燥时间过长，影响餐具的卫生效果。因此加装烘干机是保障餐具消毒，以及加快餐具周转的最佳选择。',
            'linkto' => '/detail/hongganji'
            ),
            array(
            'path' => '/assets/image/chanp/jiegai-DUN-G1.jpg',
            'xnpath' => '/assets/image/chanp/jiegai-DUN-G1-xn.png',
            'name' => '揭盖机DUN-G1',
            'doc' => '操作简单，除开/关机外无仼何按钮需要操作，降低人员培训需要,门控开关，关门即洗，操作方便,轻便开关门设计，切实降低劳动强度,机电控制，经济耐用，降低维修成本,自动压力调整，保证水压不稳定环境下同样出色的洗涤效果,一体成型拉伸水箱，边缘圆角设计，无藏污纳垢的卫生死角,冼室和水箱內无复杂管路，最简化内部设计，使日常清洁简单方便,Nozzle fan专利喷嘴，用水效率更高,前置控制板，高亮LED温度显示，洗涤、喷淋温度一目了然,大容量水箱设计，保证高品质清洗效果，降低换水需要,水箱加热管自带过热保护，防止干烧带来的安全隐患,喷淋缸外附加高效隔热保温材料，減少热量损耗,两片式超大过滤网底板，可全部拆下清洗，方便卫生,预接常用连接管线及配件，简化安装过程,整机正面可维修，无需移动机器，维护保养快捷方便。
            ',
            'linkto' => '/detail/jiegai-DUN-G1'
            ),
            array(
            'path' => '/assets/image/chanp/lankuangji-D103.jpg',
            'xnpath' => '/assets/image/chanp/lankuangji-D103-xn.png',
            'name' => '篮筐机D103',
            'doc' => '每小时最大洗涤量为200筐,所有部件（水箱、加热包、淸洗臂、漂洗臂等）都采用304不锈钢材质，保证长时间运行质量,所有配件都易于拆卸和清冼,自动启动/停止，进一步降低机器运行成本,一体式上罩设计，防止水溅出,多种适用范围，热水冷水均可使用。',
            'linkto' => '/detail/lankuangji-D103'
            ),
            array(
            'path' => '/assets/image/chanp/lankuangji-D203.jpg',
            'xnpath' => '/assets/image/chanp/lankuangji-D203-xn.png',
            'name' => '篮筐机D203',
            'doc' => '餐具所选材料的种类很多，与陶瓷餐具相比，不锈钢和密胺等餐具不易保存热量，导致餐具干燥时间过长，影响餐具的卫生效果。因此加装烘干机是保障餐具消毒，以及加快餐具周转的最佳选择。',
            'linkto' => '/detail/lankuangji-D203'
            ),
            array(
            'path' => '/assets/image/chanp/ludaishi-DUN-L3K30.jpg',
            'xnpath' => '/assets/image/chanp/ludaishi-DUN-L3K30-xn.png',
            'name' => '履带式洗碗机DUN-L3K30',
            'doc' => '高效的烘干机及风刀配置，保证洗涤效果,独特的环绕喷淋设计，使水幕分布更加均勻，保证洗涤效果的同时，实现20%的能耗节约,机械式按扭设计，操作简单方便,灵活的模块组合设计，可根据现场的空间尺寸来选择合适的型号,可靠的履带式传送系统配有自动过载保护裝置，碗碟、餐盘可直接放于履带上，无需分类,装筐和将筐推进洗碗机，大大降低劳动强度，同时减少了工作时间,门有双重保护，内置卷簧及门挂钩，保证操作者安全,基于人体工程学的操作高度，使操作人员轻松裝卸餐具，降低劳动强度,出入口配备启动停止/紧停开关装置，方便操作人员控制机器的运行,出口端装有限位开关，防止餐具因未及时卸载而造成破损。',
            'linkto' => '/detail/ludaishi-DUN-L3K30'
            ),
            array(
            'path' => '/assets/image/chanp/ludaishi-DUN-L6K68.jpg',
            'xnpath' => '/assets/image/chanp/ludaishi-DUN-L6K68-xn.png',
            'name' => '履带式洗碗机DUN-L6K68',
            'doc' => '高效的烘干机及风刀配置，保证洗涤效果,独特的环绕喷淋设计，使水幕分布更加均勻，保证洗涤效果的同时，实现20%的能耗节约,机械式按扭设计，操作简单方便,灵活的模块组合设计，可根据现场的空间尺寸来选择合适的型号,可靠的履带式传送系统配有自动过载保护裝置，碗碟、餐盘可直接放于履带上，无需分类,装筐和将筐推进洗碗机，大大降低劳动强度，同时减少了工作时间,门有双重保护，内置卷簧及门挂钩，保证操作者安全,基于人体工程学的操作高度，使操作人员轻松裝卸餐具，降低劳动强度,出入口配备启动停止/紧停开关装置，方便操作人员控制机器的运行,出口端装有限位开关，防止餐具因未及时卸载而造成破损。
            ',
            'linkto' => '/detail/ludaishi-DUN-L6K68'
            ),
            array(
            'path' => '/assets/image/chanp/ludaishi-DUN-L7K78.jpg',
            'xnpath' => '/assets/image/chanp/ludaishi-DUN-L7K78-xn.png',
            'name' => '履带式洗碗机DUN-L7K78',
            'doc' => '高效的烘干机及风刀配置，保证洗涤效果,独特的环绕喷淋设计，使水幕分布更加均勻，保证洗涤效果的同时，实现20%的能耗节约,机械式按扭设计，操作简单方便,灵活的模块组合设计，可根据现场的空间尺寸来选择合适的型号,可靠的履带式传送系统配有自动过载保护裝置，碗碟、餐盘可直接放于履带上，无需分类,装筐和将筐推进洗碗机，大大降低劳动强度，同时减少了工作时间,门有双重保护，内置卷簧及门挂钩，保证操作者安全,基于人体工程学的操作高度，使操作人员轻松裝卸餐具，降低劳动强度,出入口配备启动停止/紧停开关装置，方便操作人员控制机器的运行,出口端装有限位开关，防止餐具因未及时卸载而造成破损。',
            'linkto' => '/detail/ludaishi-DUN-L7K78'
            ),
            array(
            'path' => '/assets/image/chanp/minicl-DUN-L1K20.jpg',
            'xnpath' => '/assets/image/chanp/minicl-DUN-L1K20-xn.png',
            'name' => '迷你长龙机',
            'doc' => '高效的烘干机及风刀配置，保证洗涤效果,独特的环绕喷淋设计，使水幕分布更加均勻，保证洗涤效果的同时，实现20%的能耗节约,机械式按扭设计，操作简单方便,灵活的模块组合设计，可根据现场的空间尺寸来选择合适的型号,可靠的履带式传送系统配有自动过载保护裝置，碗碟、餐盘可直接放于履带上，无需分类,装筐和将筐推进洗碗机，大大降低劳动强度，同时减少了工作时间,门有双重保护，内置卷簧及门挂钩，保证操作者安全,基于人体工程学的操作高度，使操作人员轻松裝卸餐具，降低劳动强度,出入口配备启动停止/紧停开关装置，方便操作人员控制机器的运行,出口端装有限位开关，防止餐具因未及时卸载而造成破损。
            ',
            'linkto' => '/detail/minicl-DUN-L1K20'
            ),
            array(
            'path' => '/assets/image/chanp/peitao.jpg',
            'xnpath' => '',
            'imgspath' => Array(
                '/assets/image/chanp/peitao-1.jpg',
                '/assets/image/chanp/peitao-2.jpg',
                '/assets/image/chanp/peitao-3.jpg',
                '/assets/image/chanp/peitao-4.jpg',
                '/assets/image/chanp/peitao-5.jpg',
                '/assets/image/chanp/peitao-6.jpg',
                '/assets/image/chanp/peitao-7.jpg'
            ),
            'name' => '配套设备',
            'doc' => '通过适当的优化和自动化配置使成本最小化，即使在复杂的环境条件下，也能够有效地将洗涤流程并入到现有生产流程中,，营造一个高效率的工作环境，，并提高卫生水平。，使用双轴圆条传送带回收参悟餐具，清洁卫生，便于维护，非常适合用于回收脏污餐具。，爬坡和下降，适合各种复杂的空间，满足复杂的传送需求。，转弯传送，双轴圆条传送带能够以任意角度转弯。
            ',
            'linkto' => '/detail/peitao'
            )
        );
        $this -> assign([
        'name' => '公司产品调研 - MATE ELECTRICAL',
        'bodyClassName' => 'page-17146 pagelevel-2 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
        'hasBackPath' => '/products',
        'list' => $list
        ]);
        return $this->fetch();
    }

    public function detail() {
      $id = request()->route('id');
      $list = array(
        'hongganji' => array(
        'path' => '/assets/image/chanp/hongganji.jpg',
        'xnpath' => '/assets/image/chanp/hongganji-xn.png',
        'name' => '烘干机',
        'doc' => '餐具所选材料的种类很多，与陶瓷餐具相比，不锈钢和密胺等餐具不易保存热量，导致餐具干燥时间过长，影响餐具的卫生效果。因此加装烘干机是保障餐具消毒，以及加快餐具周转的最佳选择。
        ',
        'linkto' => '/detail/hongganji'
        ),
        'jiegai-DUN-G1' => array(
        'path' => '/assets/image/chanp/jiegai-DUN-G1.jpg',
        'xnpath' => '/assets/image/chanp/jiegai-DUN-G1-xn.png',
        'name' => '揭盖机DUN-G1',
        'doc' => '· 操作简单，除开/关机外无仼何按钮需要操作，降低人员培训需要<br>
        · 门控开关，关门即洗，操作方便<br>
        · 轻便开关门设计，切实降低劳动强度<br>
        · 机电控制，经济耐用，降低维修成本<br>
        · 自动压力调整，保证水压不稳定环境下同样出色的洗涤效果<br>
        · 一体成型拉伸水箱，边缘圆角设计，无藏污纳垢的卫生死角<br>
        · 冼室和水箱內无复杂管路，最简化内部设计，使日常清洁简单方便<br>
        · Nozzle fan专利喷嘴，用水效率更高<br>
        · 前置控制板，高亮LED温度显示，洗涤、喷淋温度一目了然<br>
        · 大容量水箱设计，保证高品质清洗效果，降低换水需要<br>
        · 水箱加热管自带过热保护，防止干烧带来的安全隐患<br>
        · 喷淋缸外附加高效隔热保温材料，減少热量损耗<br>
        · 两片式超大过滤网底板，可全部拆下清洗，方便卫生<br>
        · 预接常用连接管线及配件，简化安装过程<br>
        · 整机正面可维修，无需移动机器，维护保养快捷方便
        ',
        'linkto' => '/detail/jiegai-DUN-G1'
        ),
        'lankuangji-D103' => array(
        'path' => '/assets/image/chanp/lankuangji-D103.jpg',
        'xnpath' => '/assets/image/chanp/lankuangji-D103-xn.png',
        'name' => '篮筐机D103',
        'doc' => '· 每小时最大洗涤量为200筐<br>
        · 所有部件（水箱、加热包、淸洗臂、漂洗臂等）都采用304不锈钢材质，保证长时间运行质量<br>
        · 所有配件都易于拆卸和清冼<br>
        · 自动启动/停止，进一步降低机器运行成本<br>
        · 一体式上罩设计，防止水溅出<br>
        · 多种适用范围，热水冷水均可使用
        ',
        'linkto' => '/detail/lankuangji-D103'
        ),
        'lankuangji-D203' => array(
        'path' => '/assets/image/chanp/lankuangji-D203.jpg',
        'xnpath' => '/assets/image/chanp/lankuangji-D203-xn.png',
        'name' => '篮筐机D203',
        'doc' => '· 每小时最大洗涤量为250筐<br>
        · 双喷淋系统，取得更好喷淋效果的同时，实现将近40%的成本节省<br>
        · 所有部件（水箱、加热包、淸洗臂、漂洗臂等）都采用304不锈钢材质，保证长时间运行质量<br>
        · 所有配件都易于拆卸和清冼<br>
        · 自动启动/停止，进一步降低机器运行成本<br>
        · 一体式上罩设计，防止水溅出<br>
        · 多种适用范围，热水冷水均可使用
        ',
        'linkto' => '/detail/lankuangji-D203'
        ),
        'ludaishi-DUN-L3K30' => array(
        'path' => '/assets/image/chanp/ludaishi-DUN-L3K30.jpg',
        'xnpath' => '/assets/image/chanp/ludaishi-DUN-L3K30-xn.png',
        'name' => '履带式洗碗机DUN-L3K30',
        'doc' => '· 高效的烘干机及风刀配置，保证洗涤效果<br>
        · 独特的环绕喷淋设计，使水幕分布更加均勻，保证洗涤效果的同时，实现20%的能耗节约<br>
        · 机械式按扭设计，操作简单方便<br>
        · 灵活的模块组合设计，可根据现场的空间尺寸来选择合适的型号<br>
        · 可靠的履带式传送系统配有自动过载保护裝置，碗碟、餐盘可直接放于履带上，无需分类<br>
        · 装筐和将筐推进洗碗机，大大降低劳动强度，同时减少了工作时间<br>
        · 门有双重保护，内置卷簧及门挂钩，保证操作者安全<br>
        · 基于人体工程学的操作高度，使操作人员轻松裝卸餐具，降低劳动强度<br>
        · 出入口配备启动停止/紧停开关装置，方便操作人员控制机器的运行<br>
        · 出口端装有限位开关，防止餐具因未及时卸载而造成破损
        ',
        'linkto' => '/detail/ludaishi-DUN-L3K30'
        ),
        'ludaishi-DUN-L6K68' => array(
        'path' => '/assets/image/chanp/ludaishi-DUN-L6K68.jpg',
        'xnpath' => '/assets/image/chanp/ludaishi-DUN-L6K68-xn.png',
        'name' => '履带式洗碗机DUN-L6K68',
        'doc' => '· 高效的烘干机及风刀配置，保证洗涤效果<br>
        · 独特的环绕喷淋设计，使水幕分布更加均勻，保证洗涤效果的同时，实现20%的能耗节约<br>
        · 机械式按扭设计，操作简单方便<br>
        · 灵活的模块组合设计，可根据现场的空间尺寸来选择合适的型号<br>
        · 可靠的履带式传送系统配有自动过载保护裝置，碗碟、餐盘可直接放于履带上，无需分类<br>
        · 装筐和将筐推进洗碗机，大大降低劳动强度，同时减少了工作时间<br>
        · 门有双重保护，内置卷簧及门挂钩，保证操作者安全<br>
        · 基于人体工程学的操作高度，使操作人员轻松裝卸餐具，降低劳动强度<br>
        · 出入口配备启动停止/紧停开关装置，方便操作人员控制机器的运行<br>
        · 出口端装有限位开关，防止餐具因未及时卸载而造成破损
        
        ',
        'linkto' => '/detail/ludaishi-DUN-L6K68'
        ),
        'ludaishi-DUN-L7K78' => array(
        'path' => '/assets/image/chanp/ludaishi-DUN-L7K78.jpg',
        'xnpath' => '/assets/image/chanp/ludaishi-DUN-L7K78-xn.png',
        'name' => '履带式洗碗机DUN-L7K78',
        'doc' => '· 高效的烘干机及风刀配置，保证洗涤效果<br>
        · 独特的环绕喷淋设计，使水幕分布更加均勻，保证洗涤效果的同时，实现20%的能耗节约<br>
        · 机械式按扭设计，操作简单方便<br>
        · 灵活的模块组合设计，可根据现场的空间尺寸来选择合适的型号<br>
        · 可靠的履带式传送系统配有自动过载保护裝置，碗碟、餐盘可直接放于履带上，无需分类<br>
        · 装筐和将筐推进洗碗机，大大降低劳动强度，同时减少了工作时间<br>
        · 门有双重保护，内置卷簧及门挂钩，保证操作者安全<br>
        · 基于人体工程学的操作高度，使操作人员轻松裝卸餐具，降低劳动强度<br>
        · 出入口配备启动停止/紧停开关装置，方便操作人员控制机器的运行<br>
        · 出口端装有限位开关，防止餐具因未及时卸载而造成破损
        '
        ),
        'minicl-DUN-L1K20' => array(
        'path' => '/assets/image/chanp/minicl-DUN-L1K20.jpg',
        'xnpath' => '/assets/image/chanp/minicl-DUN-L1K20-xn.png',
        'name' => '迷你长龙机',
        'doc' => '· 高效的烘干机及风刀配置，保证洗涤效果<br>
        · 独特的环绕喷淋设计，使水幕分布更加均勻，保证洗涤效果的同时，实现20%的能耗节约<br>
        · 机械式按扭设计，操作简单方便<br>
        · 灵活的模块组合设计，可根据现场的空间尺寸来选择合适的型号<br>
        · 可靠的履带式传送系统配有自动过载保护裝置，碗碟、餐盘可直接放于履带上，无需分类<br>
        · 装筐和将筐推进洗碗机，大大降低劳动强度，同时减少了工作时间<br>
        · 门有双重保护，内置卷簧及门挂钩，保证操作者安全<br>
        · 基于人体工程学的操作高度，使操作人员轻松裝卸餐具，降低劳动强度<br>
        · 出入口配备启动停止/紧停开关装置，方便操作人员控制机器的运行<br>
        · 出口端装有限位开关，防止餐具因未及时卸载而造成破损
        ',
        'linkto' => '/detail/minicl-DUN-L1K20'
        ),
        'peitao' => array(
        'path' => '/assets/image/chanp/peitao.jpg',
        'xnpath' => '',
        'imgspath' => Array(
            '/assets/image/chanp/peitao-1.jpg',
            '/assets/image/chanp/peitao-2.jpg',
            '/assets/image/chanp/peitao-3.jpg',
            '/assets/image/chanp/peitao-4.jpg',
            '/assets/image/chanp/peitao-5.jpg',
            '/assets/image/chanp/peitao-6.jpg',
            '/assets/image/chanp/peitao-7.jpg'
        ),
        'name' => '配套设备',
        'doc' => '通过适当的优化和自动化配置使成本最小化，即使在复杂的环境条件下，也能够有效地将洗涤流程并入到现有生产流程中,，营造一个高效率的工作环境，，并提高卫生水平。，使用双轴圆条传送带回收参悟餐具，清洁卫生，便于维护，非常适合用于回收脏污餐具。，爬坡和下降，适合各种复杂的空间，满足复杂的传送需求。，转弯传送，双轴圆条传送带能够以任意角度转弯。
        ',
        'linkto' => '/detail/peitao'
        )
    );
      $this -> assign([
        'name' => '公司产品详情 - MATE ELECTRICAL',
        'bodyClassName' => 'page-17146 pagelevel-2 language-4 backendlayout-pagets__followup layout-0 theme-default backendlayout-pagets__followup--hero mobilemenu--nopush',
        'hasBackPath' => '/product',
        'detail' => $list[$id]
      ]);
      return $this->fetch();
    }
}
