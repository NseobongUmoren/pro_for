
var slides; var slideIndex; var indicatorIndex; var newSlides = null; var value = "";

var getSlides = Array.from(document.querySelectorAll(".slide"));
var getIndicators = Array.from(document.querySelectorAll(".indicator"));

loadSlide(value);

getSlides[0].classList.add("slide-animate");
document.querySelectorAll(".slideText")[0].classList.add("slideText-animate");
document.querySelectorAll(".slide-btn")[0].classList.add("slide-btn-animate");

controlSlideAnimation();


// arrange all slides in their respective positions
function loadSlide (value){
  if (newSlides == null) {
    slides = document.querySelectorAll(".slide");
  }else{
    slides = newSlides;
  }

  for (let i = 0; i < slides.length; i++) {
    slides[i].classList.remove("center", "right", "left", "center-l", "right-l", "left-l", "center-r", "right-r", "left-r");
  }

  if (value == "right") {
    slides[0].classList.add("center-r");
    slides[1].classList.add("right-r");
    slides[slides.length-1].classList.add("left-r");
  } else if (value == "left") {
    slides[0].classList.add("center-l");
    slides[1].classList.add("right-l");
    slides[slides.length-1].classList.add("left-l");
  } else {
    slides[0].classList.add("center");
    slides[1].classList.add("right");
    slides[slides.length-1].classList.add("left");
  }

  displaySlides();
}

function displaySlides() {
  for (let i = 0; i < slides.length; i++) {
    var currentSlide = slides[i];

    if (slides[i].classList.contains("center") || slides[i].classList.contains("right") || slides[i].classList.contains("left") || slides[i].classList.contains("center-r") || slides[i].classList.contains("right-r") || slides[i].classList.contains("left-r") || slides[i].classList.contains("center-l") || slides[i].classList.contains("right-l") || slides[i].classList.contains("left-l")) {
      slides[i].classList.add("active");
      slides[i].classList.remove("inactive");
    }else{
      slides[i].classList.add("inactive");
      slides[i].classList.remove("active");
    }

    if (slides[i].classList.contains("center") || slides[i].classList.contains("center-r") || slides[i].classList.contains("center-l")) {
      slideIndex = getSlides.indexOf(currentSlide);

      for (let i = 0; i < getIndicators.length; i++) {
        getIndicators[i].classList.remove("active-indicator");
      }

      getIndicators[slideIndex].classList.add("active-indicator");
    }
  }
}

function thisSlide(n) {
  indicatorIndex = n-1;
  newSlides = [];

  for (let i = 0; i < getIndicators.length; i++) {
    if (indicatorIndex > getIndicators.length-1) {
      indicatorIndex = 0;
    }
    newSlides.push(getSlides[indicatorIndex]);
    indicatorIndex += 1;
  }

  loadSlide("right");
}

// move slides
function nextSlide(value) {
  if (value == "right") {
    newSlides = [];

    for (let i = 0; i < slides.length; i++) {
      if (i == slides.length-1) {
        newSlides.push(slides[0]);
      }else{
        newSlides.push(slides[i+1]);
      }
    }

  } else if (value == "left") {
    newSlides = [];
    newSlides.push(slides[slides.length-1]);

    for (let i = 0; i < slides.length-1; i++) {
      newSlides.push(slides[i]);
    }
  }

  loadSlide(value);
}

// animate slides
function controlSlideAnimation() {
  var animate;
  animateSlide();
  document.querySelector(".banner-container").addEventListener("mouseout", animateSlide);
  function animateSlide() {
    animate = setInterval(() => {
      newSlides = [];

      for (let i = 0; i < slides.length; i++) {
        if (i == slides.length-1) {
          newSlides.push(slides[0]);
        }else{
          newSlides.push(slides[i+1]);
        }
      }
    
      loadSlide("right");
    }, 5000)
  }

  document.querySelector(".banner-container").addEventListener("mouseover", pauseSlide);
  function pauseSlide() {
    clearInterval (animate);
  }
}

var Countdown = {
    countNum1: 0, countNum2: 0, countNum3: 0, countNum4: 0,
    timing1: null, timing2: null, timing3: null, timing4: null,
    value1: 700, value2: 4500, value3: 31, value4: 1200,

    membersCount: function () {
        document.getElementById("membersCount").innerHTML = Countdown.countNum1;
        Countdown.timing1 = setTimeout(Countdown.membersCount, 20);
        Countdown.countNum1 = Countdown.countNum1 + 1;

        if (Countdown.countNum1 > 10 && Countdown.countNum1 < (Countdown.value1-100)) {
            Countdown.countNum1 = Countdown.countNum1 + 50;
        }

        if (Countdown.countNum1 > Countdown.value1) {
            clearTimeout(Countdown.timing1);
        }
    },

    questionsCount: function () {
        document.getElementById("questionsCount").innerHTML = Countdown.countNum2;
        Countdown.timing2 = setTimeout(Countdown.questionsCount, 10);
        Countdown.countNum2 = Countdown.countNum2 + 1;

        if (Countdown.countNum2 > 10 && Countdown.countNum2 < (Countdown.value2-100)) {
            Countdown.countNum2 = Countdown.countNum2 + 50;
        }

        if (Countdown.countNum2 > Countdown.value2) {
            clearTimeout(Countdown.timing2);
        }
    },

    coursesCount: function () {
        document.getElementById("coursesCount").innerHTML = Countdown.countNum3;
        Countdown.timing3 = setTimeout(Countdown.coursesCount, 85);
        Countdown.countNum3 = Countdown.countNum3 + 1;

        

        if (Countdown.countNum3 > Countdown.value3) {
            clearTimeout(Countdown.timing3);
        }
    },

    repsCount: function () {
        document.getElementById("repsCount").innerHTML = Countdown.countNum4;
        Countdown.timing4 = setTimeout(Countdown.repsCount, 20);
        Countdown.countNum4 = Countdown.countNum4 + 1;

        if (Countdown.countNum4 > 10 && Countdown.countNum4 < (Countdown.value4-100)) {
            Countdown.countNum4 = Countdown.countNum4 + 50;
        }

        if (Countdown.countNum4 > Countdown.value4) {
            clearTimeout(Countdown.timing4);
        }
    }
}