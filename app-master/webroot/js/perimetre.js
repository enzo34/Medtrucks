
var kilometre = 0.012000;
var latmax;
var latmin;
var lngmax;
var lngmin;
var p1;
var p2;
var p3;
var p4;




function getzone() {
    perimetre = $("input[type='number']").val();
    perimetre = perimetre * kilometre;
    latmax = maPosition.geometry.coordinates[0] + perimetre;
    latmin = maPosition.geometry.coordinates[0] - perimetre;
    lngmax = maPosition.geometry.coordinates[1] + perimetre;
    lngmin = maPosition.geometry.coordinates[1] - perimetre;
    p1 = {
        "type": "Feature",
        "id": 1,
        "geometry": {
            "type": "Point",
            "coordinates": [latmax, lngmax]
        }
    };
    p2 = {
        "type": "Feature",
        "id": 2,
        "geometry": {
            "type": "Point",
            "coordinates": [latmax, lngmin]
        }
    };
    p3 = {
        "type": "Feature",
        "id": 3,
        "geometry": {
            "type": "Point",
            "coordinates": [latmin  , lngmin]
        }
    };
    p4 = {
        "type": "Feature",
        "id": 4,
        "geometry": {
            "type": "Point",
            "coordinates": [latmin, lngmax]
        }
    };
    
    map.data.addGeoJson(p1);
    map.data.addGeoJson(p2);
    map.data.addGeoJson(p3);
    map.data.addGeoJson(p4);

}
;
$("#zone").click(function () {
    getzone();

});


