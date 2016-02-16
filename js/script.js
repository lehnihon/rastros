( function( $ ) {
	$(function() {
        $(".vantagensdetalhes2").css('display','none');
        $(".vantagensdetalhes3").css('display','none');
        $(".vantagensdetalhes4").css('display','none');
        $(".vantagensdetalhes5").css('display','none');

        $(".vantagens1").on("click",function(){
        	$(".vantagens2").attr("src", dirbase+"/images/vantagens4a.jpg" );
        	$(".vantagens3").attr("src", dirbase+"/images/vantagens4a.jpg" );
        	$(".vantagens4").attr("src", dirbase+"/images/vantagens4a.jpg" );
        	$(".vantagens5").attr("src", dirbase+"/images/vantagens4a.jpg" );


        	$(this).attr("src", dirbase+"/images/vantagens4b.jpg" );
        	$(this).addClass('animated fadeIn'); 
        	$(".vantagensdetalhes2").css('display','none');
        	$(".vantagensdetalhes3").css('display','none');
        	$(".vantagensdetalhes4").css('display','none');
        	$(".vantagensdetalhes5").css('display','none');
        	$(".vantagensdetalhes1").css('display','block');
        	$(".vantagensdetalhes1").addClass('animated bounceInLeft');     		
        });

        $(".vantagens2").on("click",function(){
        	$(".vantagens1").attr("src", dirbase+"/images/vantagens4a.jpg" );
        	$(".vantagens3").attr("src", dirbase+"/images/vantagens4a.jpg" );
        	$(".vantagens4").attr("src", dirbase+"/images/vantagens4a.jpg" );
        	$(".vantagens5").attr("src", dirbase+"/images/vantagens4a.jpg" );

        	$(this).attr("src", dirbase+"/images/vantagens4b.jpg" );
        	$(this).addClass('animated fadeIn'); 
        	$(".vantagensdetalhes1").css('display','none');
        	$(".vantagensdetalhes3").css('display','none');
        	$(".vantagensdetalhes4").css('display','none');
        	$(".vantagensdetalhes5").css('display','none');
        	$(".vantagensdetalhes2").css('display','block');
        	$(".vantagensdetalhes2").addClass('animated bounceInLeft');     		
        });
	});


} )( jQuery );