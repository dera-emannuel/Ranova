<?php 
    include "./pages/preloader.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <title>Renova</title>
    <link rel="stylesheet" href="./asset/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1684982764/magicmouse-2.0.0.cdn.min.js"></script> -->
</head>
<body class="magic-hover magic-hover__square">
    <div class="heroSection">

    <video class="heroVideo" autoplay muted loop playsinline>
        <source src="./asset/images/hero.webm" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="heroOverlay"></div>
        <header>
            <div class="container">
                <nav>
                    <div class="logo">
                        <a href="#">
                            <img src="./asset/images/hosiptalLogo.png" alt="">
                        </a>

                        <div class="menu" id="menuBtn">🔥</div>
                    </div>
                    <div class="linksHOlder">
                        <ul>
                            <li><a href="./pages/treatments.php">Treatments</a></li>
                            <li><a href="./pages/wellness.php">Wellness</a></li>
                            <li><a href="./pages/doctors.php">Doctors</a></li>
                            <li><a href="./pages/hospital.php">Hospitals</a></li>
                            <li><a href="./pages/blogs.php">Blogs</a></li>
                            <li><a href="./pages/join.php">Join as partner</a></li>
                        </ul>
                        <div class="translator">
                            
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <section>
            <div class="container">
                <div class="heroContent">
                    <h1>Quicker, Easier, Smarter Medical and Wellness Travel</h1>
                    <p>Healthtrip streamlines your medical travel experience by offering personalized assistance from start to finish.</p>
                    <a href="#">
                        <button>
                            <i class='bxr  bx-message'></i>  
                            Chat with a health expert now
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- =====================
     HEALTH EXPERT  SECTION
    ========================-->
    <div class="healthPlatform">
        <div class="containers">
            <div class="platFormHolder">
                <h1>World's Largest Health Travel Platform</h1>
                <div class="platFormContainer">
                    <div class="indivi">
                       <div class="number">
                            <h2 data-target="9796">0</h2><span>+</span>
                        </div>

                        <div class="serve">
                            <p>Patients</p>
                            <span>Served</span>
                        </div>
                    </div>
                    <div class="indivi">
                    <div class="number">
                        <h2 data-target="38">0</h2><span>+</span>
                    </div>
                        <div class="serve">
                            <p>Countires</p>
                            <span>Reached</span>
                        </div>
                    </div>
                    <div class="indivi">
                    <div class="number">
                        <h2 data-target="1554">0</h2><span>+</span>
                    </div>
                        <div class="serve">
                            <p>Hospitals</p>
                            <span>Partners</span>
                        </div>
                    </div>
                </div>
                <div class="videoContainer">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/UaCJt_rt0ZU?si=e8smSVtfGVHMg_kw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- =====================
     WHY CHOOSE US  SECTION==
    =======================-->
    <div class="whyChoose">
        <div class="containers">
            <div class="chooseHolder">
                <h1>Why <span>Choose</span> Renova?</h1>

                <div class="chooseContainer">
                    <div class="choose">
                        <img src="./asset/images/Opinion.webp" alt="">
                        <h4>Free Second Opinion</h4>
                        <p>Consult 3 top surgeons with your medical reports, without any charges.</p>
                    </div>
                    <div class="choose">
                        <img src="./asset/images/guarantee.svg" alt="">
                        <h4>Lowest cost guarantee</h4>
                        <p>Your cost of treatment reduces when you go through us, due to discounted rates.</p>
                    </div>
                    <div class="choose">
                        <img src="./asset/images/medical.webp" alt="">
                        <h4>Free medical expert</h4>
                        <p>A dedicated expert will ensure you get the best treatment and monitor your progress.</p>
                    </div>
                    <div class="choose">
                        <img src="./asset/images/travel.webp" alt="">
                        <h4>Seamless travel planning</h4>
                        <p>We’ll arrange your visa invitation, hotel, airport pickup and translators at the destination.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================
     FETURES DESTINATION SECTION==
    =============================-->

    <div class="fetureDestination">
        <div class="containers">
            <div class="destinationHolder">
                <h1>Featured <span>Destinations</span></h1>

                <div class="destinationContainer">
                    <a href="">
                        <div class="destination">
                            <img src="./asset/images/uk.png" alt="">
                            <h4>United Kingdom</h4>
                        </div>
                    </a>
                    <a href="#">
                        <div class="destination">
                            <img src="./asset/images/india.png" alt="">
                            <h4>India</h4>
                        </div>
                    </a>
                   <a href="#">
                        <div class="destination">
                            <img src="./asset/images/thialand.png" alt="">
                            <h4>Thailand</h4>
                        </div>
                   </a>
                   <a href="#">
                        <div class="destination">
                            <img src="./asset/images/sing.png" alt="">
                            <h4>Singapore</h4>
                        </div>
                   </a>
                    <a href="#">
                        <div class="destination">
                            <img src="./asset/images/mala.png" alt="">
                            <h4>Malaysia</h4>
                        </div>
                    </a>
                    <a href="#">
                        <div class="destination">
                            <img src="./asset/images/niger.png" alt="">
                            <h4>Nigeria</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- =====================
     TREATMENTS  SECTION====
    ========================-->

    <div class="treatmentHolder">
        <div class="containers">
            <div class="treatmentContainers">
                <h1>Find Your <span>Treatment</span></h1>
                <div class="treatmentHolders">
                    <a href="">
                        <div class="treatment">
                            <div class="img">
                                <img src="./asset/images/checkup.webp" alt="">
                                <div class="positioned">
                                    <div class="icon">
                                        <i class='bxr  bx-pill-bottle-alt'></i> 
                                    </div>
                                    <div class="content">
                                        <h4>Medical</h4>
                                        <p>click here to fetch packages</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="treatment">
                            <div class="img">
                                <img src="./asset/images/head.webp" alt="">
                                <div class="positioned">
                                    <div class="icon">
                                        <i class='bxr  bx-pill-bottle-alt'></i> 
                                    </div>
                                    <div class="content">
                                        <h4>Health Checkup</h4>
                                        <p>click here to fetch packages</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="treatment">
                            <div class="img">
                                <img src="./asset/images/wellness.webp" alt="">
                                <div class="positioned">
                                    <div class="icon">
                                        <i class='bxr  bx-pill-bottle-alt'></i> 
                                    </div>
                                    <div class="content">
                                        <h4>Wellness</h4>
                                        <p>click here to fetch packages</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================
     POPULAR TREATMENTS SECTION==
    ==============================-->
    <div class="popularTreatment">
        <div class="containers">
            <div class="popularHolder">
                <div class="headingContainer">
                    <div class="heading">
                        <h1>Most <span>Popular</span> Treatment Destinations</h1>
                    </div>
                    <div class="headingIcon">
                        <div class="backArrow">
                           <i class='bxr  bx-chevron-left'></i> 
                        </div>
                        <div class="rightArrow">
                           <i class='bxr  bx-chevron-right'></i> 
                        </div>
                    </div>
                </div>
                <div class="popularContainerWrapper">
                    <div class="popularContainer">
                    <div class="pHOlder">
                        <div class="pHeader">
                            <img src="./asset/images/german.png" alt="">
                            <h4>Germany</h4>
                        </div>
                        <div class="imagesContainer">
                            <div class="imgs">
                                <img src="./asset/images/germany.webp" alt="">
                                <p>Place to visit</p>
                            </div>
                            <div class="imgs">
                                <img src="./asset/images/doctors.webp" alt="">
                                <p>Doctors</p>
                            </div>
                            <div class="imgs">
                                <img src="./asset/images/germany_4.webp" alt="">
                                <p>Hospitals</p>
                            </div>
                            <div class="imgs">
                                <img src="./asset/images/stay.webp" alt="">
                                <p>Stay</p>
                            </div>
                        </div>
                        <div class="package">
                            <p>Package starting from</p>
                            <span>USD</span>
                        </div>
                       <a href="">
                            <div class="btn">
                                <button>Explore</button>
                            </div>
                       </a>
                    </div>
                    <div class="pHOlder">
                        <div class="pHeader">
                            <img src="./asset/images/uk.png" alt="">
                            <h4>Uk</h4>
                        </div>
                        <div class="imagesContainer">
                            <div class="imgs">
                                <img src="./asset/images/uk_2.webp" alt="">
                                <p>Place to visit</p>
                            </div>
                            <div class="imgs">
                                <img src="./asset/images/uk_1.webp" alt="">
                                <p>Doctorst</p>
                            </div>
                            <div class="imgs">
                                <img src="./asset/images/uk_4.webp" alt="">
                                <p>Hospitals</p>
                            </div>
                            <div class="imgs">
                                <img src="./asset/images/uk_3.webp" alt="">
                                <p>Stay</p>
                            </div>
                        </div>
                        <div class="package">
                            <p>Package starting from</p>
                            <span>USD</span>
                        </div>
                       <a href="">
                            <div class="btn">
                                <button>Explore</button>
                            </div>
                       </a>
                    </div>
                    <div class="pHOlder">
                        <div class="pHeader">
                            <img src="./asset/images/india.png" alt="">
                            <h4>India</h4>
                        </div>
                        <div class="imagesContainer">
                            <div class="imgs">
                                <img src="./asset/images/india_2.webp" alt="">
                                <p>Place to visit</p>
                            </div>
                            <div class="imgs">
                                <img src="./asset/images/india_1.webp" alt="">
                                <p>Doctors</p>
                            </div>
                            <div class="imgs">
                                <img src="./asset/images/india_4.webp" alt="">
                                <p>Hospitals</p>
                            </div>
                            <div class="imgs">
                                <img src="./asset/images/india_3.webp" alt="">
                                <p>Stay</p>
                            </div>
                        </div>
                        <div class="package">
                            <p>Package starting from</p>
                            <span>USD</span>
                        </div>
                       <a href="">
                            <div class="btn">
                                <button>Explore</button>
                            </div>
                       </a>
                    </div>
                    <div class="pHOlder">
                        <div class="pHeader">
                            <img src="./asset/images/sing.png" alt="">
                            <h4>Singapore</h4>
                        </div>
                        <div class="imagesContainer">
                            <div class="imgs">
                                <img src="./asset/images/s2.webp" alt="">
                                <p>Place to visit</p>
                            </div>
                            <div class="imgs">
                                <img src="./asset/images/s1.webp" alt="">
                                <p>Doctors</p>
                            </div>
                            <div class="imgs">
                                <img src="./asset/images/s4.webp" alt="">
                                <p>Hospitals</p>
                            </div>
                            <div class="imgs">
                                <img src="./asset/images/s3.webp" alt="">
                                <p>Stay</p>
                            </div>
                        </div>
                        <div class="package">
                            <p>Package starting from</p>
                            <span>USD</span>
                        </div>
                       <a href="">
                            <div class="btn">
                                <button>Explore</button>
                            </div>
                       </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ==========================
     POPULAR HOSPITALS SECTION==
    ============================-->

    <div class="popularHospitalHOlder">
        <div class="containers">
            <div class="popularHospitalContainer">
                <div class="popularHospialHeader">
                    <div class="headerHolder">
                        <h1>Popular <span>Hospitals</span></h1>

                       <div class="popularIcon">
                            <div class="backArrow hospital-back">
                               <i class='bxr  bx-chevron-left'></i> 
                            </div>
                            <div class="rightArrow hospital-next">
                               <i class='bxr  bx-chevron-right'></i>
                            </div>   
                       </div>
                    </div>

                        <div class="popular hospital-slider-wrapper">
                            <div class="popularContainer hospital-slider">
                                <a href="#">
                                    <div class="poularHospital">
                                        <img src="./asset/images/germany_4.webp" alt="">
                                        <div class="popularContent">
                                            <div class="name">
                                                <h4>Charite Hospital</h4>
                                                <i class='bxr  bx-chevron-right'></i>
                                            </div>
                                            <div class="location">
                                                <p>Berlin, Germany</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="poularHospital">
                                        <img src="./asset/images/germany_4.webp" alt="">
                                        <div class="popularContent">
                                            <div class="name">
                                                <h4>Charite Hospital</h4>
                                                <i class='bxr  bx-chevron-right'></i>
                                            </div>
                                            <div class="location">
                                                <p>Berlin, Germany</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="poularHospital">
                                        <img src="./asset/images/germany_4.webp" alt="">
                                        <div class="popularContent">
                                            <div class="name">
                                                <h4>Charite Hospital</h4>
                                                <i class='bxr  bx-chevron-right'></i>
                                            </div>
                                            <div class="location">
                                                <p>Berlin, Germany</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="poularHospital">
                                        <img src="./asset/images/germany_4.webp" alt="">
                                        <div class="popularContent">
                                            <div class="name">
                                                <h4>Charite Hospital</h4>
                                                <i class='bxr  bx-chevron-right'></i>
                                            </div>
                                            <div class="location">
                                                <p>Berlin, Germany</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ==================
     Popular Doctors SECTION==
    =======================-->

    <div class="popularDoctors">
        <div class="containers">
            <div class="popularDoctorContainer">
                <div class="doctoreHeader">
                    <div class="docHead">
                        <h1><span>popular</span> Doctors</h1>
                    </div>
                   <div class="arrows">
                        <div class="docBack">
                            <i class='bxr  bx-chevron-left'></i> 
                        </div>
                        <div class="docNext">
                            <i class='bxr  bx-chevron-right'></i>
                        </div>    
                   </div>
                </div>

                <div class="popularDocWrapper">
                    <div class="docContainer">
                        <div class="doctor doc-slider">
                            <div class="doc">
                                <div class="img">
                                    <img src="./asset/images/doc.jpg" alt="">
                                    <div class="flag">
                                        <img src="./asset/images/india.png" alt="">
                                    </div>
                                </div>

                                    <a href="#">
                                        <h2>Dr. Pradeep Chowbey</h2>
                                    </a>
                                    <p>Chairman - Max Institute of Laparoscopic, Endoscopic, Bariatric Surgery & Allied Surgical Specialities</p>
                                    <div class="rate">
                                        <div class="stars">
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                        </div>
                                        <div class="rateNum">
                                            <p>5.0</p>
                                        </div>
                                    </div>
                                    <div class="consult">
                                        <p>Consults at: Max Healthcare Saket</p>
                                    </div>

                                    <div class="expirence">
                                        <div class="con">
                                            <i class='bxr  bx-briefcase-alt'></i> 
                                            <p>Experience:</p>
                                        </div>
                                        <span>30+ Years</span>
                                    </div>
                                    <div class="expirence">
                                        <div class="con">
                                            <i class='bxr  bx-slice'></i> 
                                            <p>Surgeries:</p>
                                        </div>
                                        <span>85000+</span>
                                    </div>

                                    <a href="#">
                                        <div class="free">
                                            <i class="fa-brands fa-whatsapp"></i>
                                            <p>Get free option</p>
                                        </div>
                                    </a>

                                   <a href="#">
                                        <div class="btn">
                                            <button>Request Appointment</button>
                                        </div>
                                   </a>

                                    <div class="lockup">
                                        <i class='bxr  bx-lock-keyhole'></i> 
                                        <p>Your Health data is protected with us</p>
                                    </div>
                            </div>
                            <div class="doc">
                                <div class="img">
                                    <img src="./asset/images/doc.jpg" alt="">
                                    <div class="flag">
                                        <img src="./asset/images/india.png" alt="">
                                    </div>
                                </div>

                                    <a href="#">
                                        <h2>Dr. Pradeep Chowbey</h2>
                                    </a>
                                    <p>Chairman - Max Institute of Laparoscopic, Endoscopic, Bariatric Surgery & Allied Surgical Specialities</p>
                                    <div class="rate">
                                        <div class="stars">
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                        </div>
                                        <div class="rateNum">
                                            <p>5.0</p>
                                        </div>
                                    </div>
                                    <div class="consult">
                                        <p>Consults at: Max Healthcare Saket</p>
                                    </div>

                                    <div class="expirence">
                                        <div class="con">
                                            <i class='bxr  bx-briefcase-alt'></i> 
                                            <p>Experience:</p>
                                        </div>
                                        <span>30+ Years</span>
                                    </div>
                                    <div class="expirence">
                                        <div class="con">
                                            <i class='bxr  bx-slice'></i> 
                                            <p>Surgeries:</p>
                                        </div>
                                        <span>85000+</span>
                                    </div>

                                    <a href="#">
                                        <div class="free">
                                            <i class="fa-brands fa-whatsapp"></i>
                                            <p>Get free option</p>
                                        </div>
                                    </a>

                                   <a href="#">
                                        <div class="btn">
                                            <button>Request Appointment</button>
                                        </div>
                                   </a>

                                    <div class="lockup">
                                        <i class='bxr  bx-lock-keyhole'></i> 
                                        <p>Your Health data is protected with us</p>
                                    </div>
                            </div>
                            <div class="doc">
                                <div class="img">
                                    <img src="./asset/images/doc.jpg" alt="">
                                    <div class="flag">
                                        <img src="./asset/images/india.png" alt="">
                                    </div>
                                </div>

                                    <a href="#">
                                        <h2>Dr. Pradeep Chowbey</h2>
                                    </a>
                                    <p>Chairman - Max Institute of Laparoscopic, Endoscopic, Bariatric Surgery & Allied Surgical Specialities</p>
                                    <div class="rate">
                                        <div class="stars">
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                        </div>
                                        <div class="rateNum">
                                            <p>5.0</p>
                                        </div>
                                    </div>
                                    <div class="consult">
                                        <p>Consults at: Max Healthcare Saket</p>
                                    </div>

                                    <div class="expirence">
                                        <div class="con">
                                            <i class='bxr  bx-briefcase-alt'></i> 
                                            <p>Experience:</p>
                                        </div>
                                        <span>30+ Years</span>
                                    </div>
                                    <div class="expirence">
                                        <div class="con">
                                            <i class='bxr  bx-slice'></i> 
                                            <p>Surgeries:</p>
                                        </div>
                                        <span>85000+</span>
                                    </div>

                                    <a href="#">
                                        <div class="free">
                                            <i class="fa-brands fa-whatsapp"></i>
                                            <p>Get free option</p>
                                        </div>
                                    </a>

                                   <a href="#">
                                        <div class="btn">
                                            <button>Request Appointment</button>
                                        </div>
                                   </a>

                                    <div class="lockup">
                                        <i class='bxr  bx-lock-keyhole'></i> 
                                        <p>Your Health data is protected with us</p>
                                    </div>
                            </div>
                            <div class="doc">
                                <div class="img">
                                    <img src="./asset/images/doc.jpg" alt="">
                                    <div class="flag">
                                        <img src="./asset/images/india.png" alt="">
                                    </div>
                                </div>

                                    <a href="#">
                                        <h2>Dr. Pradeep Chowbey</h2>
                                    </a>
                                    <p>Chairman - Max Institute of Laparoscopic, Endoscopic, Bariatric Surgery & Allied Surgical Specialities</p>
                                    <div class="rate">
                                        <div class="stars">
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                        </div>
                                        <div class="rateNum">
                                            <p>5.0</p>
                                        </div>
                                    </div>
                                    <div class="consult">
                                        <p>Consults at: Max Healthcare Saket</p>
                                    </div>

                                    <div class="expirence">
                                        <div class="con">
                                            <i class='bxr  bx-briefcase-alt'></i> 
                                            <p>Experience:</p>
                                        </div>
                                        <span>30+ Years</span>
                                    </div>
                                    <div class="expirence">
                                        <div class="con">
                                            <i class='bxr  bx-slice'></i> 
                                            <p>Surgeries:</p>
                                        </div>
                                        <span>85000+</span>
                                    </div>

                                    <div class="free">
                                        <i class="fa-brands fa-whatsapp"></i>
                                        <p>Get free option</p>
                                    </div>

                                   <a href="#">
                                        <div class="btn">
                                            <button>Request Appointment</button>
                                        </div>
                                   </a>

                                    <div class="lockup">
                                        <i class='bxr  bx-lock-keyhole'></i> 
                                        <p>Your Health data is protected with us</p>
                                    </div>
                            </div>
                            <div class="doc">
                                <div class="img">
                                    <img src="./asset/images/doc.jpg" alt="">
                                    <div class="flag">
                                        <img src="./asset/images/india.png" alt="">
                                    </div>
                                </div>

                                <a href="#">
                                        <h2>Dr. Pradeep Chowbey</h2>
                                    </a>
                                    <p>Chairman - Max Institute of Laparoscopic, Endoscopic, Bariatric Surgery & Allied Surgical Specialities</p>
                                    <div class="rate">
                                        <div class="stars">
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                            <i class='bxr  bxs-star'></i> 
                                        </div>
                                        <div class="rateNum">
                                            <p>5.0</p>
                                        </div>
                                    </div>
                                    <div class="consult">
                                        <p>Consults at: Max Healthcare Saket</p>
                                    </div>

                                    <div class="expirence">
                                        <div class="con">
                                            <i class='bxr  bx-briefcase-alt'></i> 
                                            <p>Experience:</p>
                                        </div>
                                        <span>30+ Years</span>
                                    </div>
                                    <div class="expirence">
                                        <div class="con">
                                            <i class='bxr  bx-slice'></i> 
                                            <p>Surgeries:</p>
                                        </div>
                                        <span>85000+</span>
                                    </div>

                                    <div class="free">
                                        <i class="fa-brands fa-whatsapp"></i>
                                        <p>Get free option</p>
                                    </div>

                                   <a href="#">
                                        <div class="btn">
                                            <button>Request Appointment</button>
                                        </div>
                                   </a>

                                    <div class="lockup">
                                        <i class='bxr  bx-lock-keyhole'></i> 
                                        <p>Your Health data is protected with us</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============================
     Customers Review SECTION==
    ================================-->

    <div class="customerHolder">
        <div class="containers">
            <div class="customerReview">
                <div class="text">
                    <h1>Trusted By</h1>
                    <h2>A Million Customers Worldwide</h2>
                </div>
                   
                 <div class="cutomerArrow">
                    <div class="readMore">
                        <a href="#">View All</a>
                    </div>
                    <div class="customer-back">
                       <i class='bxr  bx-chevron-left'></i> 
                    </div>
                    <div class="customer-next">
                        <i class='bxr  bx-chevron-right'></i> 
                    </div>
                </div>

                <div class="customerSlider">
                    <div class="customerHolders">
                        <div class="customerWrapper">
                            <div class="customerProfile">
                                <div class="img">
                                    <img src="./asset/images/cus.webp" alt="">
                                </div>
                                <div class="customerInfo">
                                    <h2>MR SANISU ISLAM</h2>
                                    <p>South Sudan</p>
                                </div>
                            </div>

                            <div class="customerReviewContent">
                                <div class="customerPerform">
                                    <div class="cus">
                                        <i class='bxr  bx-hospital'></i> 
                                        <p>Hospital</p>
                                    </div>

                                    <div class="stars">
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i>
                                    </div>
                                    <a href="">
                                        <p>Aakash Hospital</p>
                                    </a>
                                </div>
                                <div class="customerPerform">
                                    <div class="cus">
                                        <i class="fa-solid fa-stethoscope"></i>                                        <p>Doctor</p>
                                    </div>

                                    <div class="stars">
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i>
                                    </div>
                                    <a href="">
                                        <p>Dr. Aashish Chaudhry</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="customerWrapper">
                            <div class="customerProfile">
                                <div class="img">
                                    <img src="./asset/images/cus.webp" alt="">
                                </div>
                                <div class="customerInfo">
                                    <h2>MR SANISU ISLAM</h2>
                                    <p>South Sudan</p>
                                </div>
                            </div>

                            <div class="customerReviewContent">
                                <div class="customerPerform">
                                    <div class="cus">
                                        <i class='bxr  bx-hospital'></i> 
                                        <p>Hospital</p>
                                    </div>

                                    <div class="stars">
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i>
                                    </div>
                                    <a href="">
                                        <p>Aakash Hospital</p>
                                    </a>
                                </div>
                                <div class="customerPerform">
                                    <div class="cus">
                                        <i class="fa-solid fa-stethoscope"></i>                                        <p>Doctor</p>
                                    </div>

                                    <div class="stars">
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i>
                                    </div>
                                    <a href="">
                                        <p>Dr. Aashish Chaudhry</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="customerWrapper">
                            <div class="customerProfile">
                                <div class="img">
                                    <img src="./asset/images/cus.webp" alt="">
                                </div>
                                <div class="customerInfo">
                                    <h2>MR SANISU ISLAM</h2>
                                    <p>South Sudan</p>
                                </div>
                            </div>

                            <div class="customerReviewContent">
                                <div class="customerPerform">
                                    <div class="cus">
                                        <i class='bxr  bx-hospital'></i> 
                                        <p>Hospital</p>
                                    </div>

                                    <div class="stars">
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i>
                                    </div>
                                    <a href="">
                                        <p>Aakash Hospital</p>
                                    </a>
                                </div>
                                <div class="customerPerform">
                                    <div class="cus">
                                        <i class="fa-solid fa-stethoscope"></i>                                        <p>Doctor</p>
                                    </div>

                                    <div class="stars">
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i>
                                    </div>
                                    <a href="">
                                        <p>Dr. Aashish Chaudhry</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="customerWrapper">
                            <div class="customerProfile">
                                <div class="img">
                                    <img src="./asset/images/cus.webp" alt="">
                                </div>
                                <div class="customerInfo">
                                    <h2>MR SANISU ISLAM</h2>
                                    <p>South Sudan</p>
                                </div>
                            </div>

                            <div class="customerReviewContent">
                                <div class="customerPerform">
                                    <div class="cus">
                                        <i class='bxr  bx-hospital'></i> 
                                        <p>Hospital</p>
                                    </div>

                                    <div class="stars">
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i>
                                    </div>
                                    <a href="">
                                        <p>Aakash Hospital</p>
                                    </a>
                                </div>
                                <div class="customerPerform">
                                    <div class="cus">
                                        <i class="fa-solid fa-stethoscope"></i>                                        <p>Doctor</p>
                                    </div>

                                    <div class="stars">
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i> 
                                        <i class='bxr  bxs-star'></i>
                                    </div>
                                    <a href="">
                                        <p>Dr. Aashish Chaudhry</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================
     Try Now SECTION==
    ===========================-->

    <div class="tryHolder">
        <div class="containers">
            <div class="tryNowContainer">
                <div class="nurse">
                    <img src="./asset/images/nurse.webp" alt="">
                </div>
                <div class="tryContent">
                    <div class="header">
                        <h1>Try Now</h1>
                    </div>
                    <div class="onlineHolder">
                        <div class="imgs">
                            <img src="./asset/images/trynow_img1.webp" alt="">
                        </div>
                        <div class="trytext">
                            <h4>Get Online Doctor Consultation from the comfort of your home</h4>
                        </div>
                    </div>
                    <div class="onlineHolder">
                        <div class="imgs">
                            <img src="./asset/images/trynow_img1.webp" alt="">
                        </div>
                        <div class="trytext">
                            <h4>Get a Second Opinion: Submit your reports and receive three free specialist second opinions.</h4>
                             <div class="trybtn">
                            <button>Chat with Health Expert</button>
                        </div>
                        </div>
                       
                    </div>
                    <div class="onlineHolder">
                        <div class="imgs">
                            <img src="./asset/images/trynow_img1.webp" alt="">
                        </div>
                        <div class="trytext">
                            <h4>Experience world-class wellness services with seamless care, convenience, and compassion.</h4>
                             <div class="imputHolder">
                            <input type="number" placeholder="Enter your mobile number">
                            <button>Notify Me</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================
    OFFICE SECTION
    =============================-->
    <div class="officesContiners">
        <div class="containers">
            <div class="officeHeader">
                <h1>Our <span>Offices</span> </h1>
            </div>
            <div class="officeHOlders">
                <div class="offices">
                    <img src="./asset/images/uk.png" alt="">
                    <h3>UK</h3>
                    <p>16192 Coastal Highway, Lewes, United States of America.</p>
                </div>
                <div class="offices">
                    <img src="./asset/images/sing.png" alt="">
                    <h3>SG</h3>
                    <p>Vision Exchange, # 13-30, No-02 Venture Drive, Singapore-608526</p>
                </div>
                <div class="offices">
                    <img src="./asset/images/saudi.webp" alt="">
                    <h3>KSA</h3>
                    <p>3738 King Abdullah Branch Rd, 6258 Al Muhammadiyah Dist, 12362, Riyadh, Saudi Arabia</p>
                </div>
                <div class="offices">
                    <img src="./asset/images/uae.png" alt="">
                    <h3>UAE</h3>
                    <p>3401, 34th Floor, Saeed Tower 2, Sheikh Zayed Road, PO Box No. 114429. Dubai, UAE.</p>
                </div>
                <div class="offices">
                    <img src="./asset/images/india.png" alt="">
                    <h3>IN</h3>
                    <p>2nd Floor, Omaxe Square, Jasola, Behind Apollo Hospital, New Delhi, Delhi 110025</p>
                </div>
                <div class="offices">
                    <img src="./asset/images/bd.png" alt="">
                    <h3>BD</h3>
                    <p>Apt-4A, Level-5, House-407, Road-29, DOHS Mohakhali, Dhaka-1206.</p>
                </div>
                <div class="offices">
                    <img src="./asset/images/turkey.avif" alt="">
                    <h3>TD</h3>
                    <p>Regus - Atasehir Palladium Office Barbaros, Palladium Office and Residence Building, Halk Cd. No:8/A Floor 2 & 3, 34746 Ataşehir/İstanbul.</p>
                </div>
                <div class="offices">
                    <img src="./asset/images/uk.png" alt="">
                    <h3>TH</h3>
                    <p>Axcel Health Co. Ltd., UnionSpace Building, 30 Soi Sukhumvit 61, Khlongton-nua, Wattana, Bangkok 10110. Thailand.</p>
                </div>
                <div class="offices">
                    <img src="./asset/images/niger.png" alt="">
                    <h3>NG</h3>
                    <p>Dr Hassan’s Hospital, 5 Katsina Ala street, Maitama- Abuja Nigeria.</p>
                </div>
                <div class="offices">
                    <img src="./asset/images/uk.png" alt="">
                    <h3>ET</h3>
                    <p>Hayahulet Golagol Tower, Office Number 1014, 10th Floor.</p>
                </div>
                <div class="offices">
                    <img src="./asset/images/eg.png" alt="">
                    <h3>EG</h3>
                    <p>Building 145, Sahl Hamza, Alfaisal Street, Giza - Cairo Egypt</p>
                </div>
            </div>
        </div>
    </div>

    <!-- =========================
            FOOTER SECTION
    ========================== -->
    <footer class="siteFooter">
        <div class="containers">

            <div class="footerGrid">

                <!-- Brand -->
                <div class="footerCol">
                    <h2 class="footerLogo">Health<span>Care</span></h2>
                    <p>
                        Connecting patients with world-class hospitals and doctors
                        globally. Trusted medical care with compassion and excellence.
                    </p>
                </div>

                <!-- Services -->
                <div class="footerCol">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="#">Find Doctors</a></li>
                        <li><a href="#">Hospitals</a></li>
                        <li><a href="#">Medical Tourism</a></li>
                        <li><a href="#">Online Consultation</a></li>
                        <li><a href="#">Second Opinion</a></li>
                    </ul>
                </div>

                <div class="footerCol">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Why Choose Us</a></li>
                        <li><a href="#">Our Doctors</a></li>
                        <li><a href="#">Patient Reviews</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footerCol">
                    <h3>Contact</h3>
                    <p>Email: support@healthcare.com</p>
                    <p>Phone: +234 800 000 0000</p>

                    <div class="footerSocials">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>

            <div class="footerBottom">
                <p>© 2025 HealthCare. All Rights Reserved.</p>
            </div>

        </div>
    </footer>

    <!-- <script type="text/javascript">
        options = {
            "outerStyle": "circle",
            "hoverEffect": "circle-move",
            "hoverItemMove": true,
            "defaultCursor": true,
            "outerWidth": 41,
            "outerHeight": 41
            }
        magicMouse(options);
    </script> -->


    <script src="./asset/script.js"></script>
</body>
</html>