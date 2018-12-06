
var intervalID = window.setInterval(showPosition, 500);


function showPosition(){
  if(navigator.geolocation)
    navigator.geolocation.getCurrentPosition(maPosition);
}

function maPosition(position){

    var altitude= position.coords.altitude;
    var latitude= position.coords.latitude;
    var longitude= position.coords.longitude;

    if ( document.getElementById("currentAltitude").innerHTML == null ){
      document.getElementById("lastAltitude").innerHTML = document.getElementById("currentAltitude").innerHTML ;
      document.getElementById("lastLongitude").innerHTML = document.getElementById("currentLongitude").innerHTML ;
      document.getElementById("lastLatitude").innerHTML = document.getElementById("currentLatitude").innerHTML ;
    }

    document.getElementById("currentAltitude").innerHTML = altitude;
    document.getElementById("currentLongitude").innerHTML = longitude;
    document.getElementById("currentLatitude").innerHTML = latitude;





}

var intervalID = window.setInterval(showPosition, 5000);
