//les variables sont instanciés
var city ="lunel";
var donnees = {
    "type": "FeatureCollection",
    "features": []
};
var maPosition = {
	"type": "Feature",
	"id": 0,
	"geometry": {
	        "type": "Point",
                "coordinates": [
                ]
	}
};
var map;
var apigeolock="https://maps.googleapis.com/maps/api/geocode/json?address=";
var apikey="&key=AIzaSyBmZA1UMJ9zVYOMpsW_ohwEk1J2BmG11As";
var adresse ="";
var lat;
var lng;
//cette fonction renvoie l'adresse en données GPS pour ainsi l'envoyer sur la map 
function getgps(){
	adresse = $("input[type='text']").val().replace(" ","+");

	$.ajax({
		type:"GET",
		url:apigeolock+adresse+apikey,
		dataType:"json",
		success: function (data){
			lat= data.results[0].geometry.location.lat;
			lng= data.results[0].geometry.location.lng;

			maPosition.geometry.coordinates = [lng,lat];
			map.data.addGeoJson(maPosition);
			center();
		}

	});
}

//l'evenement du click sur le bouton execute la fonction getgps
$("#bouton").click(function(){
	getgps();

});

//la map ce centre sur le point lors du placement du point sur la map 
function center(){
	var pos = new google.maps.LatLng(lat,lng);
	
	map.setCenter(pos);

}
//fonction qui affiche la Map
function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: new google.maps.LatLng(48.866667,  2.333333),
          	zoom: 5
        });

}

          



