var swiper = new Swiper(".reviews-slider", {
    loop:true,
    slidesPerView: "auto",
    grabCursor: true,
    spaceBetween: 30,
    pagination: {
       el: ".swiper-pagination",
    },
    breakpoints: {
       768: {
         slidesPerView: 1,
       },
       991: {
         slidesPerView: 2,
       },
    },
 });