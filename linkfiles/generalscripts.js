window.onblur = function () {
  window.onfocus = function () {
    location.reload(true)
  }
}

var markers = new xml("<root>\
< location>\
  <name>Edinburgh</name> <lat>55.9533</lat> <long>-3.3183</long>\
</location>\
<location>\
  <name>Heriot Watt</name><lat>55.9097</lat><long>-3.3203</long>\
</location>\
</root > ");

var map;

function createMap() {
  /*
  var EDIN = new Array("Edinburgh", 55.953, -3.1883);
  var HW = new Array("Heriot Watt", 55.9097, -3.3203);
  var WAVERLY = new Array("Waverly Station", 55.9529, -3.1903);
  var FOUNTPARK = new Array("Fountain Park", 55.9411, -3.2156);
*/

  var markers = new Array(
    new Array("Edinburgh", 55.953, -3.1883),
    new Array("Heriot Watt", 55.9097, -3.3203),
    new Array("Waverly Station", 55.9529, -3.1903),
    new Array("Fountain Park", 55.9411, -3.2156)
  )

  //var markers = new Array(EDIN, HW, WAVERLY);

  map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: 55.953, lng: -3.1883},
    zoom: 12
  });

  var pos = new google.maps.LatLng(55.9533, -3.1883);

  for (var i = 0; i < markers.length; i++) {
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(markers[i][1], markers[i][2]),
      map: map,
      title: markers[i][0]
    })
  }
}

$(document).ready(function () {
  // JQuery Area



})


/*
  var markers = new xml("<root>\
    < location>\
      <name>Edinburgh</name> <lat>55.9533</lat> <long>-3.3183</long>\
    </location>\
    <location>\
      <name>Heriot Watt</name><lat>55.9097</lat><long>-3.3203</long>\
    </location>\
  </root > ");
*/
