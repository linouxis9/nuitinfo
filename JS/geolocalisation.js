

  var keepMoving = false;
  var dist;
  var vraiDist = 0;
  var alertSiBougePas ;

function showPosition(){

  if(navigator.geolocation)
   navigator.geolocation.watchPosition(maPosition);
}

function maPosition(position){

    var altitude= position.coords.altitude;
    var latitude= position.coords.latitude;
    var longitude= position.coords.longitude;

    if ( document.getElementById("currentAltitude").innerText != "" ){
      document.getElementById("lastAltitude").innerHTML = document.getElementById("currentAltitude").innerText+" t";
      document.getElementById("lastLongitude").innerHTML = document.getElementById("currentLongitude").innerText+" t";
      document.getElementById("lastLatitude").innerHTML = document.getElementById("currentLatitude").innerText+" t";
      var lastLongitude= 1*document.getElementById("currentLongitude").innerText ;
     var  lastLatitude=1*document.getElementById("lastLatitude").innerText;
      var  currentLatitude=1*document.getElementById("currentLatitude").innerText;
      var  currentLongitude=1*document.getElementById("currentLongitude").innerText;

      if(!isNaN(getDistance(lastLongitude,lastLatitude,currentLatitude,currentLongitude))){
         document.getElementById("distance").innerHTML = getDistance(lastLongitude,lastLatitude,currentLatitude,currentLongitude);
      }
      else{
        document.getElementById("distance").innerHTML = 0 ;
      }
    }
    document.getElementById("currentAltitude").innerHTML = altitude;
    document.getElementById("currentLongitude").innerHTML = longitude;
    document.getElementById("currentLatitude").innerHTML = latitude;
}



function getDistance (lat1,long1,lat2 ,long2){
      var latitude1 = lat1 * Math.PI / 180;
      var latitude2 = lat2 * Math.PI / 180;
      var longitude1 = long1 * Math.PI / 180;
      var longitude2 = long2 * Math.PI / 180;
      var d = 6371*(Math.acos((Math.cos(latitude1)*Math.cos(latitude2)*Math.cos(longitude2-longitude1))+(Math.sin(latitude1)*Math.sin(latitude2))));
      return d;

}

async function launchKeepMoving(){

  if(keepMoving){
    clearInterval(alertSiBougePas);
    keepMoving=false;
  }
  else{
  keepMoving = true;
    while(keepMoving){
      await sleep(30000);
        if(  document.getElementById("distance").innerHTML == 0)
        alert(" Vous ne bougez plus !");
      }
  }
}

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}
