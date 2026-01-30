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
                <p>Packages</p>
           </div>

        </div>
    </div>

    <div class="containers">
        <div class="packHolders">
            <div class="packageCard">
                <div class="packImage">
                    <img src="../asset/images/head.webp" alt="">
                </div>
                <div class="packageName">
                    <h3>Total Hip Replacement (B/L)</h3>
                </div>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <span>4.0</span>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="startHplder">
                    <div class="sp">
                        <p>Package Starting from</p>
                    </div>
                    <div class="priceSpan">
                        <span>$5000</span>
                    </div>
                </div>
                <div class="packButton">
                    <a href="./packagesDetails.php">
                        <button>View Details</button>
                    </a>
                </div>
            </div>
            <div class="packageCard">
                <div class="packImage">
                    <img src="../asset/images/head.webp" alt="">
                </div>
                <div class="packageName">
                    <h3>Total Hip Replacement (B/L)</h3>
                </div>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <span>4.0</span>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="startHplder">
                    <div class="sp">
                        <p>Package Starting from</p>
                    </div>
                    <div class="priceSpan">
                        <span>$5000</span>
                    </div>
                </div>
                <div class="packButton">
                    <a href="#">
                        <button>View Details</button>
                    </a>
                </div>
            </div>
            <div class="packageCard">
                <div class="packImage">
                    <img src="../asset/images/head.webp" alt="">
                </div>
                <div class="packageName">
                    <h3>Total Hip Replacement (B/L)</h3>
                </div>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <span>4.0</span>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="startHplder">
                    <div class="sp">
                        <p>Package Starting from</p>
                    </div>
                    <div class="priceSpan">
                        <span>$5000</span>
                    </div>
                </div>
                <div class="packButton">
                    <a href="#">
                        <button>View Details</button>
                    </a>
                </div>
            </div>
            <div class="packageCard">
                <div class="packImage">
                    <img src="../asset/images/head.webp" alt="">
                </div>
                <div class="packageName">
                    <h3>Total Hip Replacement (B/L)</h3>
                </div>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <span>4.0</span>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="startHplder">
                    <div class="sp">
                        <p>Package Starting from</p>
                    </div>
                    <div class="priceSpan">
                        <span>$5000</span>
                    </div>
                </div>
                <div class="packButton">
                    <a href="#">
                        <button>View Details</button>
                    </a>
                </div>
            </div>
            <div class="packageCard">
                <div class="packImage">
                    <img src="../asset/images/head.webp" alt="">
                </div>
                <div class="packageName">
                    <h3>Total Hip Replacement (B/L)</h3>
                </div>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <span>4.0</span>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="cads">
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hospital" aria-hidden="true"><path d="M12 7v4"></path><path d="M14 21v-3a2 2 0 0 0-4 0v3"></path><path d="M14 9h-4"></path><path d="M18 11h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"></path><path d="M18 21V5a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="con">
                        <p>Fortis Memorial Research Institute, Gurgaon</p>
                    </div>
                </div>
                <div class="startHplder">
                    <div class="sp">
                        <p>Package Starting from</p>
                    </div>
                    <div class="priceSpan">
                        <span>$5000</span>
                    </div>
                </div>
                <div class="packButton">
                    <a href="#">
                        <button>View Details</button>
                    </a>
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

    <script src="../asset/script.js"></script>
</body>
</html>