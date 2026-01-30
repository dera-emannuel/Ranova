<?php 
    include "./preloader.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <title>Renova</title>
    <link rel="stylesheet" href="../asset/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header style="border: 1px solid rgba(183, 183, 183, 0.25);">
        <nav>
            <div class="logo">
                <a href="../index.php">
                    <img src="../asset/images/hosiptalLogo.png" alt="">
                </a>

                <div class="menu" id="menuBtn">🔥</div>
            </div>
            <div class="linksHOlder">
                <ul>
                    <li><a href="./treatments.php">Treatment</a></li>
                    <li><a href="./wellness.php">Wellness</a></li>
                    <li><a href="./doctors.php">Doctors</a></li>
                    <li><a href="./blogs.php">Blogs</a></li>
                    <li><a href="./join.php">Join as partner</a></li>
                </ul>
                <div class="translator">
                </div>
            </div>
        </nav>    
    </header>

    <div class="containers">
        <div class="homeContainer">
            <div class="home">
                <a href="../index.php"><i class="fa-solid fa-house"></i></a>
            </div>
           <div class="ar">
                    <i class='bxr  bx-chevron-right'></i> 
                </div>
            <div class="text">
                <a href="./hospital.php" style=" color: #2e2e2eff;">Hospitals</a>
            </div>
             <div class="ar">
                <i class='bxr  bx-chevron-right'></i> 
            </div> 
            <div class="text">
                <p>hostital name</p>
            </div>   
        </div>

        <div class="hospialDetailPage">
            <div class="hospitalImgHolder">
                <div class="headerImg">
                    <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fd3fzwscyjtgllx.cloudfront.net%2Fhospitals%2Fimages%2FEVzz39obNHevMByIGaGKcsv91754286172339.jpg&w=1200&q=75" alt="">
                </div>
                <div class="subImgs">
                    <div class="sub">
                        <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fs3-ap-south-1.amazonaws.com%2Fimages.hospals.com%2Fhospitals%2Fimages%2FjaXQ2mAagOsxxsiof4hLqHds1754286352319.jpg&w=640&q=75" alt="">
                    </div>
                    <div class="sub">
                        <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fs3-ap-south-1.amazonaws.com%2Fimages.hospals.com%2Fhospitals%2Fimages%2FJOGQRn62GEFOS6zrjW9TEHji1754286352459.jpg&w=640&q=75" alt="">
                    </div>
                    <div class="sub">
                        <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fs3-ap-south-1.amazonaws.com%2Fimages.hospals.com%2Fhospitals%2Fimages%2FrmFebFimBcIyKijfsyNG7HIW1754286352565.jpg&w=640&q=75" alt="">
                    </div>
                    <div class="sub">
                        <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fs3-ap-south-1.amazonaws.com%2Fimages.hospals.com%2Fhospitals%2Fimages%2FjFKcGc6L1MNMyJji7Sp49j6I1754286352553.jpg&w=640&q=75" alt="">
                    </div>
                </div>
            </div>
            <div class="formHolder">
                <div class="formHeader">
                    <h2>Book Free Consultation</h2>
                    <p>Please fill in your details, Our experts will get in touch with you</p>
                </div>

                <form>
                    <div class="formHOlders">
                        <input type="text" placeholder="Full Name">
                    </div>
                    <div class="formHOlders">
                        <input type="text" placeholder="Enter Your Email Address">
                    </div>
                    <div class="formHOlders">
                        <textarea name="message" placeholder="Describe Your Treatments requirement"></textarea>
                    </div>
                    <div class="formHOlders">
                        <input type="file">
                    </div>
                    <div class="check">
                        <input type="checkbox" required>
                        <label>I agree to receive updates/ notifications from RaNova via Email</label>
                    </div>
                    <div class="formBtn">
                        <button>submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="aboutHospitalHolder">
            <div class="aboutHospital">
                <div class="header">
                    <h2>About The Hospital</h2>
                </div>
                <div class="hospitalCOntent">
                    <h3>KIMS Hospital, Secunderabad</h3>
                    <p>One of the largest corporate healthcare groups in AP and Telangana in terms of number of patients treated and treatments offered, according to the CRISIL Report. We provide multi-disciplinary integrated healthcare services, with a focus on primary secondary & tertiary care in Tier 2-3 cities and primary, secondary, tertiary and quaternary healthcare in Tier 1 cities. We operate 9 multi-specialty hospitals under the “KIMS Hospitals” brand, with an aggregate bed capacity of 3,064, including over 2,500 operational beds as of December 31, 2020, which is 2.2 times more beds than the second largest provider in AP and Telangana, according to the CRISIL report. We offer a comprehensive range of healthcare services across over 25 specialties and super specialties, including cardiac sciences, oncology, neurosciences, gastric sciences, orthopaedics, organ transplantation, renal sciences and mother & child care.</p>
                    <span>Read more</span>
                </div>
                <div class="header">
                    <h2>Team & Specialisation</h2>
                </div>
                <div class="hospitalCOntent">
                    <h3>Speciality Includes:</h3>
                    <ul>
                        <li>Bone & joint centre</li>
                        <li>Arthoscopy centre</li>
                        <li>Bariatric surgery.</li>
                        <li>Breast Cancer.</li>
                        <li>Cornea Transplantation.</li>
                        <li>Centre of Genetic Metabolic Disorder</li>
                    </ul>
                </div>

                <div class="header">
                    <h2>Doctors</h2>
                </div>

                <div class="aboutHospitalArrow">
                    <div class="hosBackArrow">
                        <i class='bxr  bx-chevron-left'></i> 
                    </div>
                    <div class="hosRightArrow">
                        <i class='bxr  bx-chevron-right'></i> 
                    </div>
                </div>
                <div class="aboutHospitalSlider">
                    <div class="hospitalDoctorHolder">
                        <div class="eachHospitalDoc">
                            <img src="../asset/images/doc.jpg" alt="">
                            <h2>Dr. Aswini Duut</h2>
                            <span>General Physcain</span>
                            <p>Consults at: KIMS Hospital, Secunderabad</p>

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
                        <div class="eachHospitalDoc">
                            <img src="../asset/images/doc.jpg" alt="">
                            <h2>Dr. Aswini Duut</h2>
                            <span>General Physcain</span>
                            <p>Consults at: KIMS Hospital, Secunderabad</p>

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
                        <div class="eachHospitalDoc">
                            <img src="../asset/images/doc.jpg" alt="">
                            <h2>Dr. Aswini Duut</h2>
                            <span>General Physcain</span>
                            <p>Consults at: KIMS Hospital, Secunderabad</p>

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
                    </div>
                    <div class="header" style="margin-top: 30px;">
                        <h2>Gallery</h2>
                    </div>

                    <div class="galleryHolder">
                        <div class="galleryImg">
                            <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fs3-ap-south-1.amazonaws.com%2Fimages.hospals.com%2Fhospitals%2Fimages%2FjaXQ2mAagOsxxsiof4hLqHds1754286352319.jpg&w=640&q=75" alt="">
                        </div>
                        <div class="galleryImg">
                            <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fs3-ap-south-1.amazonaws.com%2Fimages.hospals.com%2Fhospitals%2Fimages%2FjaXQ2mAagOsxxsiof4hLqHds1754286352319.jpg&w=640&q=75" alt="">
                        </div>
                        <div class="galleryImg">
                            <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fs3-ap-south-1.amazonaws.com%2Fimages.hospals.com%2Fhospitals%2Fimages%2FjaXQ2mAagOsxxsiof4hLqHds1754286352319.jpg&w=640&q=75" alt="">
                        </div>
                        <div class="galleryImg">
                            <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fs3-ap-south-1.amazonaws.com%2Fimages.hospals.com%2Fhospitals%2Fimages%2FjaXQ2mAagOsxxsiof4hLqHds1754286352319.jpg&w=640&q=75" alt="">
                        </div>
                        <div class="galleryImg">
                            <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fs3-ap-south-1.amazonaws.com%2Fimages.hospals.com%2Fhospitals%2Fimages%2FjaXQ2mAagOsxxsiof4hLqHds1754286352319.jpg&w=640&q=75" alt="">
                        </div>
                    </div>

                    <div class="header">
                    <h2>Infrastructure</h2>
                </div>
                <div class="hospitalCOntent">
                    <h3>Speciality Includes:</h3>
                    <ul>
                        <li>200 + Patient Beds</li>
                        <li>ICU Beds Breakup</li>
                        <li>10 Beds - Cardiac Intensive Care Unit</li>
                        <li>7 Beds - Cardiothoracic Intensive Care Unit</li>
                        <li>25 Beds - Advanced Critical Care Unit</li>
                        <li>16 Beds - Surgical Intensive Care Unitr</li>
                        <li>5 Operation Theatres</li>
                        <li>24 x 7 Emergency Care</li>
                        <li>IP & OP Services</li>
                        <li>Diagnostic Lab</li>
                        <li>Physiotherapy</li>
                        <li>Child Development Unit</li>
                    </ul>
                </div>
            </div>
            <div class="call">
                <div class="phone">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="num">
                        <p>Talk to our Expert</p>
                        <a href="tel:9022251839">+234-9022251839</a>
                    </div>
                    <div class="callNow">
                        <a href="tel:9022251839">Call Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hosBlog">
                    <h2>Blog</h2>
                    <div class="hosBlogHolder">
                        <div class="hosBLogContainer">
                            <a href="">
                                <div class="hosBlogImg">
                                    <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fd3fzwscyjtgllx.cloudfront.net%2Fuploads%2Fblogs%2Fimg_6943c6d8227841766049496.png&w=1920&q=60" alt="">
                                </div>
                                <div class="hosBlogContent">
                                    <h3>Understanding Heart Disease: Symptoms, Causes, and Prevention</h3>
                                    <p>Heart disease remains a leading cause of mortality worldwide. Understanding its symptoms, causes, and preventive measures is crucial for maintaining heart health...</p>
                                </div>
                            </a>
                       </div>
                        <div class="hosBLogContainer">
                            <a href="">
                                <div class="hosBlogImg">
                                    <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fd3fzwscyjtgllx.cloudfront.net%2Fuploads%2Fblogs%2Fimg_6943c6d8227841766049496.png&w=1920&q=60" alt="">
                                </div>
                                <div class="hosBlogContent">
                                    <h3>Understanding Heart Disease: Symptoms, Causes, and Prevention</h3>
                                    <p>Heart disease remains a leading cause of mortality worldwide. Understanding its symptoms, causes, and preventive measures is crucial for maintaining heart health...</p>
                                </div>
                            </a>
                       </div>
                        <div class="hosBLogContainer">
                            <a href="">
                                <div class="hosBlogImg">
                                    <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fd3fzwscyjtgllx.cloudfront.net%2Fuploads%2Fblogs%2Fimg_6943c6d8227841766049496.png&w=1920&q=60" alt="">
                                </div>
                                <div class="hosBlogContent">
                                    <h3>Understanding Heart Disease: Symptoms, Causes, and Prevention</h3>
                                    <p>Heart disease remains a leading cause of mortality worldwide. Understanding its symptoms, causes, and preventive measures is crucial for maintaining heart health...</p>
                                </div>
                            </a>
                       </div>
                        <div class="hosBLogContainer">
                            <a href="">
                                <div class="hosBlogImg">
                                    <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fd3fzwscyjtgllx.cloudfront.net%2Fuploads%2Fblogs%2Fimg_6943c6d8227841766049496.png&w=1920&q=60" alt="">
                                </div>
                                <div class="hosBlogContent">
                                    <h3>Understanding Heart Disease: Symptoms, Causes, and Prevention</h3>
                                    <p>Heart disease remains a leading cause of mortality worldwide. Understanding its symptoms, causes, and preventive measures is crucial for maintaining heart health...</p>
                                </div>
                            </a>
                       </div>
                        <div class="hosBLogContainer">
                            <a href="">
                                <div class="hosBlogImg">
                                    <img src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fd3fzwscyjtgllx.cloudfront.net%2Fuploads%2Fblogs%2Fimg_6943c6d8227841766049496.png&w=1920&q=60" alt="">
                                </div>
                                <div class="hosBlogContent">
                                    <h3>Understanding Heart Disease: Symptoms, Causes, and Prevention</h3>
                                    <p>Heart disease remains a leading cause of mortality worldwide. Understanding its symptoms, causes, and preventive measures is crucial for maintaining heart health...</p>
                                </div>
                            </a>
                       </div>
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

                <div class="footerCol">
                    <h2 class="footerLogo">Health<span>Care</span></h2>
                    <p>
                        Connecting patients with world-class hospitals and doctors
                        globally. Trusted medical care with compassion and excellence.
                    </p>
                </div>

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

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const mainImg = document.querySelector(".headerImg img");
        const thumbs = document.querySelectorAll(".subImgs .sub img");

        thumbs.forEach((thumb) => {
            thumb.addEventListener("click", () => {

                document.querySelectorAll(".subImgs .sub")
                    .forEach(el => el.classList.remove("active"));

                thumb.parentElement.classList.add("active");

                mainImg.classList.add("addSUbImage");

                setTimeout(() => {
                    mainImg.src = thumb.src;
                }, 180);

                setTimeout(() => {
                    mainImg.classList.remove("addSUbImage");
                }, 180);
            });
        });

    });

    document.addEventListener("DOMContentLoaded", () => {
        const slider = document.querySelector(".hospitalDoctorHolder");
        const slides = document.querySelectorAll(".eachHospitalDoc");
        const prevBtn = document.querySelector(".hosBackArrow");
        const nextBtn = document.querySelector(".hosRightArrow");

        let currentIndex = 0;

        const slidesToShow = window.innerWidth <= 768 ? 1 : 2;
        const totalSlides = slides.length;
        const maxIndex = totalSlides - slidesToShow;

        function updateSlider() {
            const slideWidth = slides[0].offsetWidth + 20;
            slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

            prevBtn.classList.toggle("arrow-disabled", currentIndex === 0);
            nextBtn.classList.toggle("arrow-disabled", currentIndex >= maxIndex);
        }

        nextBtn.addEventListener("click", () => {
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateSlider();
            }
        });

        prevBtn.addEventListener("click", () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });

        window.addEventListener("resize", updateSlider);

        updateSlider();
    });
</script>


    <script src="../asset/script.js"></script>
</body>
</html>