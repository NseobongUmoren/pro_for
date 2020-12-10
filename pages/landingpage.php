<div id="index">
  <!-- ============= banner ========== -->
  <div class="banner-container">
    <div class="slide slide1 fade">
      <p class="slideText">Let's Code Together</p>
      <a class="slide-btn buttons" href="">Learn More</a>
    </div>
    <div class="slide slide2 fade">
      <p class="slideText">Join Our Online Community</p>
      <a class="slide-btn buttons" href="">Join Us</a>
    </div>
    <div class="slide slide3 fade">
      <p class="slideText">Explore Our Courses</p>
      <a class="slide-btn buttons" href="">Explore</a>
    </div>
    <a class="prev" onclick="nextSlide('left')">&#10094;</a>
    <a class="next" onclick="nextSlide('right')">&#10095;</a>
    <div class="indicator-container">
      <span class="indicator" onclick="thisSlide(1)"></span>
      <span class="indicator" onclick="thisSlide(2)"></span>
      <span class="indicator" onclick="thisSlide(3)"></span>
    </div>
  </div>

  <!-- ============ services section ============ -->
  <section id="servSec" class="sections">
    <div class="cards cards-w3">
      <i class="fas fa-question-circle icons"></i>
      <p class="cardText">Questions and Answers</p>
      <button type="button" class="buttons" name="questions-answers-btn"
        onclick="buttonClick('questions-answers')">Learn More</button>
    </div>
    <div class="cards cards-w3">
      <i class="fas fa-archive icons"></i>
      <p class="cardText">Repositories</p>
      <button type="button" class="buttons" name="repositories-btn" onclick="buttonClick('repositories')">Learn
        More</button>
    </div>
    <div class="cards cards-w3">
      <i class="fas fa-laptop icons"></i>
      <p class="cardText">Digital Marketing</p>
      <button type="button" class="buttons" name="digital-marketing-btn"
        onclick="buttonClick('digital-marketing')">Learn More</button>
    </div>
    <div class="cards cards-w3">
      <i class="fas fa-address-card icons"></i>
      <p class="cardText">Hire a Developer</p>
      <button type="button" class="buttons" name="hire-developer-btn" onclick="buttonClick('hire-developer')">Learn
        More</button>
    </div>
  </section>

  <!-- ========== count section ============== -->
  <section id="countSec" class="sections">
    <div class="cards cards-w3">
      <i class="fas fa-users icons"></i>
      <p class="count">700</p>
      <p>Members</p>
    </div>
    <div class="cards cards-w3">
      <i class="far fa-question-circle icons"></i>
      <p class="count">4500</p>
      <p>Questions</p>
    </div>
    <div class="cards cards-w3">
      <i class="fas fa-book-open icons"></i>
      <p class="count">31</p>
      <p>Courses</p>
    </div>
    <div class="cards cards-w3">
      <i class="fas fa-archive icons"></i>
      <p class="count">1200</p>
      <p>Repositories</p>
    </div>
  </section>

  <!-- =========== courses section ============= -->
  <section id="coursesSec" class="sections">
    <h2 class="section-header">Become a Developer</h2>
    <div class="cards cards-w4">
      <div class="coursesSecImages-1"></div>
      <p class="cardText">Learn the basic structure of a website with the improved HTML5</p>
      <a class="buttons" href="">Learn More</a>
    </div>
    <div class="cards cards-w4">
      <div class="coursesSecImages-2"></div>
      <p class="cardText">Learn how to create beautifully styled websites</p>
      <a class="buttons" href="">Learn More</a>
    </div>
    <div class="cards cards-w4">
      <div class="coursesSecImages-3"></div>
      <p class="cardText">Learn how to add interactivity to your site with the power of Javascript</p>
      <a class="buttons" href="">Learn More</a>
    </div>
  </section>

  <!-- ============ dev section =================== -->
  <section id="devSec" class="sections">
    <h2 class="section-header">Already a Developer?</h2>
    <div class="cards cards-w4">
      <div class="devSecImages-1"></div>
      <p class="cardText">Join our team of developers</p>
      <a class="buttons" href="pages/register.php">Join Us</a>
    </div>
    <div class="cards cards-w4">
      <div class="devSecImages-2"></div>
      <p class="cardText">Give your input to our online community</p>
      <a class="buttons" href="">Learn More</a>
    </div>
    <div class="cards cards-w4">
      <div class="devSecImages-3"></div>
      <p class="cardText">Take a job</p>
      <a class="buttons" href="">Learn More</a>
    </div>
  </section>

  <!-- =============resources section ============= -->
  <section id="resSec" class="sections">
    <h2 class="section-header">Our Resources</h2>
    <div class="cards cards-w4">
      <h4 class="card-header">Web Development</h4>
      <ul class="card-list">
        <li class="card-list-items"><a href="">HTML and CSS</a></li>
        <li class="card-list-items"><a href="">Javascript</a></li>
        <li class="card-list-items"><a href="">PHP</a></li>
        <li class="card-list-items"><a href="">MySQL</a></li>
      </ul>
    </div>
    <div class="cards cards-w4">
      <h4 class="card-header">Software Engineering</h4>
      <ul class="card-list">
        <li class="card-list-items"><a href="">Python</a></li>
        <li class="card-list-items"><a href="">Java</a></li>
        <li class="card-list-items"><a href="">C++</a></li>
        <li class="card-list-items"><a href="">Swift</a></li>
      </ul>
    </div>
    <div class="cards cards-w4">
      <h4 class="card-header">IT</h4>
      <ul class="card-list">
        <li class="card-list-items"><a href="">Machine Language</a></li>
        <li class="card-list-items"><a href="">Data Science</a></li>
        <li class="card-list-items"><a href="">IOT</a></li>
        <li class="card-list-items"><a href="">AI</a></li>
      </ul>
    </div>
  </section>
</div>