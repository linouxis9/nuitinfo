
var intervalID = window.setInterval(showPosition, 500);


function showPosition(){
  if(navigator.geolocation)
    navigator.geolocation.watchPosition(maPosition);
}

function maPosition(position){

    var altitude= position.coords.altitude;
    var latitude= position.coords.latitude;
    var longitude= position.coords.longitude;

    if ( document.getElementById("currentAltitude").innerText != "" ){


      document.getElementById("lastAltitude").innerHTML = document.getElementById("currentAltitude").innerText;
      document.getElementById("lastLongitude").innerHTML = document.getElementById("currentLongitude").innerText;
      document.getElementById("lastLatitude").innerHTML = document.getElementById("currentLatitude").innerText;

    }

    document.getElementById("currentAltitude").innerHTML = altitude;
    document.getElementById("currentLongitude").innerHTML = longitude;
    document.getElementById("currentLatitude").innerHTML = latitude;




}
