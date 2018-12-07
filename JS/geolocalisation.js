


  var dist;
  var vraiDist;
function geoLoc(){
showPosition();

var intervalID = window.setInterval(hasMoved, 30000);
}

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
      var lastLongitude= 1*document.getElementById("currentLongitude").innerText ;
     var  lastLatitude=1*document.getElementById("lastLatitude").innerText;
      var  currentLatitude=1*document.getElementById("currentLatitude").innerText;
      var  currentLongitude=1*document.getElementById("currentLongitude").innerText;

       dist =Math.cos(currentLongitude-lastLongitude);


     vraiDist=6378137*Math.acos(((Math.sin(lastLatitude)*Math.sin(currentLatitude))+(Math.cos(lastLatitude)*Math.cos(currentLatitude)*dist)))

     document.getElementById("distance").innerText = vraiDist;
    }

    document.getElementById("currentAltitude").innerHTML = altitude;
    document.getElementById("currentLongitude").innerHTML = longitude;
    document.getElementById("currentLatitude").innerHTML = latitude;





}

function hasMoved(){
if(document.getElementById("distance").innerText != "" ){
  if((1*document.getElementById("distance").innerText)<0.5)
    alert(" Vous ne bougez plus !");
}

}
