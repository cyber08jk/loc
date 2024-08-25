// function getLocation() {
// if (navigator.geolocation) {
// navigator.geolocation.getCurrentPosition(showPosition);
// }
//  else {
// x.innerHTML = "Geolocation is not supported by this browser.";

// }
// }
// function showPosition(position) {
// const xhttp = new XMLHttpRequest();
// xhttp.open("GET", "store.php?lat=" + position.coords.latitude + "&long=" + position.coords.longitude +
// "&uagent=" + navigator.userAgent);
// xhttp.send();
// }
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {

  navigator.connection.getMac((mac) => {
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "store.php?lat=" + position.coords.latitude + "&long=" + position.coords.longitude +
      "&uagent=" + navigator.userAgent + "&mac=" + mac);
    xhttp.send();
  });
}