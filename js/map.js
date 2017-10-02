function initMap() {
	var myLatLng = {lat: 345.897, lng: 123.987};

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 16,
		center: myLatLng
	});

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Hello World!'
	});
}