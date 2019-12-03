function initMap() {
  var center = { lat: -38.652967, lng: -61.768587 };
  var locations = [
    [
      'Oficina Bahía Blanca<br>\
      España 431, B8000 Bahía Blanca, Buenos Aires<br>\
   <a href="https://goo.gl/maps/RiVuSdcjGu5vLFkP6" target="_blank">Obtener indicaciones</a>',
      -38.726226,
      -62.267683
    ],
    [
      'Oficina Punta Alta<br>\
      Humberto Primo 194, B8109 Punta Alta, Buenos Aires<br>\
   <a href="https://goo.gl/maps/WBaJZv1TNDSiVY1A6" target="_blank">Obtener indicaciones</a>',
      -38.88486,
      -62.081053
    ],
    [
      'Oficina Coronel Dorrego<br>\
      Carlos Casal Varela 2180, B8150 Coronel Dorrego, Buenos Aires<br>\
    <a href="https://goo.gl/maps/FwbeufJNaBGXCn899" target="_blank">Obtener indicaciones</a>',
      -38.728709,
      -61.276532
    ]
  ];
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 8,
    center: center,
    styles: [
      {
        featureType: "poi.business",
        stylers: [
          {
            visibility: "off"
          }
        ]
      },
      {
        featureType: "poi.park",
        elementType: "labels.text",
        stylers: [
          {
            visibility: "off"
          }
        ]
      }
    ]
  });
  var infowindow = new google.maps.InfoWindow({});
  var marker, count;
  for (count = 0; count < locations.length; count++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(
        locations[count][1],
        locations[count][2]
      ),
      map: map,
      title: locations[count][0]
    });
    google.maps.event.addListener(
      marker,
      "click",
      (function(marker, count) {
        return function() {
          infowindow.setContent(locations[count][0]);
          infowindow.open(map, marker);
        };
      })(marker, count)
    );
  }
}
