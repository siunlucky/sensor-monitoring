var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

function togglemenu(){
    document.getElementById('sidebar').classList.toggle('active');
    document.getElementById('page').classList.toggle('active');
}

function onOffStatus(){
  // Get the checkbox
  var checkBox = document.getElementById("{{!! {{ $spot->name }} !!}");
  // Get the output text
  var on = document.getElementById("statuson");

  var off = document.getElementById("statusoff");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    on.style.display = "block";
    off.style.display = "none";
  } else {
    on.style.display = "none";
    off.style.display = "block";
  }
}



var modal = document.getElementById("changePasswordModal");

// Get the button that opens the modal
var btn = document.getElementById("changePassword");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  document.getElementById('changePasswordModal').classList.toggle('visible');
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  document.getElementById('changePasswordModal').classList.toggle('visible');
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    document.getElementById('changePasswordModal').classList.toggle('visible');
  }
}



function showPassword() {
  var x = document.getElementById("oldPassword");
  var y = document.getElementById("newPassword");
  var z = document.getElementById("confirmNewPassword");
  if (x.type === "password") {
    x.type = "text";
    y.type = "text";
    z.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
    z.type = "password";
    
  }
}

document.addEventListener("DOMContentLoaded", function() {
  var elements = document.getElementsByTagName("INPUT");
  for (var i = 0; i < elements.length; i++) {
      elements[i].oninvalid = function(e) {
          e.target.setCustomValidity("");
          if (!e.target.validity.valid) {
              e.target.setCustomValidity("This field cannot be left blank");
          }
      };
      elements[i].oninput = function(e) {
          e.target.setCustomValidity("");
      };
  }
})

function showContent(id) { 
  var show = document.getElementById("show"+id)
  if (show.style.display === "block") {
    show.style.display = "none";
  } else {
    show.style.display = "block";
  }
}




