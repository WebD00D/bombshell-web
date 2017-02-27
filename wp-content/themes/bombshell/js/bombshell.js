
$(window).load(function(){
 $('#preloader').fadeOut('slow',function(){$(this).remove();});
 $('#mainImage').animate({'opacity':1},2000); // everything is loaded, fade images in
  $(".bombshellSubHeading").animate({'opacity':1},2000);
  $(".bombshellHeading").animate({'opacity':1},2000);
  $("#download-button").animate({'opacity':1},2000);
  $(".linkit").animate({'opacity':1},2000);
  $("#index-banner").removeClass('black');

  $("#download-button").text("Sign Me Up!");


 });

$(document).ready(function(){

  $('.testimonialSlider').slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows:false,
          autoplay:true,
          autoplaySpeed:2000
        });

  //initilizers
  // $(".button-collapse").sideNav();
  $('.parallax').parallax();
  $('select').material_select();


  $(".footerlink").mouseover(function(){
    $(this).removeClass("pink-text").addClass("white-text");
  })
  $(".footerlink").mouseout(function(){
    $(this).removeClass("white-text").addClass("pink-text");
  })

  $(".social").mouseover(function(){
    $(this).removeClass("pink-text").addClass("white-text");
  })
  $(".social").mouseout(function(){
    $(this).removeClass("white-text").addClass("pink-text");
  })


  $(".card").mouseover(function(){
    $(this).css("cursor","pointer");
    $(this).addClass("z-depth-5");
  })
  $(".card").mouseout(function(){
    $(this).removeClass("z-depth-5");
  })

  $("#weddingBlock").mouseover(function(){
   $(this).css("cursor","pointer");
  })
 

  $("#contentblock3").mouseover(function(){
    $(this).css("cursor","pointer");

  })
  $("#contentblock3").mouseout(function(){
    $(this).css("cursor","pointer");

  })

  $("#contentblock3").click(function(){
    window.location.href = "/blog-page";
  })

  $("#partyBlock").mouseover(function(){
    $(this).css("cursor","pointer");
    
  })
  

  $("#partyBlock").click(function(){
    window.location.href= "/dr-travis-shaw/";
  })


  var storyImageURL = $("#storyBlock").attr("data-imgurl");

  $("#storyBlock").mouseover(function () {
    $(this).css("cursor","pointer");
  
  })
  

  $("#bookingBlock").mouseover(function(){
    $(this).css("cursor","pointer");
    // $(this).css("background","linear-gradient(rgba(01,01,01,0.1),rgba(01,01,01,0.1)),url("+ $(this).attr("data-imgurl") +")");
    // $(this).css("background-size","cover");
  })
  // $("#bookingBlock").mouseout(function(){
  //   $(this).css("cursor","pointer");
  //   $(this).css("background","linear-gradient(rgba(01,01,01,0.5),rgba(01,01,01,0.5)),url("+ $(this).attr("data-imgurl") +")");
  //   $(this).css("background-size","cover");
  // })

  $("#bookingBlock").click(function(){
    window.location.href= $(this).attr("data-pagelink");
  })

  $("#storyBlock").click(function(){
    window.location.href= $(this).attr("data-pagelink");
  })


  $("#serviceTile").mouseover(function(){
    $(this).css("cursor","pointer");
  })
  $("#serviceTile").click(function(){
    window.location.href= $(this).attr("data-pagelink");
  })

  $(".specialsTile").mouseover(function(){
    $(this).css("cursor","pointer");
  })
  $(".specialsTile").click(function(){
      window.location.href= $(this).attr("data-pagelink");
  })
  

  $(".bookingTile").mouseover(function(){
    $(this).css("cursor","pointer");
  })
  $(".bookingTile").click(function(){
    window.location.href= $(this).attr("data-pagelink");
  })

  $(".giftcardTile").mouseover(function(){
    $(this).css("cursor","pointer");
  })
  $(".giftcardTile").click(function(){
  window.location.href= $(this).attr("data-pagelink");
  })
 

  $(".partyTile").mouseover(function(){
    $(this).css("cursor","pointer");
  })
  $(".partyTile").click(function(){
    window.location.href= $(this).attr("data-pagelink");
  })

  $(".blogTile").mouseover(function(){
    $(this).css("cursor","pointer");
  })
  $(".blogTile").click(function(){
    window.location.href= $(this).attr("data-pagelink");
  })


  $(".weddingTile").mouseover(function(){
    $(this).css("cursor","pointer");
  })
  $("#weddingBlock").click(function(){
    window.location.href= $(this).attr("data-pagelink");
  })



})
