var lat;
var lng;


var maPosition = {
	"type": "Feature",
	"id": 0,
	"geometry": {
	        "type": "Point",
                "coordinates": [
                   
                ]
	}
};
//fonction en Ajax qui va renvoyé tout les centres . 
function getHopitaux() {


   
    $.ajax({
        type: "GET",
        url: "http://localhost/projets/medtrucks/app-master/hopitaux/getcentres",
        dataType: "json",
//        data: {typehopitaux: "type"},
        success: function (data) {
            for (var i=0;i<data.length;i++) {
                var item = data[i];
                var feat = {
                    "type":"Feature",
                    "id":item.id,
                    "geometry":{
                        "type":"point",
                        "coordinates":[item.coord.lat,item.coord.lng]
                    }
                }
                donnees.features.push(feat);
            }
            map.data.addGeoJson(donnees);
        }});
}

function getpoint() {


   
    $.ajax({
        type: "GET",
        url: "http://projets.medtrucks/hopitaux/getcentres",
        dataType: "json",
//        data: {typehopitaux: "type"},
        success: function (data) {
            for (var i=0;i<data.length;i++) {
                var item = data[i];
                var feat = {
                    "type":"Feature",
                    "id":item.id,
                    "geometry":{
                        "type":"point",
                        "coordinates":[item.coord.lat,item.coord.lng]
                    }
                }
                donnees.features.push(feat);
            }
            map.data.addGeoJson(donnees);
        }});
}
$("#point").click(function(){
	getpoint();

});
