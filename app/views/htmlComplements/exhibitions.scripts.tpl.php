<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>

<script>
$(document).ready(function(){/* google maps -----------------------------------------------------*/
google.maps.event.addDomListener(window, 'load', initialize);

function initialize() {

  /* position Amsterdam */
  var latlng = new google.maps.LatLng(25.8102392,-80.1956752);

  var mapOptions = {
    center: latlng,
    scrollWheel: false,
    zoom: 13
  };
  
  var marker = new google.maps.Marker({
    position: latlng,
    url: '/',
    animation: google.maps.Animation.DROP,
    title: "Art Fusion Galleries"
  });
  
  var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
  marker.setMap(map);

};
/* end google maps -----------------------------------------------------*/
});
</script>