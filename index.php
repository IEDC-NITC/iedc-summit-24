<?php 
require_once __DIR__.'/bpcore/sqltransaction.php';
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#F8669E"/>
<title>2024-iedc-summit.in/</title>
<meta name="author" content="XC">
<meta name="description" content="2024 iedc summit">
<meta name="keywords" content="2024, iedc, summit">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="2024 iedc summit">
<meta property="og:image" content="images/collage.png">
<meta property="og:site_name" content="2024 iedc summit">
<meta property="og:title" content="2024 iedc summit">
<meta property="og:type" content="website">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@2024 iedc summit">
<meta name="twitter:creator" content="@2024 iedc summit">
<meta name="twitter:title" content="2024 iedc summit">
<meta name="twitter:description" content="2024 iedc summit">
<meta name="twitter:image" content="images/collage.png">

<!-- FAVICON FILES -->
<!-- <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon"> -->
<link href="images/ic_launcher.png" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="css/fontawesome.min.css">
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/fancybox.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/custom.css?v=1.0.2">

</head>
<body>
<div class="preloader">
  <div class="inner">
    <figure><img src="images/logo-tilt.png" alt="Image"></figure>
    <div class="percentage" id="percentage">0</div>
  </div>
  <!-- end inner -->
  <div class="loader-progress" id="loader-progress"> </div>
  <!-- end loader-progress --> 
	   <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
    <path d="M-4.5,1080H1920V0H0c-10.2,134.8,0.1,311.5,0,541C-0.1,769.5,0,948-4.5,1080z"></path>
  </svg>
</div>
<!-- end preloader -->
<div class="page-transition">
  <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
    <path d="M540,1080H0V0h540c-40.28,124.78-85.13,311.48-85,541C455.13,769.53,499.81,955.48,540,1080z"></path>
  </svg>
</div>
<!-- end page-transition -->
<div class="smooth-scroll">
	<aside class="mobile-menu">
      <svg viewBox="0 0 600 1080" preserveAspectRatio="none" version="1.1">
        <path d="M540,1080H0V0h540c0,179.85,0,359.7,0,539.54C540,719.7,540,899.85,540,1080z"></path>
      </svg>
      <div class="inner">
        <div class="site-menu">
      
          <ul>
            <li><a href="#home" >Home</a></li>
            <li><a href="#about-us">About</a></li>
            <li><a href="#events-link">Events</a></li>
           <!--  <li><a href="#speakers-link">Speakers</a></li>
            <li><a href="#schedule-link">Schedule</a></li> -->
            <li><a href="#contact-link">Contact</a></li>
          </ul>
        </div>
        <!-- end site-menu --> 
      </div>
      <!-- end inner --> 
    </aside>
    <!-- end mobile-menu -->
    <aside class="side-widget">
      <svg viewBox="0 0 600 1080" preserveAspectRatio="none" version="1.1">
        <path d="M540,1080H0V0h540c0,179.85,0,359.7,0,539.54C540,719.7,540,899.85,540,1080z"></path>
      </svg>
      
    </aside>
   
     <nav class="navbar xc-nav-fixed" id="navbar">
      <div class="container">
        <div class="logo"> <a href="#home"> <img src="images/ksum.png" alt="Image"> </a> </div>
        <!-- end logo -->
        <div class="site-menu">
          <ul>
            <li><a href="#about-us">About</a></li>
            <li><a href="#events-link">Events</a></li>
<!--             <li><a href="#speakers-link">Speakers</a></li>
            <li><a href="#schedule-link">Schedule</a></li> -->
            <li><a href="#contact-link">Contact</a></li>
          </ul>
        </div>
     
        <div class="hamburger-menu">
          <button class="menu">
          <svg width="45" height="45" viewBox="0 0 100 100">
            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
            <path class="line line2" d="M 20,50 H 80" />
            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
          </svg>
          </button>
        </div>
        <!-- end hamburger-menu -->
        <div class="navbar-button"> <a href="#" class="xc-nav-btn">
          <figure><img src="images/icon-navbar-button.png" alt="Image"></figure>
          Booking Starts Soon</a> </div>
        <!-- end navbar-button --> 
      </div>
      <!-- end container --> 
    </nav>
    <!-- end navbar -->
    
  <div class="section-wrapper" data-scroll-section id="home">
    <?php $sliders = extractRecord('*','status',1,'sliders',' ORDER BY id DESC');
    if($sliders!='NO-DATA'){ ?>
    <section class="slider">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="events-slider-content">
              <div class="swiper-wrapper">
              
                <?php foreach ($sliders as $key => $value)  {  ?>

                    <div class="swiper-slide ">
                        <div class="inner">
                            <div class="date">
                            <figure>Kerala Startup Mission </figure>
                            <span></span></div>
                             <h2 class="xc-slider-head"><?= $value['title'] ?> </h2>
                            <a href="#" class="slider-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text" >Coming Soon</span></a>
                            <div class="location">
                            <div class="icon"><img src="images/icon-location.svg" alt="Image"></div>
                            <span><?php //= $value['place'] ?></span> </div>
                            <!-- end location --> 
                        </div>
                        <!-- end inner --> 
                    </div>
                <?php } ?>
            
 
                <!-- end swiper-slide -->
              </div>
              <!-- end swiper-wrapper --> 
            </div>
            <!-- end events-slider-content --> 
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
            <div class="events-slider-images">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="slide-image" data-background="images/stack.png"></div>
                </div>

                 <div class="swiper-slide">
                  <div class="slide-image" data-background="images/stack.png"></div>
                </div>

                 <div class="swiper-slide">
                  <div class="slide-image" data-background="images/stack.png"></div>
                </div>
                <!-- end swiper-slide -->
              </div>
              <!-- end swiper-wrapper -->
              <div class="button-prev"><span class="icon arrow"></span></div>
              <div class="button-next"><span class="icon arrow"></span></div>
            </div>
            <!-- end events-slider-content --> 
          </div>
          <!-- end col-6 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
    <!-- end slider -->
     <?php } ?>
    <section class="content-section" id="about-us">
		<span class="section-bg" data-background="images/section-bg01.png"></span>
		<!-- end section-bg -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
			  <div>
            <div class="side-content left">
              <h6 class="xc-iedc-about">About</h6>
              <h2>IEDC Summit</h2>
              <p><strong>IEDC NITC</strong>, in collaboration with Kerala Startup Mission and IEDC Kerala, proudly presents the 9th edition of the IEDC Summit on <strong>August 24, 2024</strong>. We extend a warm welcome to all aspiring entrepreneurs and innovators to join us for this vibrant festival of ideas. 
              </p>
              <p>Recognized as one of the largest events of its kind in Asia, the IEDC Summit offers a dynamic platform for innovators, entrepreneurs, and students to connect, collaborate, and grow. More than 70 distinguished speakers from a variety of trending domains will deliver talks across more than 10 venues.</p>
              <a href="#contact-link" class="custom-button"> <span class="circle" aria-hidden="true"> <span class="icon arrow"></span> </span> <span class="button-text" id="contact-link-o">Contact Us</span></a> </div>
            <!-- end side-content --> 
				  </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
			  <div>
            <figure class="side-image"> <img src="images/collage.webp" alt="Image"> </figure>
            <!-- end side-image --> 
				  </div>
			   <!-- end data-scroll -->
          </div>
          <!-- end col-6 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
    <!-- end content-section -->
    <section class="content-section no-top-spacing">
      <div class="container">
        <div class="row justify-content-center xc-odo-box">
          <div class="col-lg-4 col-md-6">
			  <div data-scroll data-scroll-speed="-0.5">
            <div class="counter-box">
              <!-- <figure><img src="images/icon-counter01.png" alt="Image"></figure> -->
              <span class="odometer xc-count-odo mt-3">14</span>
              <h3>Districts</h3>
              <p class="pt-0">Participation of students from 14 districts of Kerala</p>
            </div>
            <!-- end counter-box --> 
				  </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4 col-md-6">
			  <div data-scroll data-scroll-speed="0.5">
            <div class="counter-box">
              <!-- <figure><img src="images/icon-counter02.png" alt="Image"></figure> -->
              <span class="odometer xc-count-odo mt-3">450+</span>
              <h3>IEDCs</h3>
              <p>The biggest student Entrepreneurship summit across Asia with more than 450+ IEDC units</p>
            </div>
            <!-- end counter-box -->
				  </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4 col-md-6">
			  <div data-scroll data-scroll-speed="-1">
            <div class="counter-box">
              <!-- <figure><img src="images/icon-counter03.png" alt="Image"></figure> -->
              <span class="odometer xc-count-odo mt-3">15k+</span>
              <h3>Attendees</h3>
              <p>Students, professors, entrepreneurs, corporate leaders and many more participants</p>
            </div>
            <!-- end counter-box --> 
				  </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-4 --> 
        </div>
        <div class="row justify-content-center mt-2 xc-odo-box">
          <div class="col-lg-4 col-md-6">
            <div data-scroll data-scroll-speed="-1">
                <div class="counter-box">
                  <!-- <figure><img src="images/icon-counter03.png" alt="Image"></figure> -->
                  <span class="odometer xc-count-odo mt-3">350+</span>
                  <h3>Start ups</h3>
                  <p>Featuring deep tech and industry leading startups which is the face of Indian startup sector</p>
                </div>
                <!-- end counter-box --> 
              </div>
            <!-- end data-scroll -->
          </div>
              <!-- end col-4 --> 
          <div class="col-lg-4 col-md-6">
            <div data-scroll data-scroll-speed="-1">
                <div class="counter-box ">
                  <!-- <figure><img src="images/icon-counter03.png" alt="Image"></figure> -->
                  <span class="odometer xc-count-odo mt-3">100</span>
                  <h3>Events</h3>
                  <p>Filled with 40+ events which are curated to keep you thrilled and surprised</p>
                </div>
                <!-- end counter-box --> 
              </div>
            <!-- end data-scroll -->
          </div>
              <!-- end col-4 --> 
          <div class="col-lg-4 col-md-6">
            <div data-scroll data-scroll-speed="-1">
                <div class="counter-box">
                  <!-- <figure><img src="images/icon-counter03.png" alt="Image"></figure> -->
                  <span class="odometer xc-count-odo">70</span>
                  <h3>Speakers</h3>
                  <p>India's most popular startup leaders , with exciting stories and lessons for your career and startup journey</p>
                </div>
                <!-- end counter-box --> 
              </div>
            <!-- end data-scroll -->
          </div>
              <!-- end col-4 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
    <!-- end content-section -->
    <section class="py-5   xc-road-to-summit">
      <div class="container section-eve " id="events-link">
        <div class="row"> 
          <div class="col-12">
            <div data-scroll data-scroll-speed="-0.5">
               <div class="section-title text-center">
                 <!-- <figure><img src="images/iedc-nitc.png" alt="Image"></figure> -->
                
                 <h2>Road to summit </h2>
<h6>Explore</h6>
               </div>
               <!-- end section-title --> 
               </div>
           <!-- end data-scroll -->
            <div class="xc-road-to-summit-img">
                <img src="images/roadmap.webp">
            </div>
            </div>
        </div>
      </div>
    </section>
    <?php $speakers = extractRecord('*','status',1,'speaker',' ORDER BY id DESC');
    if($speakers!='NO-DATA'){ ?>
   
     <section class="content-section speakers" id="speakers-link">
      <span class="section-bg" data-background="images/section-bg04.png" data-scroll data-scroll-speed="2"></span>
      <!-- end section-bg -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
            <div data-scroll data-scroll-speed="-0.5">
              <div class="section-title text-center">
                <figure><img src="images/iedc-nitc.png" alt="Image"></figure>
                <h6>EVENT CONFERENCE SPEAKERS</h6>
                <h2>Speakers</h2>
              </div>
              <!-- end section-title --> 
              </div>
          <!-- end data-scroll -->
            </div>
            <!-- end col-12 -->
            <?php foreach ($speakers as $speaker) {  ?>
            <div class="col-lg-3 col-md-6">
                <div data-scroll data-scroll-speed="0.5">
                    <div class="speaker">
                        <figure> 
                            <img src="<?=  $speaker['imageurl'] ?>" alt="Image">
                            <figcaption>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="content-box">
                            <h4><?= $speaker['name'] ?></h4>
                            <small><?= $speaker['designation'] ?></small> 
                        </div>
                        <!-- end content-box --> 
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- end col-3 -->
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </section>
      <!-- end content-section -->
       <?php } ?>
    <section class="content-section schedule-eve" data-background="#F6FAFB">
		<span class="section-bg" data-background="images/section-bg02.png" data-scroll data-scroll-speed="2"></span>
		<!-- end section-bg -->
      <div class="container">
        <div class="row">
          <div class="col-12">
			  <div data-scroll data-scroll-speed="-0.5">
            <div class="section-title">
              <h6>SCHEDULE OF EVENT</h6>
              <h2>List of Planned Events<br>
                Thay Are Expected</h2>
            </div>
            <!-- end section-title --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-12 -->
          <div class="col-12">
			  <div data-scroll data-scroll-speed="0.5">
            <div class="schedule-box">
              <div class="nav">
                <div class="active" data-bs-toggle="tab" data-bs-target="#tab-content01"> <span class="day">DAY 01</span> <small class="date">WEDNESDAY, JANUARY 21</small> </div>
                <!-- tab-nav -->
                <div data-bs-toggle="tab" data-bs-target="#tab-content02" > <span class="day">DAY 02</span> <small class="date">THURSDAY, JANUARY 22</small> </div>
                <!-- tab-nav -->
                <div data-bs-toggle="tab" data-bs-target="#tab-content03" > <span class="day">DAY 03</span> <small class="date">FRIDAY, JANUARY 23</small> </div>
                <!-- tab-nav --> 
              </div>
              <!-- end nav -->
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-content01">
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">9AM - 10AM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Registration</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline -->
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">11AM - 12PM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Introduction of Breakit</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline -->
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">1PM - 3PM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Speaker Speech</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline -->
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">4PM - 7PM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Lunch Break</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline -->
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">8PM - 10PM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Final Speaches</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline --> 
                </div>
                <!-- end tab-pane -->
                <div class="tab-pane fade" id="tab-content02">
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">9AM - 10AM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Second Day Starts</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline -->
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">11AM - 12PM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Introduction of Breakit</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline -->
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">1PM - 3PM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Speaker Speech</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline -->
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">4PM - 7PM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Lunch Break</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline -->
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">8PM - 10PM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Final Speaches</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline --></div>
                <!-- end tab-pane -->
                <div class="tab-pane fade" id="tab-content03">
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">9AM - 10AM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Last Final Days</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline -->
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">11AM - 12PM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Introduction of Breakit</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline -->
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">1PM - 3PM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Speaker Speech</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline -->
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">4PM - 7PM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Lunch Break</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline -->
                  <div class="timeline">
                    <div class="event-time"><img src="images/icon-time.svg" alt="Image">8PM - 10PM</div>
                    <!-- end event-time -->
                    <div class="event-description">
                      <h5>Final Speaches</h5>
                      <p>Provides all of the online registration and ticketing 
                        tools to help event planners host millions of events 
                        each year. Sign up for free today.</p>
                    </div>
                    <!-- end event-description --> 
                  </div>
                  <!-- end timeline --></div>
                <!-- end tab-pane --> 
              </div>
              <!-- end tab-content --> 
            </div>
            <!-- end schedule-box --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-12 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
    <!-- end content-section -->
    <section class="content-section">
      <span class="section-bg" data-background="images/section-bg01.png" data-scroll data-scroll-speed="2"></span>
      <!-- end section-bg -->
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
          <div data-scroll data-scroll-speed="-0.5">
              <div class="side-content left">
                <h2>Kerala Startup Mission (KSUM)</h2>
                <p>The Kerala Startup Mission (KSUM) is the nodal agency of the government of Kerala for promoting entrepreneurship in the state. It is also the implementing body for the Kerala Technology Startup Policy that supports the state’s startup ecosystem through<span id="dots">...</span><span id="more">the various schemes and support programs. KSUM was founded in 2006, with the goal to promote technology-based entrepreneurship activities and to create the infrastructure and ecosystem required to support high-end technology-based startup businesses.
                  KSUM acts as a springboard for budding entrepreneurs who wish to launch themselves into the world of technology-based careers and has helped develop several innovative products and solutions.</span></p>
                  <button onclick="myFunction('myBtn','more','dots')" id="myBtn" class="xc-more">Read More</button>
                  
              </div>
              <!-- end side-content --> 
            </div>
          <!-- end data-scroll -->
            </div>
            <!-- end col-6 -->
            <div class="col-lg-6 ksum">
              <div >
               <figure><img src="images/ksum-c.png" alt="Image"></figure>
              </div>
              
          <!-- end data-scroll -->
            </div>
            <!-- end col-6 -->
            <div class="spacing-50"></div>
            <div class="col-lg-6">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/nit1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/nit2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/nit3.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          <!-- end data-scroll -->
            </div>
            <!-- end col-6 -->
            <div class="col-lg-6">
           <div data-scroll data-scroll-speed="-0.5">
              <div class="side-content right">
                <h2>NIT Calicut</h2>
                <p>National Institute of Technology Calicut (NITC) is one of the 31 institutions of national importance set up by an Act of Parliament namely the ‘National Institute of technology Act 2007’, and is fully funded by the Government of India. The mandate of the Institute is to provide higher technical education<span id="dots2">...</span><span id="more2">and conduct research in the various branches of Engineering, Science, Technology and Management. Originally established in 1961 as a Regional Engineering College (REC), it was transformed into a National Institute of Technology in 2002. The Institute offers bachelors, masters and doctoral degree programs in Engineering, Science, Technology and Management.<br>
                Set in a picturesque landscape at the foothills of the Western Ghats, NIT Calicut is located about 22 kilometres north-east of Calicut city in the state of Kerala, India. It stretches over a length of about 1.5 kilometres along the Calicut-Mukkam road, extending over an area of approximately 120 hectares.</span></p>
                <button onclick="myFunction('myBtn2','more2','dots2')" id="myBtn2" class="xc-more">Read More</button>
              </div>
              <!-- end side-content --> 
              </div>
          <!-- end data-scroll -->
            </div>
            <!-- end col-6 --> 
          </div>
          <!-- end row --> 
        </div>
        <!-- end container --> 
      </section>
      <!-- end content-section -->
    <section class="content-section no-bottom-spacing" style="display: none;">
		<div class="section-bg" data-background="images/section-bg02.png" data-scroll data-scroll-speed="1"></div>
		<!-- end section-bg -->
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-12">
			   <div data-scroll data-scroll-speed="0.5">
            <div class="section-title text-center">
              <figure><img src="images/iedc-nitc.png" alt="Image"></figure>
              <h6>SPONSORS AND PROMOTERS</h6>
              <h2>Worldwide Sponsors</h2>
            </div>
            <!-- end section-title --> 
				      </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-12 -->
          <div class="col-12"> <strong class="sponsor-title">Main sponsors</strong> </div>
          <!-- end col-12 -->
          <div class="col-lg-2 col-md-3 col-6">
			    <div data-scroll data-scroll-speed="-0.5">
            <figure class="sponsor-logo"> <img src="images/logo01.jpg" alt="Image">
              <figcaption><a href="#">Qonk</a></figcaption>
            </figure>
            <!-- end sponsor-logo -->
					 </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-2 -->
          <div class="col-lg-2 col-md-3 col-6">
			  <div data-scroll data-scroll-speed="0.5">
            <figure class="sponsor-logo"> <img src="images/logo02.jpg" alt="Image">
              <figcaption><a href="#">Part Two</a></figcaption>
            </figure>
            <!-- end sponsor-logo --> 
			   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-2 -->
          <div class="col-lg-2 col-md-3 col-6">
			  <div data-scroll data-scroll-speed="-0.5">
            <figure class="sponsor-logo"> <img src="images/logo03.jpg" alt="Image">
              <figcaption><a href="#">Happytality</a></figcaption>
            </figure>
            <!-- end sponsor-logo --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-2 -->
          <div class="clearfix spacing-50"></div>
          <!-- end clearfix -->
          <div class="col-12"> <strong class="sponsor-title">Product sponsors</strong> </div>
          <!-- end col-12 -->
          <div class="col-lg-2 col-md-3 col-6">
			   <div data-scroll data-scroll-speed="0.5">
            <figure class="sponsor-logo"> <img src="images/logo04.jpg" alt="Image">
              <figcaption><a href="#">Florida</a></figcaption>
            </figure>
            <!-- end sponsor-logo --> 
			   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-2 -->
          <div class="col-lg-2 col-md-3 col-6">
			   <div data-scroll data-scroll-speed="-0.5">
            <figure class="sponsor-logo"> <img src="images/logo05.jpg" alt="Image">
              <figcaption><a href="#">Karat</a></figcaption>
            </figure>
            <!-- end sponsor-logo --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-2 -->
          <div class="col-lg-2 col-md-3 col-6">
			   <div data-scroll data-scroll-speed="0.5">
            <figure class="sponsor-logo"> <img src="images/logo06.jpg" alt="Image">
              <figcaption><a href="#">Soma</a></figcaption>
            </figure>
            <!-- end sponsor-logo --> 
			  </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-2 -->
          <div class="col-lg-2 col-md-3 col-6">
			   <div data-scroll data-scroll-speed="-0.5">
            <figure class="sponsor-logo"> <img src="images/logo07.jpg" alt="Image">
              <figcaption><a href="#">Lota</a></figcaption>
            </figure>
            <!-- end sponsor-logo --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-2 -->
          <div class="col-lg-2 col-md-3 col-6">
			   <div data-scroll data-scroll-speed="0.5">
            <figure class="sponsor-logo"> <img src="images/logo08.jpg" alt="Image">
              <figcaption><a href="#">Momo</a></figcaption>
            </figure>
            <!-- end sponsor-logo --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-2 -->
          <div class="clearfix"></div>
          <!-- end clearfix -->
          <div class="col-lg-2 col-md-3 col-6">
			   <div data-scroll data-scroll-speed="-0.5">
            <figure class="sponsor-logo"> <img src="images/logo09.jpg" alt="Image">
              <figcaption><a href="#">Fleer de Leew</a></figcaption>
            </figure>
            <!-- end sponsor-logo --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-2 -->
          <div class="col-lg-2 col-md-3 col-6">
			   <div data-scroll data-scroll-speed="0.5">
            <figure class="sponsor-logo"> <img src="images/logo10.jpg" alt="Image">
              <figcaption><a href="#">Armageddon</a></figcaption>
            </figure>
            <!-- end sponsor-logo --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-2 -->
          <div class="col-lg-2 col-md-3 col-6">
			   <div data-scroll data-scroll-speed="-0.5">
            <figure class="sponsor-logo"> <img src="images/logo11.jpg" alt="Image">
              <figcaption><a href="#">Georgia</a></figcaption>
            </figure>
            <!-- end sponsor-logo --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-2 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
    <!-- end content-section -->
    <section class="content-section xc-testimonial">
		<span class="section-bg" data-background="images/section-bg01.png" data-scroll data-scroll-speed="2"></span>
		<!-- end section-bg -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
			  <div data-scroll data-scroll-speed="0.5">
            <figure class="testimonial-side-image"> <img src="images/testimonial-side-image.png" alt="Image"> </figure>
            <!-- end testimonial-side-image --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
			  <div data-scroll data-scroll-speed="-0.5">
            <div class="testimonial">
              <h6>EVENTS REVIEWS</h6>
              <h2>WHAT PEOPLE SAY?</h2>
              <p>"Can I just say that it's been an absolute pleasure 
                working with you all.  Everyone's been so friendly, 
                helpful and delightful, so please pass my thanks 
                on to all!"</p>
              <strong>Rubina Jaffer,</strong> <small>Event Manager and Director</small> </div>
            <!-- end testimonial --> 
				   </div>
			  <!-- end data-scroll -->
          </div>
          <!-- end col-6 --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </section>
     <!-- event section -->



     <?php $summits = extractRecord('*','status',1,'summit',' ORDER BY id DESC');
    if($summits!='NO-DATA'){ ?>

     <section>
      <div class="container section-eve pb-5" id="events-link">
        <div class="row"> 
          <div class="col-12">
            <div data-scroll data-scroll-speed="-0.5">
               <div class="section-title text-center">
                 <figure></figure>
                
                 <h2>Previous summit</h2>
                 <h6>Glimpse</h6>

               </div>
               <!-- end section-title --> 
               </div>
           <!-- end data-scroll -->
             </div>
          <div class="col-12">
            <ul class="events-grid">
              
            <?php foreach ($summits as $summit) {  ?>
              <li class="grid-item" data-scroll data-scroll-speed="-0.5">
                <div class="event-box">
                    <figure class="image">
                        <?= $summit['youtube'] ?>
                    </figure>
                  <div class="content-box"> <span> 
                    <?php echo date('d F', strtotime($summit['start_date'])); 
                          if($summit['end_date']){
                            echo  ' - ' ,date('d F', strtotime($summit['end_date']));
                          }
                    ?> 
                </span>
                    <h2><a href="#"><?= $summit['year'] ?></a></h2>
                    <?php if($summit['location']){ ?>
                    <ul>
                      <li>
                        <figure><img src="images/icon-host.svg" alt="Image" height="26"></figure>
                        <p><?= $summit['location'] ?></p>
                      </li>
                    </ul>
                    <?php } ?>
                  </div>
                  <!-- end content-box --> 
                </div>
                <!-- end event-box --> 
              </li>
            <?php } ?>
             
            </ul>
            
          </div>
          <!-- end col-12 --> 
        </div>
        <!-- end row --> 
      </div>
     </section>
     <!-- end event section -->
      <?php } ?>
    <section id="shedule-link">
      <div class="container py-5">
        <div class="section-title text-center">
              <figure><img src="images/iedc-nitc.png" alt="Image"></figure>
              <h6>Directions</h6>
              <h2>Get Directions to the event</h2>
        </div>
      </div>
      <div class="">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.1795381031384!2d75.93106097356038!3d11.321584348904697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba642fd50000001%3A0xbe8a77db953bda6c!2sNational%20Institute%20of%20Technology%2C%20Calicut!5e0!3m2!1sen!2sin!4v1720780602401!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
    <!-- end content-section -->
    <footer class="footer" id="contact-link">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="footer-bar">
              <div class="row w-100 hide-phone">
                <div class="col-6">
                  <div class="row">
                    <div class="col-md-4 mb-4">
                      <img src="./images/ksum.png" class="footer-ksum xc-foot-logo" alt="">
                    </div>
                    <div class="col-md-6 v-center">
                      <img src="./images/iedc-state.png" class="footer-istate xc-foot-logo" alt="">
                    </div>
                  </div>  
                </div>
                <div class="col-6">
                  <div class="row">
                    <div class="col-md-6   mb-4">
                      <img src="./images/iedc-nitc.png" class="footer-initc xc-foot-logo" alt="">
                    </div>
                    <div class="col-md-6 ">
                      <img src="./images/nitc.png" class="footer-nsvg xc-foot-logo" alt="">
                    </div>
                  </div>                
                </div>
              </div>
              <hr>
              <div class="row w-100 mt-3">
                <div class="col-md-6 xc-footcont">
                <div class="row hide-desk w-100 mb-4">
                    <div class="col-6 mb-4">
                      <img src="./images/ksum.png" class="footer-ksum xc-foot-logo" alt="">
                    </div>
                    <div class="col-6 v-center">
                      <img src="./images/iedc-state.png" class="footer-istate xc-foot-logo" alt="">
                    </div>
                  </div>
                  <div class="">
                    <p><b>Kerala Startup Mission | Goverment of Kerala</b></p>
                    <p>G3B, Thejaswini, Technopark Campus</p>
                    <p>Kariyavattom, Trivandrum, Kerala 695581</p>
                  </div>
                  <div>
                    <p><b>For Queries</b></p>
                    <p><a href="">iedckerala@startupmission.in</a></p>
                  </div>
                  <div>
                    <p><b>Bergin S Russel</b></p>
                    <p><a href="mailto:iedckerala@startupmission.in">iedckerala@startupmission.in</a></p>
                    <p><a href="tel:+916238998379" >+91 6238 998 379 </a></p>
                  </div>
                  <div>
                    <ul class="social-media">
                        <li><a target="_blank" href="https://www.facebook.com/keralastartupmission/"><i class="fab fa-facebook-f"></i> </a></li>
                        <li><a target="_blank" href="https://x.com/startup_mission"><i class="fab fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/keralastartupmission/"><i class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/kerala-startup-mission/"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 xc-footcont">
                <div class="row hide-desk w-100 mb-4">
                    <div class="col-6   mb-4">
                      <img src="./images/iedc-nitc.png" class="footer-initc xc-foot-logo" alt="">
                    </div>
                    <div class="col-6  ">
                      <img src="./images/nitc.png" class="footer-nsvg xc-foot-logo" alt="">
                    </div>
                  </div> 
                    <div class=" ">
                        <p><b>Innovation and Entrepreneurship Development Centre <br>NIT Calicut</b></p>
                        <p>National Institute of Technology Calicut, </p>
                        <p>NIT Campus P.O, Kozhikode, India, 673601</p>
                    </div>
                    <div>
                        <p><b>For Queries</b></p>
                        <p><a href="mailto:iedc@gmail.com">iedc@gmail.com</a></p>
                    </div>
                    <div>
                        <p><b>IEDC NITC</b></p>
                        <p><a href="mailto:iedc@nitc.ac.in">iedc@nitc.ac.in</a></p>
                        <p><a href="tel:+917736263162">+91 7736 263 162</a>,<a href="tel:+918593826356" >+91 8593 826 356</a> </p>
                    </div>
                    <div>
                    <ul class="social-media">
                        <li><a target="_blank" href="https://www.facebook.com/profile.php?id=61555620338371&sk=friends"><i class="fab fa-facebook-f"></i> </a></li>
                        <li><a target="_blank" href="https://x.com/iedc_nitc"><i class="fab fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/iedc_nitc/?__d=1"><i class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/in/iedcnitc/"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                    
                    
                    

                </div>
              </div>
            <!-- end footer-bar --> 
          </div>
          <!-- end col-12 -->
           
        <!-- end row --> 
      </div>
      <!-- end container -->
      <div class="bottom-bar">
        <div class="container"> <span class="copyright xc-foot-copy w-100">© <?= date('Y') ?>  Kerala Startup Mission. All Rights Reserved.<br> Developed by <a class="xc-link" target="_blank" href="https://xctllp.com">XPERTCONSORTIUM</a></span> </div>
        <!-- end container --> 
      </div>
      <!-- end bottom-bar --> 
    </footer>
    <!-- end footer --> 
  </div>
  <!-- end smooth-scroll --> 
</div>
<!-- end section-wrapper --> 

<!-- JS FILES --> 
 <script >
 function myFunction(myBtn1,more1,dots1) {
    var dots = document.getElementById('dots');
    var moreText = document.getElementById('more');
    var btnText = document.getElementById('myBtn');
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read More"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read Less"; 
      moreText.style.display = "inline";
    }
}

 </script>
<script src="js/jquery.min.js"></script> 
<script src="js/parallax.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/swiper.min.js"></script> 
<script src="js/fancybox.min.js"></script> 
<script src="js/isotope.min.js"></script> 
<script src="js/gsap.min.js"></script> 
<script src="js/locomotive-scroll.min.js"></script> 
<script src="js/ScrollTrigger.min.js"></script> 
<script src="js/scripts.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
      $('a[href^="#"]').on('click', function(event) {
        // event.preventDefault(); // Prevent the default action

        var target = $(this).attr('href'); // Get the target href value
        var $target = $(target); // Find the target element

        if ($target.length) {
          $('html, body').animate({
            scrollTop: $target.offset().top
          }, 500); // Scroll to the target element
        }
      });
    });
</script>
 

</body>
</html>