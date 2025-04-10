var swiper = new Swiper(".mySwiper", {
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  slidesPerView: 2,
  breakpoints: {
    640: { slidesPerView: 2, spaceBetween: 20 },
    1024: { slidesPerView: 2, spaceBetween: 30 },
    1280: { slidesPerView: 4, spaceBetween: 30 },
    1920: { slidesPerView: 4, spaceBetween: 30 },
  },
  loop: true,
});



  
// Slider cho "Hình ảnh nhà xe" (.imageSwiper)
var imageSwiper = new Swiper(".imageSwiper", {
    spaceBetween: 20,
    slidesPerView: 4,
    loop: true,
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1280: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
    },
});
