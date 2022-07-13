mapboxgl.accessToken = 'MASUKKAN ACCESS TOKEN MAPBOX DISINI';
var map = new mapboxgl.Map({
  container: 'mapid',//id elemen html
  style: 'mapbox://styles/mapbox/streets-v11',
  center:[107.615299, -6.8868957],//koordinat lokasi garis bujur dan lintang,longitude dan latitude
  zoom: 14 // starting zoom
});
 
var geocoder = new MapboxGeocoder({
    accessToken: mapboxgl.accessToken,
    mapboxgl: mapboxgl,
    marker:false,
    placeholder: 'Masukan kata kunci...',
    zoom:13
});
  
const nav = new mapboxgl.NavigationControl();
  map.addControl(nav, "bottom-right");
map.addControl(
    geocoder
);
let marker = null
map.on('click', function(e) {
      if(marker == null){
          marker = new mapboxgl.Marker()
          .setLngLat(e.lngLat)
          .addTo(map);
      } else {
          marker.setLngLat(e.lngLat)
      }
      lk = e.lngLat
      document.getElementById("latlong").value = e.lngLat.lat+","+e.lngLat.lng;
});


