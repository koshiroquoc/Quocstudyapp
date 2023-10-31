$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 1; //globaly define number of elements per page
  var syncedSecondary = true;

  sync2.owlCarousel({
    items : slidesPerPage,
    slideSpeed : 2000,
    autoplayHoverPause:true,
    nav: false,
    autoplay: true,
    dots: false,    
    margin:0,
    loop: false,
    center:true,
    rtl:false,
    responsiveRefreshRate : 200,
    navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>']
}).on('changed.owl.carousel', syncPosition);

  sync1
    .on('initialized.owl.carousel', function () {
      sync1.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : 1,
    dots: false,
    nav: false,    
    smartSpeed: 200,
    slideSpeed : 500,
    slideBy: 1, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    rtl:false,
    responsiveRefreshRate : 100,
  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);   
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync1
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync1.find('.owl-item.active').length - 1;
    var start = sync1.find('.owl-item.active').first().index();
    var end = sync1.find('.owl-item.active').last().index();    
    if (current > end) {
      sync1.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync1.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync2.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync1.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync2.data('owl.carousel').to(number, 300, true);
  });
});