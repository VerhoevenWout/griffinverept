
				
			<footer>
				<a target="_blank" href="http://www.balieantwerpen.be/nl/home">
					<img id="deOrdeVanAdvocaten" src="<?php bloginfo('template_url'); ?>/img/deOrdeVanAdvocaten.png">
				</a>
				<a target="_blank" href="http://www.advocatenmerksem.be/nl">
					<img id="gadisseur" src="<?php bloginfo('template_url'); ?>/img/gadisseur.png">
				</a>
				<a href="">
					<img id="griffinFooterLogo" src="<?php bloginfo('template_url'); ?>/img/logoGriffinVereptTransparant4.png">
				</a>
				<p id="legalRights">
					© 2016 Griffin Verept advocatenkantoor. Alle rechten voorbehouden.
				</p>
				<a href="http://verhoevenwout.be">
					<p id="verhoevenwout">
						Design by Wout Verhoeven
					</p>
				</a>
			</footer>
		</div>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByxFBBMyLC9G2DNGcgKzp9d9zS1CkyAYI" ></script>
		<script type="text/javascript">
		// Google maps	
	    var myLatLng = {lat: 51.254820, lng: 4.451157}

	    var map = new google.maps.Map(document.getElementById('map'), {
	        center: myLatLng,
	        scrollwheel: false,
	        zoom: 14,
	        disableDefaultUI: true
	    });
		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'Griffin Verept advocatenkantoor'
		});

	</script>
	<?php wp_footer(); ?> 
</body>
</html>