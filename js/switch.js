$(document).ready(function(){


	var $document = $(document),

      // Element sur lequel on ajoute la classe
      $element = $('.navbar-default');

      // la classe qu'on ajoute
      className = 'navbar-fixed-top';

      $document.scroll(function() {

        // Si scroll = valeur ou +, $element va se voir ajouter la classe className
        $element.toggleClass(className, $document.scrollTop() >= 210);
      });


      // Calcul le HREF comportant des # pour les ancres ID
      $('a[href^="#"]').click(function(){
        var the_id = $(this).attr("href");

        $('html, body').animate({
          scrollTop:$(the_id).offset().top
        }, 'slow');
        return false;
      });

    $(".container").fadeIn(1500);

    $(".member_1 img").hover(function(){
      $(".member_1 p").toggle(400);
    });

    $(".member_2 img").hover(function(){
      $(".member_2 p").toggle(400);
    });

    $(".member_3 img").hover(function(){
      $(".member_3 p").toggle(400);
    });

    $(".member_4 img").hover(function(){
      $(".member_4 p").toggle(400);
    });

     $("#btn-custom").delay(3000).fadeIn(1000);

     // $("#switcher_divers").click(function(){
     // 	$(this).toggleClass("col-md-offset-4");
     // 	$("#switcher_caroline").toggle(500);
     // 	$("#switcher_anthony").toggle(500);
     // 	$("#gallery_caroline").hide(500);
     // 	$("#gallery_anthony").hide(500);
     // 	$("#gallery_divers").toggle(500);
     // });

     // $("#switcher_caroline").click(function(){
     // 	$(this).toggleClass("col-md-offset-4");
     // 	$("#switcher_divers").toggle(500);
     // 	$("#switcher_anthony").toggle(500);
     // 	$("#gallery_divers").hide(500);
     // 	$("#gallery_anthony").hide(500);
     // 	$("#gallery_caroline").toggle(500);
     // });

     // $("#switcher_anthony").click(function(){
     // 	$(this).toggleClass("col-md-offset-4");
     // 	$("#switcher_caroline").toggle(500);
     // 	$("#switcher_divers").toggle(500);
     // 	$("#gallery_caroline").hide(500);
     // 	$("#gallery_divers").hide(500);
     // 	$("#gallery_anthony").toggle(500);
     // });

	$("#news").click(function(){
		$(this).toggleClass("col-md-offset-4");
		$(".chronique").toggle(500);
		$(".biographie").toggle(500);
		$(".hiddenstuff").toggle(500);
	});

	$("#chronique").click(function(){
		$(this).toggleClass("col-md-offset-4");
		$(".biographie").toggle(500);
		$(".news").toggle(500);
		$(".hiddenstuff-1").toggle(500);
	});

	$("#biographie").click(function(){
		$(this).toggleClass("col-md-offset-4");
		$(".chronique").toggle(500);
		$(".news").toggle(500);
		$(".hiddenstuff-2").toggle(500);
	});
	$("#hide_stuff").click(function(){
		$("#video").toggle(1000);
	});
});