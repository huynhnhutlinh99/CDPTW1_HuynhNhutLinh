var swiper = new Swiper('.swiper-container',{
    slidesPerView: 8,
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
});
// Responsive breakpoints
$(window).on('resize', function(){
    var width = $(window).width();
    if(width >= 768) {
        swiper.params.slidesPerView = 8;
    }else if(width < 768 && width >= 360) {
        swiper.params.slidesPerView = 4;
    }else{
        swiper.params.slidesPerView = 2;
    }
    // swiper.onResize();
}).resize();