
( function( $ ) {
	$(function() {
		$.fn.extend({
		    animateCss: function (animationName) {
		        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		        $(this).addClass('animated ' + animationName).one(animationEnd, function() {
		            $(this).removeClass('animated ' + animationName);
		        });
		    }
		});

                $(".vantagens1").on("click",function(){
                	$(".vantagens2").attr("src", dirbase+"/images/vantagens2a.jpg" );
                	$(".vantagens3").attr("src", dirbase+"/images/vantagens3a.jpg" );
                	$(".vantagens4").attr("src", dirbase+"/images/vantagens4a.jpg" );
                	$(".vantagens5").attr("src", dirbase+"/images/vantagens5a.jpg" );


                	$(this).attr("src", dirbase+"/images/vantagens1b.jpg" );
                	$(this).animateCss('fadeIn'); 
                	$(".vantagensdetalhes2").css('display','none');
                	$(".vantagensdetalhes3").css('display','none');
                	$(".vantagensdetalhes4").css('display','none');
                	$(".vantagensdetalhes5").css('display','none');
                	$(".vantagensdetalhes1").css('display','block');
                	$(".vantagensdetalhes1").animateCss('bounceInLeft');     		
                });

                $(".vantagens2").on("click",function(){
                	$(".vantagens1").attr("src", dirbase+"/images/vantagens1a.jpg" );
                	$(".vantagens3").attr("src", dirbase+"/images/vantagens3a.jpg" );
                	$(".vantagens4").attr("src", dirbase+"/images/vantagens4a.jpg" );
                	$(".vantagens5").attr("src", dirbase+"/images/vantagens5a.jpg" );

                	$(this).attr("src", dirbase+"/images/vantagens2b.jpg" );
                	$(this).animateCss('fadeIn'); 
                	$(".vantagensdetalhes1").css('display','none');
                	$(".vantagensdetalhes3").css('display','none');
                	$(".vantagensdetalhes4").css('display','none');
                	$(".vantagensdetalhes5").css('display','none');
                	$(".vantagensdetalhes2").css('display','block');
                	$(".vantagensdetalhes2").animateCss('bounceInLeft');     		
                });

                $(".vantagens3").on("click",function(){
                        $(".vantagens1").attr("src", dirbase+"/images/vantagens1a.jpg" );
                        $(".vantagens2").attr("src", dirbase+"/images/vantagens2a.jpg" );
                        $(".vantagens4").attr("src", dirbase+"/images/vantagens4a.jpg" );
                        $(".vantagens5").attr("src", dirbase+"/images/vantagens5a.jpg" );

                        $(this).attr("src", dirbase+"/images/vantagens3b.jpg" );
                        $(this).animateCss('fadeIn'); 
                        $(".vantagensdetalhes1").css('display','none');
                        $(".vantagensdetalhes2").css('display','none');
                        $(".vantagensdetalhes4").css('display','none');
                        $(".vantagensdetalhes5").css('display','none');
                        $(".vantagensdetalhes3").css('display','block');
                        $(".vantagensdetalhes3").animateCss('bounceInLeft');                    
                });

                $(".vantagens4").on("click",function(){
                        $(".vantagens1").attr("src", dirbase+"/images/vantagens1a.jpg" );
                        $(".vantagens2").attr("src", dirbase+"/images/vantagens2a.jpg" );
                        $(".vantagens3").attr("src", dirbase+"/images/vantagens3a.jpg" );
                        $(".vantagens5").attr("src", dirbase+"/images/vantagens5a.jpg" );

                        $(this).attr("src", dirbase+"/images/vantagens4b.jpg" );
                        $(this).animateCss('fadeIn'); 
                        $(".vantagensdetalhes1").css('display','none');
                        $(".vantagensdetalhes2").css('display','none');
                        $(".vantagensdetalhes3").css('display','none');
                        $(".vantagensdetalhes5").css('display','none');
                        $(".vantagensdetalhes4").css('display','block');
                        $(".vantagensdetalhes4").animateCss('bounceInLeft');                    
                });

                $(".vantagens5").on("click",function(){
                        $(".vantagens1").attr("src", dirbase+"/images/vantagens1a.jpg" );
                        $(".vantagens2").attr("src", dirbase+"/images/vantagens2a.jpg" );
                        $(".vantagens3").attr("src", dirbase+"/images/vantagens3a.jpg" );
                        $(".vantagens4").attr("src", dirbase+"/images/vantagens4a.jpg" );

                        $(this).attr("src", dirbase+"/images/vantagens5b.jpg" );
                        $(this).animateCss('fadeIn'); 
                        $(".vantagensdetalhes1").css('display','none');
                        $(".vantagensdetalhes2").css('display','none');
                        $(".vantagensdetalhes3").css('display','none');
                        $(".vantagensdetalhes4").css('display','none');
                        $(".vantagensdetalhes5").css('display','block');
                        $(".vantagensdetalhes5").animateCss('bounceInLeft');                    
                });

	});


} )( jQuery );