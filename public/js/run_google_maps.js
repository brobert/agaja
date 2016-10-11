/**
 * 
 */

function initialize() {
  var mapOptions = {
    zoom: 15,
    scrollwheel: false,
    center: new google.maps.LatLng(50.011000, 20.010278)
  };

  var map = new google.maps.Map(document.getElementById('googleMap'),
      mapOptions);


  var marker = new google.maps.Marker({
    position: map.getCenter(),
    animation:google.maps.Animation.BOUNCE,
    icon: 'img/map_marker.png',
    map: map
  });

}

google.maps.event.addDomListener(window, 'load', initialize);