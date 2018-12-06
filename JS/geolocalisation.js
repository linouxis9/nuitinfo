

  var dist;
  var vraiDist;
function geoLoc(){
var intervalID = window.setInterval(showPosition, 200);

//var intervalID = window.setInterval(hasMoved, 1500);
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
      console.log("ye s");
       dist =Math.cos(currentLongitude-lastLongitude);

      console.log("no");


     vraiDist=Math.acos((Math.cos((Math.sin(lastLatitude)*Math.sin(currentLatitude))+(Math.cos(lastLatitude)*Math.cos(currentLatitude)*dist))))

     document.getElementById("distance").innerText = vraiDist;
    }

    document.getElementById("currentAltitude").innerHTML = altitude;
    document.getElementById("currentLongitude").innerHTML = longitude;
    document.getElementById("currentLatitude").innerHTML = latitude;





}

function hasMoved(){




//  alert(" Vous ne bougez plus !")
}
