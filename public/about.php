<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Quantanics</title>
  <!-- bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <!-- google font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <!--semantic ui cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <!-- google font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="about.css?version=<?php echo rand();?>">
</head>

<body>

    <!--- navigation bar -->

      <!--- navigation bar -->
      <!-- <nav class="navbar">
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
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="iotservice.php">Iot Services</a></li>
              <li><a class="dropdown-item" href="customersupport.php">Customer Services</a></li>
              <li><a class="dropdown-item" href="productdev.php">Product Development Serives</a></li>
              <li><a class="dropdown-item" href="Etap.php">Etap Solution</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="client.php">Our clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="work.php">Work</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-dark" href="eic.php">EIC</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary text-light" href="mailto:support@quantanics.in" role="button">Get a Quote</a>
          </li>
        </ul>
      </nav> -->
      <?php 

       require 'header.php'; 
      
      ?>

  <div class="content">


    <div class="ui segment" style="font-size:16px; margin-top:5%;border:none;">
            <img class="ui centered massive image" src="./aboutimages/abt1.jpg" style="mix-blend-mode: darken;"></div>

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
                <div class=" value num" data-val="500">
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


      <div style="padding-top:7% ;">
        <img class="ui big left floated image" src="./aboutimages/abt5.png"><br>
        <h1 >Our Vision</h1>
        <p style="font-size: 19px;">We genuinely believe the potential impact of the Internet of Things will revolutionize profitable commerce worldwide and improve sufficiently our modern lives with intelligent devices. Our principal aim is precisely to contribute
          positively to this successful revolution by digitizing every material product with our most effective innovative solutions and typically allow them to play a role in economic and social developments.
          To our loyal customers we mutually pledge moral excellence in everything we typically do, with the fulfilled promise of continuous improvement and an uncompromising commitment to properly represent the distinct best.</p>
      </div>

      <div style="padding:7% 2%;">
          <img class="ui big right floated image" src="./aboutimages/abt.png"><br>
        <h1 style="margin-top:7%;" >Our Mission</h1>
        <p style="font-size: 19px;"> To solve efficiently complex business and modern world challenges by efficiently providing digital solutions and help businesses unleash their own Internet of Things in the most cost-effective and innovative way.</p>
      </div>

      <div style="padding:9% 2%;">
        <img class="ui big left floated image" src="./aboutimages/abt4.jpg"><br>
        <h1 style="margin-top:0;">About Us</h1>
        <p style="font-size: 19px;" > Quantanics was founded in 2018 by a group of young and rejuvenated engineers who wanted to prove their stand in Industry 4.0 by making this world a better place to live. Today, we established a distinguished reputation by
          successfully developing intelligent devices and products for several industrial giants and MNCs. We find ourselves in a dominating position among our competitors, majorly because of the medley in our team with strengths in different domains
          such as Block chain, IOT, Robotics & Automation, AI , XR , Big Data & many more. We also developing industrial 3D modules and we providing technical workshops in and around TN
         for student, teaching professions and industry professions
        </p>
      </div>


    </div>
  </div>









  <?php require "footer.php"; ?>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
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
