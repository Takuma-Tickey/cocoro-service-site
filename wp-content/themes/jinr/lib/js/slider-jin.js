const swiper = new Swiper(".d--swiper-jin", {
    loop: true,
    loopedSlides: 4,//スライドのアクティブ枚数
    slidesPerView: "auto",
    speed:1000,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        type: 'bullets' // 'bullets'（デフォルト） | 'fraction' | 'progressbar'
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    autoplay: {
        // 自動再生させる
        delay: 3000, // 次のスライドに切り替わるまでの時間（ミリ秒）
        pauseOnMouseEnter: false,
        disableOnInteraction: false,
    },
    watchSlidesProgress: true,
});
