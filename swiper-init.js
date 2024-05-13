  
  const swiperCards = new Swiper('.card-content', {
    loop: true,
    spaceBetween: 15,
    grabCursor: true,
    speed:1500,

    autoplay: {
      delay: 5000,
    },
    
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
    },
    
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
      680: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
  });

  const swiperSlides = new Swiper('.mySwiper', {
    loop: true,
    spaceBetween: '100%',
    speed:2000,

    autoplay: {
      delay: 2000,
    },
    
  });

  
  