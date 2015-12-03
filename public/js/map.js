var map;

function initMap() {
	console.log("init map ");
	map = new google.maps.Map(document.getElementById('map'), {
    	center: {lat: -34.397, lng: 150.644},
    	zoom: 8
  	});
}

console.log("map ok");
