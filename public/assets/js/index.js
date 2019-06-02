$(function (){
    var indexPage = {
        window: {
            width: window.innerWidth,
            height: window.innerHeight,
        },
        init: function () {
            this.saveBtnSwiperData();
            this.initTitleSwipper(0);
        },
        bannerSwiper: new Swiper('#swiper-container', {
            direction: 'horizontal',
            loop: false,
            autoplay: true,
            speed: 800,
        }),
        contentOneSwiper: new Swiper('#swiper-container-2', {
            direction: 'vertical',
            loop: true,
            autoplay: true,
            speed: 1200,
            pagination: {
              el: '.swiper-pagination',
            },
        }),
        btnSwiperitemData: [],
        initTitleSwipper: function(e) {
            var index = e;
            var btnSwiperBox = $('#btn-swipper .swiper-postion');
            var activeItem = btnSwiperBox.find('.postion-item').eq(index);
            activeItem.addClass('active').siblings().removeClass('active');
            btnSwiperBox.css(
                'transform',
                'translateX(' + (this.window.width/2 - this.btnSwiperitemData[index].left - this.btnSwiperitemData[index].width/2) + 'px)',
            );
        },
        saveBtnSwiperData: function () {
            var $this = this;
            $('#btn-swipper .swiper-postion .postion-item').each(function (index, item) {
                var $item = $(item);
                $this.btnSwiperitemData.push({
                  left: $item.position().left,
                  width: $item.outerWidth(),
                });
            });
        }
    };
    window.indexPage = indexPage;
    indexPage.init();
    
    indexPage.bannerSwiper.on('slideChangeTransitionStart', function () {
        indexPage.initTitleSwipper(this.activeIndex);
    });

    $('#btn-swipper').on('click', '.postion-item', function(){
        indexPage.bannerSwiper.slideTo($(this).index());
    });
});