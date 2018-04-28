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
