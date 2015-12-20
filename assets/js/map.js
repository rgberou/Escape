(function(){
    // configuration
var myZoom = 15;
var myMarkerIsDraggable = true;
var myCoordsLenght = 6;
var defaultLat = 37.973787;
var defaultLng = 23.722426;

// creates the map
// zooms
// centers the map
// sets the map's type 
var map = new google.maps.Map(document.getElementById("canvas"), {
	zoom: myZoom,
	center: new google.maps.LatLng(10.3463251,123.9087637),
	disableDefaultUI: true,
	mapTypeControl: false,
	mapTypeId: google.maps.MapTypeId.ROADMAP
});

// creates a draggable marker to the given coords
var myMarker = new google.maps.Marker({
	position: new google.maps.LatLng(10.3463251,123.9087637),
	draggable: myMarkerIsDraggable
});

var trafficLayer = new google.maps.TrafficLayer();
trafficLayer.setMap(map);
    
})();