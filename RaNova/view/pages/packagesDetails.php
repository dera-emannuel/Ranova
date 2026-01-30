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
                        <li><a href="./doctors.php">Doctors</a></li>
                        <li><a href="./hospital.php">Hospitals</a></li>
                        <li><a href="./wellness.php">wellness</a></li>
                        <li><a href="./blogs.php">blog</a></li>
                        <li><a href="./join.php">Join as partner</a></li>
                    </ul>
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
                <a href="./packages.php">Packages</a>
            </div>  
           <div class="ar">
                    <i class='bxr  bx-chevron-right'></i> 
            </div>
            <div class="text">
                <p>Packagex Detail</p>
           </div>
        </div>
    </div>

    <div class="overlay">
        <div class="formholder">
            <form class="consultationForm">
                <div class="formHeader">
                    <h2>Book Consultation</h2>
                    <span class="closeForm">&times;</span>
                </div>

                <div class="formGroup">
                    <input type="text" placeholder="Full Name" required>
                </div>

                <div class="formGroup">
                    <input type="tel" placeholder="Phone Number" required>
                </div>

                <div class="formGroup">
                    <input type="email" placeholder="Email Address" required>
                </div>

                <div class="formGroup">
                    <select required>
                        <option value="">Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="formGroup">
                    <input type="number" placeholder="Age" min="1" required>
                </div>

                <div class="formGroup">
                    <select required>
                        <option value="">Consultation Type</option>
                        <option>Physical</option>
                        <option>Online</option>
                    </select>
                </div>

                <div class="formGroup">
                    <input type="date" required>
                </div>

                <div class="formGroup">
                    <input type="time" required>
                </div>

                <div class="formGroup">
                    <textarea placeholder="Reason for Consultation" required></textarea>
                </div>

                <div class="formCheck">
                    <input type="checkbox" required>
                    <label>I agree to share my information for medical consultation</label>
                </div>

                <button type="submit" class="submitBtn">
                    Proceed to Payment
                </button>
            </form>
        </div>
    </div>

   <div class="containers">
        <div class="firstPackHolder">

            <div class="packImg">
                <span class="packageTag">Surgical Package</span>
                <img src="../asset/images/head.webp" alt="Total Hip Replacement">
            </div>

            <div class="firstContent">
                <div class="firstHeder">
                    <h2>Total Hip Replacement <span>(B/L)</span></h2>
                    <p>
                        Total Hip Replacement Surgery (THR) bilateral is a procedure where damaged sections of both hip joints
                        are removed and replaced with high-quality implants made of metal, ceramic, and durable plastic.
                    </p>
                </div>

                <div class="packageMeta">
                    <div>
                        <strong>Procedure Type</strong>
                        <span>Orthopedic Surgery</span>
                    </div>
                    <div>
                        <strong>Recovery Time</strong>
                        <span>6 – 12 Weeks</span>
                    </div>
                    <div>
                        <strong>Anesthesia</strong>
                        <span>General / Spinal</span>
                    </div>
                </div>

                <div class="packageActions">
                    <button>Book Consultation</button>
                </div>
            </div>
        </div>

        <div class="packageDetails">
            <div class="aboutPack">
                <h1>About Package</h1>
                <p>Total Hip Replacement Surgery (THR)/bilateral is a procedure where a surgeon removes the damaged sections of both the hip joints and replaces them with parts/ implants usually constructed of metal, ceramic and very hard plastic. Hip replacement surgery might be an option if hip pain interferes with daily activities and nonsurgical treatments haven't helped or are no longer effective. Arthritis damage is the most common reason to need hip replacement.</p>
            </div>
            <div class="packDoctors">
                <h2 class="h2">Doctors</h2>
                <div class="packageDetailsDoctors">
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
            </div>
        </div>
        <div class="customerHolder">
            <div class="containe">
                <div class="customerReview">
                  <h3 style="font-size: 20px;
                            color: #555;">Testimonial</h3>
                    <div class="cutomerArrow">
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
                                        <img src="../asset/images/cus.webp" alt="">
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
                                        <img src="../asset/images/cus.webp" alt="">
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
                                        <img src="../asset/images/cus.webp" alt="">
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
                                        <img src="../asset/images/cus.webp" alt="">
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

        <div class="aboutPack">
                <h1 style="margin-top: 20px;">About Treatment</h1>
                <p>Total Hip Replacement is a surgical procedure in which a damaged hip joint is replaced with a prosthetic implant. This treatment is typically recommended when the hip joint has been severely damaged due to conditions like osteoarthritis, rheumatoid arthritis, avascular necrosis, or traumatic injury. The goal is to relieve pain, improve joint function, and restore mobility.
                The procedure involves removing the damaged femoral head and acetabulum (hip socket), and replacing them with artificial components made from metal, ceramic, or plastic. The artificialjoint mimics the movement of a natural hip, allowing patientto return to daily activities with reduced or no pain. Thesurgery can be performed using traditional open techniques orminimally invasive approaches, depending on the patient's condition and the surgeon’s preference.</p>
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

    <SCRipt>
        const overlay = document.querySelector('.overlay');
        const openBtns = document.querySelectorAll('.packageActions button');
        const closeBtn = document.querySelector('.closeForm');

        openBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                overlay.classList.add('active');
            });
        });

        closeBtn.addEventListener('click', () => {
            overlay.classList.remove('active');
        });

        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) {
                overlay.classList.remove('active');
            }
        });
    </SCRipt>
    <script src="../asset/script.js"></script>
</body>
</html>