<html>

  <head>

  <!-- Include CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

   <!-- CSS Untuk Peta -->
   <style>
    #mapid { height: 500px;
    
     }
   </style>


  
  </head>


  <body>
    <!-- Tempat Peta Ditampilkan -->
    <div id="mapid"></div>

    <script>
    var mymap = L.map('mapid').setView([51.505, -0.09], 13);
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoibWhhbWRpdHMiLCJhIjoiY2pvbWMzZDgyMDhoMTNrcXhiM2ppeW15biJ9.Tj1mLRKxL3KfmiV_VvYyCQ'
}).addTo(mymap);

    var geojsonFeature = {
        "type": "Feature",
        "properties": {
            "name": "Coors Field",
            "amenity": "Baseball Stadium",
            "popupContent": "This is where the Rockies play!"
        },
        "geometry": {
            "type": "Point",
            "coordinates": [-104.99404, 39.75621]
        }
    };

    var videoUrls = [
        'https://www.mapbox.com/bites/00188/patricia_nasa.webm',
        'https://www.mapbox.com/bites/00188/patricia_nasa.mp4'
    ];

    var bounds = L.latLngBounds([[ 32, -130], [ 13, -100]]);

    var videoOverlay = L.videoOverlay( videoUrls, bounds, {
        opacity: 0.5
    }).addTo(mymap);


console.log(geojsonFeature);
L.geoJSON(geojsonFeature).addTo(mymap);




    var greenIcon = L.icon({
        iconUrl: 'https://image.flaticon.com/icons/svg/69/69904.svg',
        shadowUrl: 'leaf-shadow.png',

        iconSize:     [38, 95], // size of the icon
        shadowSize:   [50, 64], // size of the shadow
        iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    var iconRumah = L.icon({
        iconUrl: 'https://image.flaticon.com/icons/png/512/1119/1119128.png',
        shadowUrl: 'leaf-shadow.png',

        iconSize:     [38, 45], // size of the icon
        shadowSize:   [50, 64], // size of the shadow
        iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    var marker1 = L.marker([51.5, -0.09], {icon: greenIcon}).addTo(mymap);

    var marker2 = L.marker([51.6, -0.09]).addTo(mymap);
    var circle = L.circle([51.508, -0.11], {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5,
      radius: 500
    }).addTo(mymap);

    var polygon = L.polygon([
      [51.509, -0.08],
      [51.503, -0.06],
      [51.51, -0.047]
    ]).addTo(mymap);

    marker1.bindPopup('<h4>Test</h4>'+
      '<img src="cover (177).jpg" width="200">'+
      '<table border="1"><tr><td>Hello</td><td>Hi</td></tr></table>');

    marker2.bindPopup('<h4>Test</h4>'+
      '<img src="cover (177).jpg" width="200">'+
      '<table border="1"><tr><td>Hello</td><td>Hi</td></tr></table>');

    circle.bindPopup('<h4>Test</h4>'+
      '<img src="cover (177).jpg" width="200">'+
      '<center><table border="1" cellpadding="10" cellspacing="0"><tr><td>Hello</td><td>Hi</td></tr></table></center>');

    function onMapClick(e) {
        alert("You clicked the map at " + e.latlng);
        var marker1 = L.marker(e.latlng, {icon: iconRumah}).addTo(mymap);
        marker1.bindPopup('Hi! Cantik<br><img src="cover (177).jpg" width="200">');
    }

    mymap.on('click', onMapClick);

    </script>
  
  </body>




</html>