$(function() {
    var common = {
        init: function(){
            $(window).on('scroll', function (){
                if ($(this).scrollTop()) {
                    $('#page-nav').addClass('active');
                } else {
                    $('#page-nav').removeClass('active');
                }
            }); 
        }
    };

    common.init();
});