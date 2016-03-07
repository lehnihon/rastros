
( function( $ ) {
        $(function() {
                $(".anima-a").css('visibility','hidden');
                $(".anima-b").css('visibility','hidden');
                $(".anima-c").css('visibility','hidden');
                $(".anima-d").css('visibility','hidden');
                $(".anima-e").css('visibility','hidden');
                $(".anima-f").css('visibility','hidden');
                $(".anima-g").css('visibility','hidden');
                $(".anima-h").css('visibility','hidden');
                $(".anima-i").css('visibility','hidden');
                $(".anima-j").css('visibility','hidden');
                $(".anima-k").css('visibility','hidden');
                $(".anima-l").css('visibility','hidden');
                $(".anima-m").css('visibility','hidden');
                $(".anima-n").css('visibility','hidden');
                $(".anima-o").css('visibility','hidden');
                $(".anima-p").css('visibility','hidden');
                $(".anima-q").css('visibility','hidden');
                $(".anima-r").css('visibility','hidden');
        });

	$(function() {
        $.fn.extend({
            animateCss: function (animationName) {
                var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                $(this).addClass('animated ' + animationName).one(animationEnd, function() {
                    $(this).removeClass('animated ' + animationName);
                });
            }
        });
        
        $('.videoWrapper').click(function () {
            $('.videoWrapper iframe').css("pointer-events", "auto");
        });

        $('.menu-drop-header').on('click',function(e){
            e.preventDefault();
            if ( $(this).next().next('.menu-drop').is( ":hidden" ) ) {         
                $(this).next().next('.menu-drop').slideDown( "slow" );
            }else{
                $(this).next().next('.menu-drop').slideUp( "slow" );
            }
        });

        $('.anima-a').css('visibility','visible');
        $('.anima-a').animateCss('animated fadeIn');

        $(window).scroll(function() {
                var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

                if ($(this).scrollTop() > 100 ) {
                        $('.anima-b').css('visibility','visible').addClass('animated fadeInLeft').one(animationEnd, function(){
                                $('.anima-c').css('visibility','visible').addClass('animated fadeInLeft').one(animationEnd, function(){
                                        $('.anima-f').css('visibility','visible').addClass('animated fadeIn');

                                }); 
                        });    
                        $('.anima-d').css('visibility','visible').addClass('animated fadeInRight').one(animationEnd, function(){
                                $('.anima-e').css('visibility','visible').addClass('animated fadeInRight').one(animationEnd, function(){

                                }); 
                        });  

                }
                if ($(this).scrollTop() > 600 ) {
                        $('.anima-g').css('visibility','visible').addClass('animated fadeIn');
                }
                if ($(this).scrollTop() > 900 ) {
                        $('.anima-h').css('visibility','visible').addClass('animated fadeInLeft').one(animationEnd, function(){
                                $('.anima-i').css('visibility','visible').addClass('animated fadeIn');
                        });
                        $('.anima-j').css('visibility','visible').addClass('animated fadeInRight');
                }
                if ($(this).scrollTop() > 1100 ) {
                        $('.anima-k').css('visibility','visible').addClass('animated fadeIn');
                }
                if ($(this).scrollTop() > 1400 ) {
                        $('.anima-l').css('visibility','visible').addClass('animated fadeInLeft').one(animationEnd, function(){
                                $('.anima-n').css('visibility','visible').addClass('animated fadeIn');
                        });
                        $('.anima-m').css('visibility','visible').addClass('animated fadeInRight');
                }
                if ($(this).scrollTop() > 1600 ) {
                        $('.anima-o').css('visibility','visible').addClass('animated fadeIn');
                }
                if ($(this).scrollTop() > 2200 ) {
                        $('.anima-p').css('visibility','visible').addClass('animated fadeInLeft').one(animationEnd, function(){
                                $('.anima-r').css('visibility','visible').addClass('animated fadeIn');
                        });
                        $('.anima-q').css('visibility','visible').addClass('animated fadeInRight');
                }

                if($(window).scrollTop() + $(window).height() > $(document).height()-100) {
                        $(".anima-rino").addClass('animated wobble');
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