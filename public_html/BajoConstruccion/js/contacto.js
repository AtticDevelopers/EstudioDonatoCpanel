// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -38.726190, lng: -62.267679};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 14, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
