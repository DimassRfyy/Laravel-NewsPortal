document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const closeSidebar = document.getElementById('close-sidebar');
    const sidebarMenu = document.getElementById('sidebar-menu');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    
    // Open sidebar
    sidebarToggle.addEventListener('click', function() {
        sidebarMenu.classList.remove('translate-x-full');
        sidebarOverlay.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    });
    
    // Close sidebar
    function closeSidebarMenu() {
        sidebarMenu.classList.add('translate-x-full');
        sidebarOverlay.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
    
    closeSidebar.addEventListener('click', closeSidebarMenu);
    sidebarOverlay.addEventListener('click', closeSidebarMenu);
});

document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper(".categorySwiper", {
        slidesPerView: "auto",
        spaceBetween: 16,
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