function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(10.32361, 123.92222),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("map"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
