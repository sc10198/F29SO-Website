window.onblur = function () {
  window.onfocus = function () {
    location.reload(true)
  }
}

var map;
var initZoom = 13;
var clickZoom = 18;

function createMap() {
  var markers = new Array(
    new Array("Edinburgh", 55.953, -3.1883),
    new Array("Heriot Watt", 55.9097, -3.3203),
    new Array("Waverly Station", 55.9529, -3.1903),
    new Array("Fountain Park", 55.9411, -3.2156)
  )

  map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: 55.953, lng: -3.1883 },
    zoom: initZoom
  });

  for (var i = 0; i < markers.length; i++) {
    var name, lat, lng;
    name = markers[i][0];
    lat = markers[i][1];
    lng = markers[i][2];
    addMarker(name, lat, lng);
  }
}

function addMarker(name, lat, lng) {
  marker = new google.maps.Marker({
    position: { lat: lat, lng: lng },
    map: map,
    title: name
  })

  zoomToMarker(marker);
  return marker;
}

function zoomToMarker(marker) {
  marker.addListener('click', function () {
    map.setZoom(clickZoom);
    map.panTo(marker.getPosition());
  })
}

function responsiveNavbar() {
  var x = document.getElementById("myNavbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}

$(document).ready(function () {
  // JQuery Area

})
