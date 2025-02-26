document.getElementById('menu-btn').addEventListener('click', function () {
    document.getElementById('mobile-menu').classList.toggle('hidden');
});

document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper(".categorySwiper", {
        slidesPerView: "auto",
        spaceBetween: 16,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: "auto",
                spaceBetween: 10
            },
            640: {
                slidesPerView: "auto",
                spaceBetween: 16
            },
            768: {
                slidesPerView: "auto",
                spaceBetween: 16
            },
            1024: {
                slidesPerView: "auto",
                spaceBetween: 16
            }
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var newsSwiper = new Swiper(".news-swiper", {
        slidesPerView: "auto",
        spaceBetween: 20,
        loop: true,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: "auto",
                spaceBetween: 12
            },
            640: {
                slidesPerView: "auto",
                spaceBetween: 16
            },
            768: {
                slidesPerView: "auto",
                spaceBetween: 16
            },
            1024: {
                slidesPerView: "auto",
                spaceBetween: 20
            }
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    
    var thumbnailSwiper = new Swiper(".thumbnail-swiper", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".thumbnail-swiper-button-next",
            prevEl: ".thumbnail-swiper-button-prev",
        },
    });
});


document.addEventListener('DOMContentLoaded', function () {
    var newsWriterSwiper = new Swiper(".newswriter-swiper", {
        loop: true,
        spaceBetween: 20,
        slidesPerView: 2,
        pagination: {
            el: ".newswriter-swiper .swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            1024: { slidesPerView: 6 },
        }
    });
});