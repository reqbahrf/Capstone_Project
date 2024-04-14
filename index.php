<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DOST-SETUP</title>
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <style>

        /*--------------------------------------------------------------
    # Hero Section
    --------------------------------------------------------------*/
    #hero {
      width: 100%;
      height: 60vh;
      background: url("../img/hero-bg.jpg") center center;
      background-size: cover;
      position: relative;
      padding: 0;
    }

    #hero:before {
      content: "";
      background: rgba(56, 64, 70, 0.7);
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
    }

    #hero .container {
      z-index: 2;
    }

    #hero h1 {
      margin: 0 0 10px 0;
      font-size: 48px;
      font-weight: 700;
      line-height: 56px;
      color: #fff;
    }

    #hero h1 span {
      border-bottom: 4px solid #3498db;
    }

    #hero h2 {
      color: rgba(255, 255, 255, 0.8);
      margin-bottom: 30px;
      font-size: 24px;
    }

    #hero .btn-get-started {
      font-family: "Poppins", sans-serif;
      font-weight: 400;
      font-size: 13px;
      letter-spacing: 2px;
      display: inline-block;
      padding: 12px 28px;
      border-radius: 4px;
      transition: ease-in-out 0.3s;
      color: #fff;
      background: #3498db;
      text-transform: uppercase;
    }

    #hero .btn-get-started:hover {
      background: #4ea5e0;
    }

    @media (max-width: 992px) {
      #hero {
        height: calc(100vh - 70px);
      }
    }

    @media (max-width: 768px) {
      #hero h1 {
        font-size: 30px;
        line-height: 36px;
      }

      #hero h2 {
        font-size: 18px;
        line-height: 24px;
        margin-bottom: 30px;
      }
    }


        /*--------------------------------------------------------------
    # Sections General
    --------------------------------------------------------------*/
        section {
      padding: 60px 0;
    }

    .section-bg {
      background-color: #f7fbfe;
    }

    .section-title {
      text-align: center;
      padding-bottom: 30px;
    }

    .section-title h2 {
      font-size: 32px;
      font-weight: 600;
      margin-bottom: 20px;
      padding-bottom: 20px;
      position: relative;
    }

    .section-title h2::before {
      content: "";
      position: absolute;
      display: block;
      width: 120px;
      height: 1px;
      background: #ddd;
      bottom: 1px;
      left: calc(50% - 60px);
    }

    .section-title h2::after {
      content: "";
      position: absolute;
      display: block;
      width: 40px;
      height: 3px;
      background: #3498db;
      bottom: 0;
      left: calc(50% - 20px);
    }

    .section-title p {
      margin-bottom: 0;
    }

    .what-we-do .icon-box {
      text-align: center;
      padding: 30px 20px;
      transition: all ease-in-out 0.3s;
      background: #fff;
    }

    .what-we-do .icon-box .icon {
      margin: 0 auto;
      width: 64px;
      height: 64px;
      background: #eaf4fb;
      border-radius: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
      transition: ease-in-out 0.3s;
    }

    .what-we-do .icon-box .icon i {
      color: #3498db;
      font-size: 28px;
    }

    .what-we-do .icon-box h4 {
      font-weight: 700;
      margin-bottom: 15px;
      font-size: 24px;
    }

    .what-we-do .icon-box h4 a {
      color: #384046;
      transition: ease-in-out 0.3s;
    }

    .what-we-do .icon-box p {
      line-height: 24px;
      font-size: 14px;
      margin-bottom: 0;
    }

    .what-we-do .icon-box:hover {
      border-color: #fff;
      box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
    }

    .what-we-do .icon-box:hover h4 a,
    .what-we-do .icon-box:hover .icon i {
      color: #3498db;
    }

    .about {
      padding: 10px 0;
    }

    .about h3 {
      font-weight: 600;
      font-size: 32px;
    }

    .about ul {
      list-style: none;
      padding: 0;
      font-size: 15px;
    }

    .about ul li+li {
      margin-top: 10px;
    }

    .about ul li {
      position: relative;
      padding-left: 26px;
    }

    .about ul i {
      position: absolute;
      left: 0;
      top: 0;
      font-size: 22px;
      color: #3498db;
    }

    .about .icon-boxes {
      padding-top: 10px;
    }

    .about .icon-boxes h4 {
      font-size: 20px;
      font-weight: 700;
      margin-top: 5px;
    }

    .about .icon-boxes i {
      font-size: 48px;
      color: #3498db;
    }

    .about .icon-boxes p {
      font-size: 15px;
      color: #848484;
    }
  </style>
</head>
<body>
<?php include("header.php"); ?>
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to <span>SETUP</span></h1>
      <h2>We provide fund assistance to any Micro, Small, Medium Businesses</h2>
      <a href="#about" class="btn-get-started scrollto">Apply Now</a>
    </div>
</section>
<section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>What We Do</h2>
          <p>Magnam dolores commodi suscipit consequatur ex aliquid</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img src="" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>About Us</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul>
            <div class="row icon-boxes">
              <div class="col-md-6">
                <i class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6 mt-4 mt-md-0">
                <i class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include("footer.php"); ?>
</body>
</html>