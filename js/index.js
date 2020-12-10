function buttonClick(btnName) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     window.location = this.responseURL;
    }
  };
  xhttp.open("GET", "page.php?btnName="+btnName, true);
  xhttp.send();
}

// menu display controls

var menu = document.querySelector(".menu").classList;
window.addEventListener("resize", hideMenu);

function toggleMenu() {
  var changeIcon = document.querySelector(".menu-btn").classList;
  if (changeIcon.contains("fa-bars")) {
    changeIcon.replace("fa-bars", "fa-window-close");
    menu.add("menu-show");
  } else {
    changeIcon.replace("fa-window-close", "fa-bars");
    menu.remove("menu-show");
  }
}

function hideMenu() {
  var changeIcon = document.querySelector(".menu-btn").classList;
  if (menu.contains("menu-show")) {
    menu.remove("menu-show");
    changeIcon.replace("fa-window-close", "fa-bars")
  }
}

// side bar display controls

var chooseDisplay = document.querySelector(".sidebar").classList;
window.addEventListener("resize", hideSideBar);

function toggleSideBar() {
  var changeIcon = document.querySelector(".sidebar-btn").classList;
  if (changeIcon.contains("fa-bars")) {
    changeIcon.replace("fa-bars", "fa-window-close");
    chooseDisplay.add("sidebar-display");
  } else {
    changeIcon.replace("fa-window-close", "fa-bars")
    chooseDisplay.remove("sidebar-display");
  }
}

function hideSideBar() {
  var changeIcon = document.querySelector(".sidebar-btn").classList;
  if (chooseDisplay.contains("sidebar-display")) {
    chooseDisplay.remove("sidebar-display");
    changeIcon.replace("fa-window-close", "fa-bars")
  }
}

// side bar list display controls

var listDisplay = document.querySelector(".sidebar-list").classList;

function toggleList() {
  var changeIcon = document.querySelector(".list-btn").classList;
  if (changeIcon.contains("fa-angle-down")) {
    changeIcon.replace("fa-angle-down", "fa-angle-up");
    listDisplay.add("list-display");
  } else {
    changeIcon.replace("fa-angle-up", "fa-angle-down");
    listDisplay.remove("list-display");
  }
}