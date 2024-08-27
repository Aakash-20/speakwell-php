<?php
include 'db_con.php';

$sql = "SELECT * FROM blogs ORDER BY id DESC";
$result = mysqli_query($con, $sql);

$blogs = [];
while ($row = mysqli_fetch_assoc($result)) {
    $blogs[] = $row;}


$widget_sql = "SELECT * FROM widgets WHERE id = 1"; 
$widget_result = mysqli_query($con, $widget_sql);
$widget = mysqli_fetch_assoc($widget_result);

$sql = "SELECT * FROM images ORDER BY created_at DESC";
$result = mysqli_query($con, $sql);
$images = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
  <head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HWBKGXF7C0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HWBKGXF7C0');
</script>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link rel="stylesheet" href="css/swadmin.css">

    <link rel="stylesheet" href="css/swheader.css" />

    <link rel="stylesheet" href="css/swshow.css" />

    <link rel="stylesheet" href="css/swwhyus.css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/swfooter.css" />

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700,900" rel="stylesheet">
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/614007/f2-common.css'>
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/614007/swiper.min.css'>
    <link rel="stylesheet" href="css/swkeyfactor.css"/>

    <link rel="stylesheet" href="css/swabout.css" />

    <link rel="stylesheet" href="css/swgallery.css"/>

    <link rel="stylesheet" href="css/swblog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>

  </head>
  <body>
    <div class="body-root">
      <div class="body-section">
        
        <header class="header">
          <nav class="navbar">
            <a href="#" class="logo">
                <img src="background/swl.png" alt="SpeakWell" class="logo-img">
            </a>
            <input type="checkbox" id="menu-toggle" />
            <label for="menu-toggle" id="hamburger-btn">&#9776;</label>
            <ul class="links">
    <li><a href="index.php">Home</a></li>
    <li><a href="#keyfactor">Key Factors</a></li>
    <li><a href="#gallery">Gallery</a></li>
    <li><a href="#blog">Blogs</a></li>
    <li><a href="#about">About Us</a></li>
    <li><a href="contactUs.php">Contact Us</a></li>
</ul>

          </nav>
        </header>

        <img src="background/sw.jpg" alt="Description of Image" class="header-image">

        <div class="main-wrapper" id="keyfactor">
        <div class="sl-main-container">
              <div class="sl-header-wrapper">
              <h3>Our Key Factors</h3>
              <!-- navigation buttons -->
              <div class="sl-nav">
                  <div class="swiper-button-next">
                  </div>
                  <div class="swiper-button-prev">
                  </div>
              </div>
              </div>
  
              <div class="sl-wrapper">
              <!-- Slider main container -->
              <div class="swiper-container">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                  <!-- Slides -->
  
                  <div class="swiper-slide sl--slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-1 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Institutes For Interview Skill</h2>
                          <p class="sl--card-content">Our institute is the best for these training, with the best and trained of professionals in this field.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="slide-cover"></div>
                    <div class="sl-card-wrapper">
                    <div class="sl-gradient"></div>
                    <div class="sl-img-24 sl-bkg-img"></div>
                    <div class="sl--content-wrapper sl--content-wrapper-inactive">
                        <div class="sl--content-container sl--card-hide">
                        <h2>Institutes For IELTS</h2>
                        <p class="sl--card-content">We aim to be the best institute for IELTS by designed courses & highlt experienced staff.</p>
                        <button class="sl--link">ENQUIRY</button>
                        </div>

                        <!-- Card Nav GRP -->
                        <div class="sl--card-nav-container">
                        <!-- Reveal info btn -->
                        <div class="sl--content-btn content-reveal-btn">
                            <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                </svg>
                        </div>
                        </div>
                        <!-- END: Card Nav GRP -->
                    </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slide-cover"></div>
                    <div class="sl-card-wrapper">
                    <div class="sl-gradient"></div>
                    <div class="sl-img-25 sl-bkg-img"></div>
                    <div class="sl--content-wrapper sl--content-wrapper-inactive">
                        <div class="sl--content-container sl--card-hide">
                        <h2>Tutorials For TOEFL Entrance</h2>
                        <p class="sl--card-content">We provide the interactive tutorials for students preparing for TOEFL entrance to make them understand better.</p>
                        <button class="sl--link">ENQUIRY</button>
                        </div>

                        <!-- Card Nav GRP -->
                        <div class="sl--card-nav-container">
                        <!-- Reveal info btn -->
                        <div class="sl--content-btn content-reveal-btn">
                            <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                </svg>
                        </div>
                        </div>
                        <!-- END: Card Nav GRP -->
                    </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slide-cover"></div>
                    <div class="sl-card-wrapper">
                    <div class="sl-gradient"></div>
                    <div class="sl-img-26 sl-bkg-img"></div>
                    <div class="sl--content-wrapper sl--content-wrapper-inactive">
                        <div class="sl--content-container sl--card-hide">
                        <h2>Image Consultants</h2>
                        <p class="sl--card-content">We provide image Consultants to clients to improve their apperance for personal or professional reason.</p>
                        <button class="sl--link">ENQUIRY</button>
                        </div>

                        <!-- Card Nav GRP -->
                        <div class="sl--card-nav-container">
                        <!-- Reveal info btn -->
                        <div class="sl--content-btn content-reveal-btn">
                            <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                </svg>
                        </div>
                        </div>
                        <!-- END: Card Nav GRP -->
                    </div>
                    </div>
                </div>
                
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-2 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Group Discussion Class</h2>
                          <p class="sl--card-content">A group discussion is a group of individuals, in the form of a circle with similar interests.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-3 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Training Group Discussion</h2>
                          <p class="sl--card-content">We are renowned for providing you the best range of training group discussion.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-4 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Tutorials For Group Discussion</h2>
                          <p class="sl--card-content">We provide Efficient and excellent staff and professionals who take Tutorials for group discussion.</p>    
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-5 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Soft Skill Training Center</h2>
                          <p class="sl--card-content">We offer the best soft skill training center which bring learning up the workforce timely and effectively.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-6 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Language Classes For English Grammer</h2>
                          <p class="sl--card-content">We provide language training for English Grammer & make sure the students learn the language efficiently.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-7 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Tutorials For English Grammer</h2>
                          <p class="sl--card-content">We offer tutors for English Grammer students, professional faculty and best attention given to students.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-8 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Tutorials For Interview</h2>
                          <p class="sl--card-content">We have the most efficient team that provides best tutorials for all kinds of interviews.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-9 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Language Classes For Corporate English</h2>
                          <p class="sl--card-content">We are one of the recognized & most popular language classes for corporate English with best tutors.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-10 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Spoken English Workshops</h2>
                          <p class="sl--card-content">Our team of experienced tutors excels in organizing English speaking workshops for our clients.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-11 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Language Classes For English Conversation</h2>
                          <p class="sl--card-content">We are one of the recognized & most popular language classes for English conversation with best tutors</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-12 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Institutes For Personality Development</h2>
                          <p class="sl--card-content">We introduce ourselves as one of the best institute by offering quality courses for personality development.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-13 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Institutes For Communicaton Skill</h2>
                          <p class="sl--card-content">Study integrated cources for Communicaton Skill and pass out with flying colours!<br> Contact us to know more!</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-14 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Language Class English Spoken Certificate Course</h2>
                          <p class="sl--card-content">Counted among the illustrious firms, we are engrossed in providing english spoken certificate courses.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-15 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Personal Grooming Classes</h2>
                          <p class="sl--card-content">Want an appealing image and a confident personality? <br>Contact us and we would groom you completely. </p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-16 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Institutes For Interview Skill</h2>
                          <p class="sl--card-content">Our institute is the best for these training, with the best and trained of professionals in this field.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
                  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-17 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Interview Technique Training</h2>
                          <p class="sl--card-content">Our experties lies in rendering expert advice and techniques to be used for taking up an interview round.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-18 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Personality Development</h2>
                          <p class="sl--card-content">We own personality development classes for individuals of all age groups for them to polish their personality.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-19 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Communication Training Centres</h2>
                          <p class="sl--card-content">We are recognised as one of the best and most renowned communication training centres in the city.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-20 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Public Speaking Institutes</h2>
                          <p class="sl--card-content">In our public speaking institute, we will help you boost confidence and improve your english speaking skills.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-21 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Language Classes</h2>
                          <p class="sl--card-content">Love learning different language? We offer best language classes for easy and fast learning!</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-22 sl-bkg-img"></div>
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Institutes For Personality Development</h2>
                          <p class="sl--card-content">We introduce ourselves as one of the best institute by offering quality courses for personality development.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>
  
                  <div class="swiper-slide">
                      <div class="slide-cover"></div>
                      <div class="sl-card-wrapper">
                      <div class="sl-gradient"></div>
                      <div class="sl-img-23 sl-bkg-img"></div>
  
                      <div class="sl--content-wrapper sl--content-wrapper-inactive">
                          <div class="sl--content-container sl--card-hide">
                          <h2>Language Classes For English</h2>
                          <p class="sl--card-content">Do people make fun of your English? Don't worry, we are here with English language class. Learn from experts.</p>
                          <button class="sl--link">ENQUIRY</button>
                          </div>
  
                          <!-- Card Nav GRP -->
                          <div class="sl--card-nav-container">
                          <!-- Reveal info btn -->
                          <div class="sl--content-btn content-reveal-btn">
                              <svg class="card-nav-gfx sl--show-card-info" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.63 113.63">
                                  <path d="M105.56 48.75H64.88V8.06a8.06 8.06 0 0 0-16.12 0v40.69H8.06a8.06 8.06 0 0 0 0 16.13h40.69v40.69a8.06 8.06 0 0 0 16.13 0V64.88h40.69a8.06 8.06 0 0 0 0-16.12z"/>
                                  </svg>
                          </div>
                          </div>
                          <!-- END: Card Nav GRP -->
                      </div>
                      </div>
                  </div>

                  </div>
                  <!-- If we need pagination -->
                  <!--<div class="swiper-pagination"></div>-->
              </div>
              </div>
              <!-- END: .sl-wrapper -->
          </div>
        </div>

        <section class="why_us" id="why">
            <div class="section_container">
                <h2 class="section_title">Why Us?</h2>
                <p> Looking to enhance your English communication skills in Nagpur? Our courses are tailored to improve fluency, pronunciation, and overall confidence in speaking English. Whether you're a student, professional, or someone looking to broaden language abilities, enrolling in English Speaking Classes in Nagpur can be a transformative step towards effective communication on the global stage.
                    <br><br>
                    Speakwell Spoken English Classes in Nagpur offers a comprehensive English communication skills program designed to empower students and professionals towards future achievements. Recognized as one of the leading Spoken English Language Institutes, Speakwell Nagpur has been delivering top-notch English communication classes for over five years. We were honoured as one of the "10 Most Promising Personality Development Companies in 2022" by Siliconindia magazine.
                    <br><br>
                    Our Basic level Spoken English Course covers Grammar, Vocabulary, Group Discussion, Public Speaking, Interview Techniques, Voice and Accent, Extempore, Telephone Etiquette, Customer Service, and Soft Skills. The Advanced level course includes Enhancing Interview Skills, Presentation Skills, and Personality Development Aspects, paving the way for career development and better job opportunities.
                    <br><br>
                    With limited students per batch, we provide individual attention and hands-on training by experienced trainers to ensure recommended outcomes. Our fees are affordable, and the duration of beginner and advanced level programs is 2-3 months, culminating in certification.
                    <br><br>
                    Join Speakwell Spoken English Classes in Nagpur and unlock your potential to communicate with confidence in the corporate world and beyond. Let us help you speak English fluently and effectively, opening doors to new opportunities and success in your personal and professional endeavours.</p>
                <br><br>
                    <div class="why_container">
                  <div class="why_items">
                    <img src="https://cdn3.iconfinder.com/data/icons/education/512/students-512.png" alt="Student" />
                    <div class="why_us_text">
                      <h3>STUDENTS</h3>
                      <p>
                          "Discover essential skills to secure placements both on-campus and off-campus, ensuring readiness for hirings. Enroll now to boost your employability and embark on a successful career journey!"<br><br>
                          <span style="display: block; text-align: center;">
                            <strong>CALL: 7757854042  ||  7709376356</strong>
                        </span>
                      </p>
                    </div>
                  </div>
                  <div class="why_items">
                    <img src="https://cdn3.iconfinder.com/data/icons/job-seeker-illustrations/3000/JobSeeker015-512.png" alt="Job Seeker" />
                    <div class="why_us_text">
                      <h3>JOB SEEKERS</h3>
                      <p>
                          "Turn your dreams into reality and achieve financial growth with SpeakWell. Unlock your potential and pave the way for career & success with our expert Counsellor guidance."
                          With SpeakWell Spoken English Classes, Nagpur<br><br>
                          <span style="display: block; text-align: center;">
                            <strong>CALL: 7757854042  ||  7709376356</strong>
                        </span>
                      </p>
                    </div>
                  </div>
                  <div class="why_items">
                    <img src="https://cdn2.iconfinder.com/data/icons/it-network-engineer/324/server-engineer-005-512.png" alt="Working Professional" />
                    <div class="why_us_text">
                      <h3>WORKING PROFESSIONAL</h3>
                      <p>
                          "Position yourself as a sought-after expert in your field, ensuring a steady stream of opportunities. Become a job chooser with our comprehensive training and expertise."
                          With SpeakWell Spoken English Classes, Nagpur<br><br>
                          <span style="display: block; text-align: center;">
                            <strong>CALL: 7757854042  ||  7709376356</strong>
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
            </div>
        </section>

        <section class="about-us" id="about">
          <div class="about">
            <img src="background/swa.png" class="pic" />
            <div class="text">
              <h2>About Us</h2>
              <p>
                Speakwell Spoken English Classes, Nagpur, is a leading institute Since 2019 dedicated to enhancing spoken English and written communication skills. As a top choice for language training in Nagpur, we offer a wide range of programs designed to boost your English proficiency. Our courses cover key areas such as Grammar, Vocabulary, Group Discussions, Public Speaking, Interview Techniques, Voice and Accent in advanced courses, Extempore speaking, Telephone Etiquette, Customer Service, and Soft Skills.
<br><br>
                Our mission is to empower individuals to communicate confidently and effectively, especially in corporate environments. We prioritize personality development, ensuring every student receives individual attention through our small batch sizes. Our expert Business English Certified Trainers are committed to helping each student reach their full potential.
<br><br>
                Speakwell provides flexible course options, from 1-month beginner programs to year-long advanced training, all leading to recognized certifications. Our courses are affordably priced, making high-quality language training accessible to everyone. In addition to general English programs, we specialize in IELTS and TOEFL preparation, Image Consulting, Corporate Training, and CSR (Corporate Social Responsibility) Training, helping you meet your specific professional or academic objectives.
<br><br>
                Join Speakwell Spoken English Classes in Nagpur today and master the art of communication. Whether you're looking to enhance your corporate communication skills or achieve specific career goals, we have the right program for you.
              </p>
            </div>
          </div>
        </section>

        <section class="intro" id="gallery">
        <h1>Gallery</h1>
    </section>
    <div class="slider-container">
        <div class="container">
            <div class="slider-wrapper">
                <button class="slider-button pre">&#9664;</button>
                <ul class="image-list">
                    <?php foreach ($images as $image): ?>
                    <li><img class="image-item" src="<?php echo htmlspecialchars($image['filepath']); ?>" alt="<?php echo htmlspecialchars($image['filename']); ?>"></li>
                    <?php endforeach; ?>
                </ul>
                <button class="slider-button nex">&#9654;</button>
            </div>
        </div>
    </div>

        <br>


        <div class="blog-text" id="blog">
        <h1>Blogs</h1>
    </div>
    <div class="blog-slider">
        <div class="blog-slider__wrp swiper-wrapper">
            <?php foreach ($blogs as $blog): ?>
                <div class="blog-slider__item swiper-slide" data-full-content="<?php echo htmlspecialchars($blog['content']); ?>">
                    <div class="blog-slider__img">
                        <img src="<?php echo htmlspecialchars($blog['thumbnail']); ?>" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <div class="blog-slider__title"><?php echo htmlspecialchars($blog['title']); ?></div>
                        <div class="blog-slider__text">
                            <?php
                            $content_words = explode(' ', $blog['content']);
                            if (count($content_words) > 50) {
                                echo htmlspecialchars(implode(' ', array_slice($content_words, 0, 50))) . '...';
                            } else {
                                echo htmlspecialchars($blog['content']);
                            }
                            ?>
                        </div>
                        <a href="javascript:void(0);" class="blog-slider__button" onclick="openModal('{{ blog.thumbnail }}', '{{ blog.title }}', '{{ blog.content }}')">READ MORE</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="blog-slider__pagination"></div>
    </div>
    <div id="blogModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="modal-body">
                <div class="modal-image">
                    <img id="modalImage" src="" alt="">
                </div>
                <div class="modal-text">
                    <h2 id="modalTitle"></h2>
                    <p id="modalContent"></p>
                </div>
            </div>
        </div>
    </div>

        <br><br>
        <script src="<?php echo htmlspecialchars($widget['code']); ?>" data-use-service-core defer></script>
        <div class="elfsight-app-03cf5116-ea4e-451f-a995-c85a81bcdab7" data-elfsight-app-lazy></div>

        <section class="statistics">
            <div class="stat-item">
                <div class="stat-icon purple"></div>
                <h2 class="stat-number">1000+</h2>
                <p class="stat-label">Student Registration</p>
            </div>
            <div class="stat-item">
                <div class="stat-icon red"></div>
                <h2 class="stat-number">50+</h2>
                <p class="stat-label">Daily Visit</p>
            </div>
            <div class="stat-item">
                <div class="stat-icon green"></div>
                <h2 class="stat-number">99%</h2>
                <p class="stat-label">Successfully Completed</p>
            </div>
            <div class="stat-item">
                <div class="stat-icon yellow"></div>
                <h2 class="stat-number">100%</h2>
                <p class="stat-label">Student Satisfaction Inhouse Survery</p>
            </div>
        </section>

        <div id="Whatsapp"></div>

        <section id="footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <ul class="list-unstyled list-inline social">
                            <li class="list-inline-item"><a href="https://www.facebook.com/speakwellofficial?mibextid=kFxxJD"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/speakwellofficial/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <p class="text-white mt-2">&copy; 2024 Speakwell Spoken English Classes</p>
                    </div>
                </div>
            </div>
        </section>

      </div>
    </div>

    <!-- nav script -->
    <script>
        document.querySelectorAll('.navbar a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        const headerOffset = document.querySelector('.header').offsetHeight;
        const elementPosition = target.getBoundingClientRect().top;
        const offsetPosition = elementPosition - headerOffset;

        window.scrollBy({
            top: offsetPosition,
            behavior: 'smooth'
        });
        
        if (window.innerWidth <= 1023) {
                document.getElementById('menu-toggle').checked = false;
            }
    });
});
    </script>

    <!-- Key script for Swiper  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/614007/swiper.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
<script>
$(document).ready(function() {
    "use strict";

    // Initialize Swiper
    var mySwiper = new Swiper(".swiper-container", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        slidesPerView: 2.7,
        centeredSlides: true,
        autoplay: {
            delay: 3000, 
            disableOnInteraction: false, 
        },
        breakpoints: {
            1440: { slidesPerView: 2.6 },
            1439: { slidesPerView: 1.45 },
            1024: { slidesPerView: 1.45 },
            1023: { slidesPerView: 2 },
            768: { slidesPerView: 2 },
            568: { slidesPerView: 1.5, spaceBetween: 10 },
            414: { slidesPerView: 1.09, spaceBetween: 3 },
            320: { slidesPerView: 1.09, spaceBetween: 3 }
        }
    });

    var swiperContainer = document.querySelector('.swiper-container');

    document.querySelector('.swiper-container').addEventListener('mouseenter', function() {
        mySwiper.autoplay.stop(); 
    });

    document.querySelector('.swiper-container').addEventListener('mouseleave', function() {
        mySwiper.autoplay.start(); 
    });

    blogSlider.querySelector('touchstart', function() {
    mySwiper.autoplay.stop();
    });

    blogSlider.querySelector('touchend', function() {
    mySwiper.autoplay.start();    
    });

    /* Info Card */
    var $revealCardContentBtn = $(".sl--card-nav-container"),
        $contentContainer = $(".sl-card-wrapper .sl--content-wrapper .sl--content-container"),
        $navGFX = $(".sl-card-wrapper .sl--content-wrapper .sl--card-nav-container .sl--content-btn .card-nav-gfx");

    $revealCardContentBtn.on("click", function() {
        var parent = $(this).closest(".swiper-slide");

        // Hide other cards and show the clicked card's content
        parent.siblings().find($contentContainer).removeClass("sl--card-reveal").addClass("sl--card-hide");
        parent.find($contentContainer).toggleClass("sl--card-hide sl--card-reveal");

        // Update Nav wrapper state
        parent.siblings().find(".sl--content-wrapper").removeClass("sl--content-wrapper-active").addClass("sl--content-wrapper-inactive");
        parent.find(".sl--content-wrapper").toggleClass("sl--content-wrapper-inactive sl--content-wrapper-active");

        // Update Nav GFX state
        parent.siblings().find($navGFX).removeClass("sl--close-card-info").addClass("sl--show-card-info");
        parent.find($navGFX).toggleClass("sl--show-card-info sl--close-card-info");
    });

    /* Hide content on slide change */
    mySwiper.on("slideChangeTransitionStart", function() {
        if ($contentContainer.hasClass("sl--card-reveal")) {
            $contentContainer.removeClass("sl--card-reveal").addClass("sl--card-hide");
            $navGFX.removeClass("sl--close-card-info").addClass("sl--show-card-info");
            $(".sl--content-wrapper").removeClass("sl--content-wrapper-active").addClass("sl--content-wrapper-inactive");
        }
    });

     // Enquiry button click handling
     var links = document.querySelectorAll('.sl--link');
    links.forEach(function(link) {
        link.addEventListener('click', function() {
            window.location.href = "contactUs.php"; // Redirect to the Contact Us page
        });
    });
});
</script>

<!-- Blog script -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
<script>
var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
        invert: false,
    },
    autoplay: {
        delay: 3000, 
        disableOnInteraction: false, 
    },
    pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
    }
});

var blogSlider = document.querySelector('.blog-slider');

document.querySelector('.blog-slider').addEventListener('mouseenter', function() {
    swiper.autoplay.stop();
});

document.querySelector('.blog-slider').addEventListener('mouseleave', function() {
    swiper.autoplay.start();
});

blogSlider.addEventListener('touchstart', function() {
    swiper.autoplay.stop();
});

blogSlider.addEventListener('touchend', function() {
    swiper.autoplay.start();
});

document.querySelectorAll('.blog-slider__button').forEach(function(button) {
    button.addEventListener('click', function(event) {
        event.preventDefault();

        var slide = this.closest('.swiper-slide');
        var imgSrc = slide.querySelector('.blog-slider__img img').src;
        var title = slide.querySelector('.blog-slider__title').textContent;
        var fullContent = slide.getAttribute('data-full-content');

        document.getElementById('modalImage').src = imgSrc;
        document.getElementById('modalTitle').textContent = title;
        document.getElementById('modalContent').textContent = fullContent;

        document.getElementById('blogModal').style.display = "flex"; // Show the modal with flex display
    });
});

document.querySelector('.modal .close').addEventListener('click', function() {
    document.getElementById('blogModal').style.display = "none";
});

window.addEventListener('click', function(event) {
    const modal = document.getElementById('blogModal');
    if (event.target === modal) {
        modal.style.display = "none";
    }
});
</script> 

<!-- img script -->
    <script>
    const initSlider = () => {
        const imageList = document.querySelector(".slider-wrapper .image-list");
        const prevButton = document.querySelector(".slider-button.pre");
        const nextButton = document.querySelector(".slider-button.nex");
    
        let autoSlideInterval;
        const imageElements = document.querySelectorAll(".slider-wrapper .image-item");
        const totalImages = imageElements.length; 
        let currentIndex = 0;
    
        const startAutoSlide = () => {
            autoSlideInterval = setInterval(() => {
                currentIndex++;
                if (currentIndex >= totalImages) {
                    currentIndex = 0; 
                }
                imageList.scrollTo({
                    left: currentIndex * imageElements[0].clientWidth,
                    behavior: "smooth"
                });
            }, 3000);
        };
    
        const stopAutoSlide = () => {
            clearInterval(autoSlideInterval);
        };
    
        startAutoSlide();
    
        const sliderWrapper = document.querySelector('.slider-wrapper');
        sliderWrapper.addEventListener('mouseenter', stopAutoSlide);
        sliderWrapper.addEventListener('mouseleave', startAutoSlide);
    
        prevButton.addEventListener("click", () => {
            currentIndex--;
            if (currentIndex < 0) {
                currentIndex = totalImages - 1; // Go to last image
            }
            imageList.scrollTo({
                left: currentIndex * imageElements[0].clientWidth,
                behavior: "smooth"
            });
        });
    
        nextButton.addEventListener("click", () => {
            currentIndex++;
            if (currentIndex >= totalImages) {
                currentIndex = 0; // Reset to first image
            }
            imageList.scrollTo({
                left: currentIndex * imageElements[0].clientWidth,
                behavior: "smooth"
            });
        });

         // Touch event handling for swipe gestures on mobile
    let touchStartX = 0;
    let touchEndX = 0;

    sliderWrapper.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });

    sliderWrapper.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipeGesture();
    });

    const handleSwipeGesture = () => {
        if (touchEndX < touchStartX) {
            // Swipe left
            nextButton.click();
        }
        if (touchEndX > touchStartX) {
            // Swipe right
            prevButton.click();
        }
    };
    
        // Full-size image popup
        const images = document.querySelectorAll(".image-item");
        const popup = document.createElement("div");
        const popupImage = document.createElement("img");
        const closeButton = document.createElement("button");
    
        popup.classList.add("image-popup");
        popupImage.classList.add("popup-image");
        closeButton.classList.add("close-button");
        closeButton.innerHTML = "&times;";
    
        popup.appendChild(popupImage);
        popup.appendChild(closeButton);
        document.body.appendChild(popup);
    
        images.forEach(image => {
            image.addEventListener("click", () => {
                popupImage.src = image.src;
                popup.style.display = "flex";
            });
        });
    
        closeButton.addEventListener("click", () => {
            popup.style.display = "none";
        });
    };
    
    window.addEventListener("resize", initSlider);
    window.addEventListener("load", initSlider);
    </script>

    <script>
        fetch('whatsapp.php')
                .then(response => response.text())
                .then(data => {
                document.getElementById('Whatsapp').innerHTML = data;
                });
    </script>

</body>
</html>