var map;
// poisition get json from view hueheue
console.log(position);

function initMap() {
	console.log(position);
	console.log(position[0]);

	map = new google.maps.Map(document.getElementById('map'), {
    	center: {lat: position[0].lat, lng: position[0].lng},
    	zoom: 6
  	});

	var marker;
	for(p in position){
		marker = new google.maps.Marker({
			map: map,
			position: {lat: p.lat, lng: p.lng},
			title: p.label
		});
	}
}

console.log("map ok");
