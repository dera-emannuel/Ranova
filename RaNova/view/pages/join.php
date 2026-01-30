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
    <link rel="stylesheet" href="./asset/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header style="border: 1px solid rgba(183, 183, 183, 0.25);">
            <div class="container">
                <nav>
                    <div class="logo">
                        <a href="../index.php">
                            <img src="../asset/images/hosiptalLogo.png" alt="">
                        </a>

                        <div class="menu" id="menuBtn">🔥</div>
                    </div>
                    <div class="linksHOlder">
                        <ul>
                            <li><a href="./treatments.php">Treatments</a></li>
                            <li><a href="./wellness.php">Wellness</a></li>
                            <li><a href="./doctors.php">Doctors</a></li>
                            <li><a href="./hospital.php">Hospitals</a></li>
                            <li><a href="./blogs.php">Blogs</a></li>
                            <li><a href="./join.php">Join as partner</a></li>
                        </ul>
                        <div class="translator">
                            
                        </div>
                    </div>
                </nav>
            </div>
    </header>

    <section class="partnerSection">
        <div class="containers">

            <div class="partnerHeader">
                <h2>Join as a Partner</h2>
                <p>Partner with us to reach patients globally and grow your healthcare services.</p>
            </div>

            <div class="partnerCards">

                <a href="./hospitalRegStep1.php" class="partnerCard">
                    <i class="fa-solid fa-hospital"></i>
                    <h3>Hospital / Clinic</h3>
                    <p>Register your hospital or clinic and manage doctors, services, and patients.</p>
                </a>

                <a href="./doc1.php" class="partnerCard">
                    <i class="fa-solid fa-user-doctor"></i>
                    <h3>Doctor</h3>
                    <p>Join verified hospitals and start receiving patient appointments.</p>
                </a>

                <a href="#" class="partnerCard">
                    <i class="fa-solid fa-spa"></i>
                    <h3>Wellness Center</h3>
                    <p>List wellness, rehabilitation, and preventive care programs.</p>
                </a>

            </div>
        </div>
    </section>

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

    <script src="../asset/script.js"></script>
</body>
</html>