<div class="google-map-area">
    <!--  Map Section -->
    <div id="contacts" class="map-area">
        <div id="googleMap" style="width:100%;height:451px;"></div>
    </div>
</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>
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
</script>