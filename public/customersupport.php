<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Quantanics</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- google font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--semantic ui cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
    integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
  <link rel="stylesheet" href="customersupport1.css?version=<?php echo rand();?>">
</head>

<body>

  <!--- navigation bar -->

  <!--- navigation bar -->
  <nav class="navbar">
    <span class="navbar-brand mb-0 h1">
      <img src="./logo1.png" alt="" style="width:8%;">QUANTANICS TECHSERV PVT LTD
    </span>

    <ul class="nav justify-content-end">

      <li class="nav-item">
        <a class="nav-link text-dark" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark " aria-current="page" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
          data-bs-toggle="dropdown" aria-expanded="false">
          Services
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="iotservice.html">Iot Services</a></li>
          <li><a class="dropdown-item" href="customersupport.php">Customer Services</a></li>
          <li><a class="dropdown-item" href="productdev.html">Product Development Serives</a></li>
          <li><a class="dropdown-item" href="Etap.html">Etap Solution</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="client.html">Our clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="contact.html">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="work.html">Work</a>
      </li>

      <li class="nav-item">
        <a class="btn btn-primary text-light" href="mailto:support@quantanics.in" role="button">Get a Quote</a>
      </li>
    </ul>
  </nav>
  <div class="content">

    <img class="ui fluid image" src=" ./servicesimg/customerserviceimages/img1.png?version='<?php echo rand(); ?>'">
    <div class="texts">
      <h1>We are deeply engaged with Customers & provide Services for Iot,
        Machine learning & Artificial intelligence products. </h1>
    </div>
    <div class="ui segment" style="font-size:16px; margin:0;padding-bottom:5%;border:none;">
      <div class="ui four statistics" style="margin-top:3%;">
        <div class="statistic">
          <div class="value num" data-val="250">
            0
          </div>
          <div class="label">
            PRODUCTS
          </div>
        </div>
        <div class="statistic">
          <div class="value num" data-val="500">
            0
          </div>
          <div class="label">
            MVP's
          </div>
        </div>
        <div class="statistic">
          <div class="value num" data-val="25">
            0
          </div>
          <div class="label">
            AWARDS
          </div>
        </div>
        <div class="statistic">
          <div class="value num" data-val="30">
            0
          </div>
          <div class="label">
            TEAM MEMBERS
          </div>
        </div>
      </div>

      <div style="padding:5% 2%;">
        <img class="ui large left floated image" src="./servicesimg/customerserviceimages/img2.jpeg"><br>
        <h1 style="padding-top:7%;">Installation & Testing</h1>
        <p style="font-size: 20px;">Our well trained service engineers will ensure safe and proper installation of your products. They will
          demonstrate how to use and handle the product for better life cycle. Hence its leads to better goodwill of
          your company.</p>
      </div>
 
      <div style="padding-top:11%;">
        <img class="ui large right floated image" src="./servicesimg/customerserviceimages/img3.jpg"><br>
        <h1 style="padding:2% 0;">Upgradation</h1>
        <p style="font-size: 20px;">User needs, technologies and market trends are fast changing. It is required to continuously upgrade System
          Software, Hardware and Embedded Software of existing products and deliver value continuously. We help you to
          upgrade your products and solutions when and where required.</p>
      </div>

      <div style="padding:7% 2%;">
        <img class="ui large left floated image" src="./servicesimg/customerserviceimages/img4.jpg"><br>
        <h1 style="padding: 2% 0;">Maintenance</h1>
        <p style="font-size: 20px;">Electronics and IT Systems requires proper maintenance in order to make their availability high. We provide
          managed services through Comprehensive Annual Maintenance Contract with real time monitoring of equipment
          functionality and perform predictive maintenance.</p>
      </div>
    </div>


  </div>












  <!-- Footer -->
  <footer class="text-center text-lg-start  text-muted" style="background-color: #38acec;font-weight:bolder;">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block " style="padding-left:8%;">
        <span class="text-light">Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div style="padding-right:8%;">
        <a href="https://m.facebook.com/quantanics.in/posts" class="me-4 text-reset">
          <i class="fab fa-facebook-f text-light"></i>
        </a>
        <a href="https://twitter.com/quantanics_in" class="me-4 text-reset">
          <i class="fab fa-twitter text-light"></i>
        </a>
        <a href=" https://www.youtube.com/channel/UCv_iPrXQV1YsT-0BaPCV40w" class="me-4 text-reset">
          <i class="fab fa-youtube text-light"></i>
        </a>
        <a href="http://quantanics.in" class="me-4 text-reset">
          <i class="fab fa-google text-light"></i>
        </a>

        <a href=" https://in.linkedin.com/in/quantanics-techserv-pvt-ltd-51a92920b" class="me-4 text-reset">
          <i class="fab fa-linkedin text-light"></i>
        </a>

      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4 text-light">
              Quantanics Techserv Pvt Ltd.
            </h6>
            <p class="text-light" style="text-align:justify">
              <img src="./indexpageimages/img4.jpg" alt="" style="width:90%;">
          </div>
          <!--
                Quantanics was founded in 2018 by a group of young and rejuvenated engineers who wanted to prove their stand in Industry 4.0 by making this world a better place to live.
                Today, Quantanics has established a distinguished reputation by successfully developing intelligent devices and products for several industrial giants and MNCs.</p>
             -->
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 text-light">
              Products
            </h6>
            <p class="text-light">
              <a href="#!" class="text-reset text-light" style="text-decoration:none;">Internet of Things</a>
            </p>
            <p class="text-light">
              <a href="#!" class="text-reset text-light" style="text-decoration:none;">Machine Learning</a>
            </p>
            <p class="text-light">
              <a href="#!" class="text-reset" style="text-decoration:none;">Artificial Intelligence</a>
            </p>
            <p class="text-light">
              <a href="#!" class="text-reset text-light" style="text-decoration:none;">Web Development</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 text-light">
              Quick links
            </h6>
            <p class="text-light">
              <a href="#!" class="text-reset text-light" style="text-decoration:none;">Why Choose Us</a>
            </p>
            <p class="text-light">
              <a href="#!" class="text-reset text-light" style="text-decoration:none;">Our Team</a>
            </p>
            <p class="text-light">
              <a href="#!" class="text-reset text-light" style="text-decoration:none;">Partners</a>
            </p>
            <p class="text-light">
              <a href="#!" class="text-reset text-light" style="text-decoration:none;">Our Customers</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 text-light">
              Contact
            </h6>
            <p class="text-light"><i class="fas fa-home me-3 text-light"></i>No.206,Vellaikannu Nagar,<br>
              <i class="fas fa-envelope me-3 " style="color: #38acec;"></i>Theni main road,<br><i
                class="fas fa-envelope me-3 " style="color: #38acec;"></i>Madurai-625016,India.
            </p>
            <p class="text-light">
              <i class="fas fa-envelope me-3 text-light"></i>
              support@quantanics.in
            </p>
            <p class="text-light"><i class="fas fa-phone me-3 text-light"></i>+91 7010897188 </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->


        <!--chatbot--->

        <a class="btn btn-light text-dark chat" onclick="show()" role="button">Let's Start a convo with us!</a>

        <div id="box">
          <div class="top">
            <h1>Ask your Question??<div class="button1"><button onclick="show()"><i class="fa fa-times"></i></button>
                &emsp;</div>
            </h1>
          </div>
          <div class="mid">
            <div class="chat">
              <h2>Answer for your questions are below.....</h2>
              <p id="chatLog">let's chat</p>
            </div>
          </div>
          <div class="input">
            <input id="userBox" type="text" autocomplete="off" onkeydown="if (event.keyCode == 13) {talk()}"
              placeholder="type your questions">

            <button class="button" onclick="talk()"><i style="font-size: 25px;" class="fa fa-paper-plane"></i></button>
          </div>
        </div>




      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4 text-light" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright:
      <a class="text-reset fw-bold text-light" href="www.quantanics.in" style="text-decoration:none;">Quantanics
        TechServ Pvt Ltd,. All Rights Reserved.</a>
      <a class="text-center p-4 text-light" href="privacy.html" style="text-decoration:underline;"> Privacy Policy </a>
      <a class="text-center p-4 text-light" href="refund.html" style="text-decoration:underline;"> Refund Policy </a>
      <a class="text-center p-4 text-light" href="t&c.html" style="text-decoration:underline;"> Terms and Conditions
      </a>

    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->






  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"
    integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    let valueDisplays = document.querySelectorAll(".num");
    let interval = 4000;
    valueDisplays.forEach((valueDisplay) => {
      let startvalue = 0;
      let endvalue = parseInt(valueDisplay.getAttribute("data-val"));
      let duration = Math.floor(interval / endvalue);
      let counter = setInterval(function () {
        startvalue += 1;
        valueDisplay.textContent = startvalue;
        if (startvalue == endvalue) {
          clearInterval(counter);
        }
      }, duration);
    });
  </script>




</body>

</html>