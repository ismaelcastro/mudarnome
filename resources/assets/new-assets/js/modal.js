var modal = document.getElementById("myModal");
var plan1 = document.getElementById("plan1");
var plan2 = document.getElementById("plan2");
var plan3 = document.getElementById("plan3");
var plan4 = document.getElementById("plan4");
var span = document.getElementsByClassName("close")[0];

myModal.onclick = function() {
  modal.style.display = "block";
}
plan1.onclick = function() {
  modal.style.display = "block";
}
plan2.onclick = function() {
  modal.style.display = "block";
}
plan3.onclick = function() {
  modal.style.display = "block";
}
plan4.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
