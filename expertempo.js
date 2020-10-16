jQuery(function ($) {
	$(document).ready(function () {
		//Défilement automatique du slider témoignages quand il est présent
		var boutonSlider=$('button.slick-next');
		if(boutonSlider.length>0) {

			//Fonction qui déclenche le défilement auto
			function sliderAuto() {
				setInterval(
					function() { boutonSlider.click() },
					8000
				);
			}

			//Si IntersectionObserver est supporté, on ne déclenche le défilement auto que quand le slider devient visible
			if ('IntersectionObserver' in window) {
				
				observerSlider = new IntersectionObserver((entries) => {
					entries.forEach(entry => {
						if (entry.intersectionRatio > 0) {
							sliderAuto();
						} 
					});
				});

				const slider=document.querySelectorAll('.slider');
				slider.forEach(elem => {
					observerSlider.observe(elem);
				});

			} else {
				//sinon on déclenche le défilement dès le chargement de la page
				sliderAuto();
			}

		} 

	});
});