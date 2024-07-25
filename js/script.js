$(function () {
  $(".slide").slick({
    slidesToShow: 3,
    arrows: true,
    autoplay: true,
    centerMode: true,
    centerPadding: "10%",
    prevArrow:"<img src='images/arrow_right.png' class='slide-arrow prev-arrow'>",
    nextArrow:"<img src='images/arrow_right.png' class='slide-arrow next-arrow'>",
    responsive:[
      {
        breakpoint: 600,
        settings: {
          centerMode: false,
          arrows:false,
          slidesToShow: 1,
        }
      }
    ] 
  });

  
  
});

