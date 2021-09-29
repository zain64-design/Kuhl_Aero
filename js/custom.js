AOS.init();

window.addEventListener("scroll", function () {
	var header = document.querySelector("header");
	header.classList.toggle("sticky", window.scrollY > 50);
});

$('.sec-home-banner').parallaxie({
	"speed": 0.5,
});

$('.sec-inner-banner').parallaxie({
	"speed": 0.5,
});

// $('.parallax-thumb').parallaxie({
// 	"speed": 0.5,
// });

$('.air-craft-bg').parallaxie({
	"speed": 0.5,
});

$('.home-banner-desc').parallaxie({
	speed: -0.5,
	pos_x: '25%',
	offset: 100,
});
$('.inner-desc').parallaxie({
	speed: -0.5,
	pos_x: '25%',
	offset: 100,
});

$('#pilot-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    stagePadding: 100,
	dots: false,
	autoplay: true,
    smartSpeed:300,
    center: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

    // $(document).on('click', 'ul li', function(){
    //   $(this).addClass('active').siblings().removeClass('active')
    // });
    $(document).ready(function(){
  $('.section-airline .container-fluid .active-box').click(function(){
    $('.container-fluid .active-box').removeClass("active");
    $(this).addClass("active");
});
});


let months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
];

$("#calendar-field").click(function(){
    $(".icalendar").slideToggle();
  });


  $('.slider-main').slick({
    slidesToShow: 1,
    asNavFor: '.slider-nav',
    vertical: false,
    autoplay: true,
    verticalSwiping: true,
    arrows: false,
});


$('.slider-nav').slick({
    slidesToShow: 4,
    asNavFor: '.slider-main',
    vertical: true,
    focusOnSelect: true,
    autoplay: true,
    arrows: false,
});

$(window).on('resize orientationchange', function() {
    if ($(window).width() > 1200) {
        $('.slider-nav').slick('unslick');
        $('.slider-nav').slick({
            slidesToShow: 1,
            asNavFor: '.slider-main',
            vertical: true,
            focusOnSelect: true,
            autoplay: true,
            arrows: false,

        });
    }
});

$(document).ready(function(){
    $(".categories_more_link").click(function(){
        var categories_more_text = $(".categories_more_link").text();
        var categories_more = $(".categories_more_link");
        $(".more_items_collapse").slideToggle();
        if(categories_more_text  == 'More'){
            categories_more.text("Less");
        }
        else{
            categories_more.text("More");
        }
    });
    $(".pagination_supplies_listing ul").children("li.pagintaion_item").click(function(){
        $(".pagination_supplies_listing ul").children("li.pagintaion_item").removeClass("active");
        $(this).addClass("active");
    })
});
