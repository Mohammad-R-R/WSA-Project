

  AOS.init();


  var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    nav:true,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },            
        960:{
            items:5
        },
        1200:{
            items:6
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});


$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 3
});



// $('.DigitalADS').slick({
//   dots: true,
//   infinite: true,
//   speed: 300,
//   slidesToShow: 1,
//   centerMode: true,
//   variableWidth: true,
//   centerPadding: '30px',
// });


$('.DigitalADS').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1
});



// Initialize and add the map
function initMap() {
    // The location of Uluru
    const uluru = { lat: 32.097920, lng: 35.049031 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 15,
      center: uluru,
      gestureHandling: "none",
  zoomControl: false,
    });
  
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });

  }
  
  window.initMap = initMap;


  
