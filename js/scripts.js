
$(document).ready(function(){

	// **********************************
	// 	AFFICHAGE - MASQUE MENU CLUB
	// **********************************
	$("#opening").click(function(){

	    $("#club").toggleClass("espace-club-ouvert");
	    
	    $("#content").toggleClass("site-content-ouvert");

	    $(this).find('i').toggleClass('fa-bars fa-times');

	});


	// **********************************
	// 	CARDS CLUBS
	// **********************************
	$("#card-club-1").click(function(){

    	$("#card-club-content-1").toggleClass("card-club-content-ouvert");

    	$(this).find('.chevron-btn').toggleClass('fa-chevron-down fa-chevron-up');

	});

	$("#card-club-2").click(function(){

    	$("#card-club-content-2").toggleClass("card-club-content-ouvert");

    	$(this).find('.chevron-btn').toggleClass('fa-chevron-down fa-chevron-up');

	});

	$("#card-club-3").click(function(){

    	$("#card-club-content-3").toggleClass("card-club-content-ouvert");

    	$(this).find('.chevron-btn').toggleClass('fa-chevron-down fa-chevron-up');

	});

	$("#card-club-4").click(function(){

    	$("#card-club-content-4").toggleClass("card-club-content-ouvert");

    	$(this).find('.chevron-btn').toggleClass('fa-chevron-down fa-chevron-up');

	});

	$("#card-club-5").click(function(){

    	$("#card-club-content-5").toggleClass("card-club-content-ouvert");

    	$(this).find('.chevron-btn').toggleClass('fa-chevron-down fa-chevron-up');

	});

	$("#card-club-6").click(function(){

    	$("#card-club-content-6").toggleClass("card-club-content-ouvert");

    	$(this).find('.chevron-btn').toggleClass('fa-chevron-down fa-chevron-up');

	});

	$("#card-club-7").click(function(){

    	$("#card-club-content-7").toggleClass("card-club-content-ouvert");

    	$(this).find('.chevron-btn').toggleClass('fa-chevron-down fa-chevron-up');

	});

	$("#card-club-8").click(function(){

    	$("#card-club-content-8").toggleClass("card-club-content-ouvert");

    	$(this).find('.chevron-btn').toggleClass('fa-chevron-down fa-chevron-up');

	});





	// **********************************
	// 	SCROLL DOUX
	// **********************************
	$('a.scroll').on('click', function(evt){
		// bloquer le comportement par défaut: on ne rechargera pas la page
		evt.preventDefault(); 
		// enregistrer la valeur de l'attribut  href dans la variable target
		var target = $(this).attr('href');
		/* le sélecteur $(html, body) permet de corriger un bug sur chrome 
		et safari (webkit) */
		$('html, body')
		// arrêter toutes les animations en cours 
		.stop()
		/* animer vers le haut (scrollTop) vers ancre target */
		.animate({scrollTop: $(target).offset().top}, 1000 );
	});

});