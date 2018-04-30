function myFunction() {
  "use strict";
  var x = document.getElementById("myTopnav");
  var d = x.childNodes.length;
  console.log(d + " nice");
  if (x.className === "topnav") {
    x.className += " responsive";
    // sprawdzić czy podstrona nie jest otwarta
  } else {
    x.className = "topnav";
    var ele = document.getElementsByClassName("sublist");
    var i;
    for (i = 0; i < ele.length; i++) {
        ele[i].style.display = "none";
    }
  }
}


function showSubList(className) {
    "use strict";
    console.log(className);
    var x = document.getElementById(className);
    x.style.display = x.style.display === "block" ? "none":"block";
}

function redir(location) {
  window.location.href = location;
}

function setModal(L) {
  "use strict";

  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");


  function createFunction(trigger) {
    var  x = document.getElementById(trigger);

    function moda(){
      modal.style.display = "block";
      modalImg.src = "../img/"+trigger+".jpg";
      captionText.innerHTML = trigger;
    }

    return moda;
  }

  var pref;
  var elem;
  var i;
  for(i = 0; i < L.length; i = i + 1) {
    pref = L[i];
    elem = document.getElementById(pref);
    elem.addEventListener("click", createFunction(pref));
  }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
      modal.style.display = "none";
  }

}

function modalSetup(className) {
  "use strict";
  var L = document.getElementsByClassName(className);
  var prefixes = [];
  var i;
  for(i = 0; i < L.length; i = i+1){
    prefixes[i] = L[i].getAttribute("prefix");
  }
  setModal(prefixes);
}

window.onload = function() {
  "use strict";
  modalSetup("toTrigger");
}
