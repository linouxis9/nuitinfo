

function showPosition(){
  if(navigator.geolocation)
    navigator.geolocation.getCurrentPosition(maPosition);
}

function maPosition(position){

    var altitude= position.coords.altitude;
    var latitude= position.coords.latitude;
    var longitude= position.coords.longitude;
//  if(navigator.geolocation){

    document.getElementById("altitude").innerHTML = altitude;
  document.getElementById("longitude").innerHTML = longitude;
    document.getElementById("latitude").innerHTML = latitude;


}


function maPosition(position){

    var latitude= position.coords.latitude;
    var longitude= position.coords.longitude;


}

function eachMinutesPosition(){

  setTimeout(,60000);
}

function hasMoved(){
  document.getElementById("longitude").innerHTML
}
