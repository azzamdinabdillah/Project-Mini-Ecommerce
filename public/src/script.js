
var modal = document.getElementById("modal");

var modalcontent = document.getElementById("modal-content");

var btn = document.getElementById("button-create");

var span = document.getElementsByClassName("close")[0];

var closeMessage = document.getElementsByClassName("close-message")[0];
var suksesMessage = document.getElementsByClassName("sukses-message")[0];

btn.onclick = function() {
  modal.style.display = "block";
  modalcontent.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

closeMessage.onclick = function(){
  suksesMessage.style.display = "none";
  closeMessage.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
