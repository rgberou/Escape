function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(10.32361, 123.92222),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("map"), mapProp);
  var counter=0;
  var currentpath;
  var destinations=new google.maps.MVCArray();
  destinations.push(new google.maps.latlng(123.9489201,10.3270085));
  destinations.push(new google.maps.latlng(10.3382653,123.9422683));
  var lineOptions={path:destinations,strokeColor:"#ff0000",strokeWeight:10};
  var polyline=new google.maps.Polyline(lineOptions);
  polyline.setMap(map);
  google.maps.event.addListener(map,'click',function (e){

  		currentpath=destinations.getPath();
  		currentpath.push(e.latLng);
  		

  });

  
  
}
google.maps.event.addDomListener(window, 'load', initialize);
