// firstname: sandler
// secondname: studio
// email: sandlerstudioapi@gmail.com
// password: sandler_studio


function initMap() {
    var uluru = {lat: 50.440995, lng: 30.544959};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: uluru,
        styles: [
				  {
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#212121"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.icon",
				    "stylers": [
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#757575"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.text.stroke",
				    "stylers": [
				      {
				        "color": "#212121"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#757575"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.country",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#9e9e9e"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.land_parcel",
				    "stylers": [
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.locality",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#bdbdbd"
				      }
				    ]
				  },
				  {
				    "featureType": "poi",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#757575"
				      }
				    ]
				  },
				  {
				    "featureType": "poi.park",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#181818"
				      }
				    ]
				  },
				  {
				    "featureType": "poi.park",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#616161"
				      }
				    ]
				  },
				  {
				    "featureType": "poi.park",
				    "elementType": "labels.text.stroke",
				    "stylers": [
				      {
				        "color": "#1b1b1b"
				      }
				    ]
				  },
				  {
				    "featureType": "road",
				    "elementType": "geometry.fill",
				    "stylers": [
				      {
				        "color": "#2c2c2c"
				      }
				    ]
				  },
				  {
				    "featureType": "road",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#8a8a8a"
				      }
				    ]
				  },
				  {
				    "featureType": "road.arterial",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#373737"
				      }
				    ]
				  },
				  {
				    "featureType": "road.highway",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#3c3c3c"
				      }
				    ]
				  },
				  {
				    "featureType": "road.highway.controlled_access",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#4e4e4e"
				      }
				    ]
				  },
				  {
				    "featureType": "road.local",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#616161"
				      }
				    ]
				  },
				  {
				    "featureType": "transit",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#757575"
				      }
				    ]
				  },
				  {
				    "featureType": "water",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#000000"
				      }
				    ]
				  },
				  {
				    "featureType": "water",
				    "elementType": "geometry.fill",
				    "stylers": [
				      {
				        "color": "#a8aaab"
				      }
				    ]
				  },
				  {
				    "featureType": "water",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#3d3d3d"
				      }
				    ]
				  }
				]
				    });
    
    var icon = {
        url: "img/map-marker.png", // url
        // size: new google.maps.Size(200, 150),
        // scaledSize: new google.maps.Size(200, 150), // scaled size
        origin: new google.maps.Point(0, 0), // origin
        // anchor: new google.maps.Point(87, 232) // anchor
    };
    
    var marker = new google.maps.Marker({
        position: {lat: 50.437726, lng: 30.545456},
        map: map,
        icon: icon
    });
}

initMap();