<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Local Mugs</title>
	
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxhBR1gyqJgEkwZBAjQfyuRWSnZ1thf-g&libraries=places"></script>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	
	
	
		<style type="text/css">
		
		h1, h2 {
			
			font-family: 'Lobster', cursive;
			margin-top: 10px;
			
		}
		
		html {
			background: url(backgroundb.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;	
		}
		
		body {
			
			background: none;
			
		}
		
		.container {
			
			text-align: center;
			width: 350px;
			
		}
		
		#header {
			
			margin-top:30px;
			
		}
		
		input {
			
			margin: 20 0px;
			
		}
		
		/* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 400px;
		width: 400px;
		border-radius: 25px;
		margin-top: 20px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

		
		</style>
	
  </head>
  <body>
  
    
		<div class="container" id="header">
		
		<div><img src="localmugs_logo.png"></div>
		
			<h2>Find a local coffee shop</h2>
			
			<form>
  <div class="form-group">
    <label for="city">Enter the name of a city or to find one near your location, just press "Let's Go!".</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="e.g. London, New York, Singapore" value = "San Francisco, CA">
  </div>
  
  <button onclick="myFunction()" type="submit" value="Geocode" class="btn btn-success">Let's Go!</button>
</form>
		
		
		</div>
		
		<div class="container" id="map"></div>
<script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
	  
		var map, infowindow;


		function initMap() {
		  map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: -34.397, lng: 150.644},
			zoom: 14
        });

			infoWindow = new google.maps.InfoWindow;
			
			// Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
		service = new google.maps.places.PlacesService(map);
		service.nearbySearch(request, callback);


		 // var request = {
		//	location: castrovalley,
		//	radius: '500',
		//	query: 'restaurant'
		//  };

		//  service = new google.maps.places.PlacesService(map);
		//  service.textSearch(request, callback);
		//}

		//function callback(results, status) {
		//  if (status == google.maps.places.PlacesServiceStatus.OK) {
		//	for (var i = 0; i < results.length; i++) {
		//	  var place = results[i];
		//	  createMarker(results[i]);
		//	}
		//  }
		//}
		
		
		
</script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-92dRWhhnP_cpOr2b10g1m_qnORnKuqo&callback=initMap"
    async defer></script>
	

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	
		
	
  </body>
</html>