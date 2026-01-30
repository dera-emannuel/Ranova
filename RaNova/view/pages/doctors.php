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
                    <li><a href="./hospital.php">Hospitals</a></li>
                    <li><a href="./blogs.php">Blogs</a></li>
                    <li><a href="./join.php">Join as partner</a></li>
                </ul>
                <div class="translator">
                    <!-- Translator content here -->
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
                <p>Doctors</p>
            </div>    
        </div>  

        <div class="DocPage">
            <div class="filterSider" id="sider">
                <div class="filterHeader">
                    <h2>Filters</h2>
                    <button class="clearBtn">Clear all</button>
                </div>

                <div class="filterBlock">
                    <div class="filterTitle">
                        <h4>Countries</h4>
                        <i class='bxr bx-chevron-down'></i>
                    </div>

                    <div class="filterBody">
                        <div class="filterSearch">
                            <i class='bxr bx-search'></i>
                            <input type="text" placeholder="Search countries">
                        </div>

                        <div class="checkList">
                            <label><input type="checkbox"> China</label>
                            <label><input type="checkbox"> Egypt</label>
                            <label><input type="checkbox"> Germany</label>
                            <label><input type="checkbox"> India</label>
                            <label><input type="checkbox"> Malaysia</label>
                            <label><input type="checkbox"> Saudi Arabia</label>
                            <label><input type="checkbox"> Singapore</label>
                            <label><input type="checkbox"> Thailand</label>
                            <label><input type="checkbox"> Turkey</label>
                        </div>
                    </div>
                </div>

                <div class="filterBlock">
                    <div class="filterTitle">
                        <h4>Hospitals</h4>
                        <i class='bxr bx-chevron-down'></i>
                    </div>

                    <div class="filterBody">
                        <div class="filterSearch">
                            <i class='bxr bx-search'></i>
                            <input type="text" placeholder="Search Hospitals">
                        </div>
                        <div class="checkList">
                            <label><input type="checkbox"> Apollo</label>
                            <label><input type="checkbox"> Max Healthcare</label>
                            <label><input type="checkbox"> Alan Miller Optometrists Irlam</label>
                            <label><input type="checkbox"> 108 Harley Street</label>
                            <label><input type="checkbox"> 222 Healthcare</label>
                            <label><input type="checkbox"> 8 Devonshire Dental</label>
                            <label><input type="checkbox"> 7 Orange Hospitals</label>
                            <label><input type="checkbox"> 
                            9 Harley Street</label>
                            <label><input type="checkbox"> Aashlok Hospital</label>
                            <label><input type="checkbox"> ACIBADEM Altunizade Hospital</label>
                            <label><input type="checkbox"> Abhayahasta Multispeciality Hospital</label>
                            <label><input type="checkbox"> Al Zahra Hospital, Dubai</label>
                        </div>
                    </div>
                </div>
                <div class="filterBlock">
                    <div class="filterTitle">
                        <h4>Surgeries</h4>
                        <i class='bxr bx-chevron-down'></i>
                    </div>

                    <div class="filterBody">
                        <div class="checkList">
                            <label><input type="checkbox"> 0 to 10000</label>
                            <label><input type="checkbox">10001 to 20000</label>
                            <label><input type="checkbox">10001 to 20000</label>
                            <label><input type="checkbox">30000+</label>
                        </div>
                    </div>
                </div>
                <div class="filterBlock">
                    <div class="filterTitle">
                        <h4>Experience</h4>
                        <i class='bxr bx-chevron-down'></i>
                    </div>

                    <div class="filterBody">
                        <div class="checkList">
                            <label><input type="checkbox"> 0 to 10 Years</label>
                            <label><input type="checkbox">11 to 20 Years</label>
                            <label><input type="checkbox">10001 to 20000</label>
                            <label><input type="checkbox">20+ Years</label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mainHolder">
                <div class="inputHolder">
                    <span class="searchIcon">
                        <i class='bxr bx-search-alt'></i>
                    </span>

                    <input type="text" placeholder="Search for treatments">
                </div>
                <div class="docHoldeer">
                    <div class="docs">
                        <div class="img">
                            <img src="../asset/images/doc.jpg" alt="">
                            <div class="flag">
                                <img src="../asset/images/india.png" alt="">
                            </div>
                        </div>
                        <a href="#">
                            <h2>Dr. Pradeep Chowbey</h2>
                        </a>
                        <p>Chairman - Max Institute of Laparoscopic, Endoscopic, Bariatric Surgery & Allied Surgical Specialities</p>
                        <div class="rate">
                            <div class="stars">
                                <i class='bxr bxs-star'></i> 
                                <i class='bxr bxs-star'></i> 
                                <i class='bxr bxs-star'></i> 
                                <i class='bxr bxs-star'></i> 
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
                                <i class='bxr bx-briefcase-alt'></i> 
                                <p>Experience:</p>
                            </div>
                            <span>30+ Years</span>
                        </div>

                        <div class="expirence">
                            <div class="con">
                                <i class='bxr bx-slice'></i> 
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

                        <a href="./bookDoctor.php">
                            <div class="btn">
                                <button>Request Appointment</button>
                            </div>
                        </a>

                        <div class="lockup">
                            <i class='bxr bx-lock-keyhole'></i> 
                            <p>Your Health data is protected with us</p>
                        </div>
                    </div>
                    <div class="docs">
                        <div class="img">
                            <img src="../asset/images/doc.jpg" alt="">
                            <div class="flag">
                                <img src="../asset/images/india.png" alt="">
                            </div>
                        </div>
                        <a href="#">
                            <h2>Dr. Pradeep Chowbey</h2>
                        </a>
                        <p>Chairman - Max Institute of Laparoscopic, Endoscopic, Bariatric Surgery & Allied Surgical Specialities</p>
                        <div class="rate">
                            <div class="stars">
                                <i class='bxr bxs-star'></i> 
                                <i class='bxr bxs-star'></i> 
                                <i class='bxr bxs-star'></i> 
                                <i class='bxr bxs-star'></i> 
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
                                <i class='bxr bx-briefcase-alt'></i> 
                                <p>Experience:</p>
                            </div>
                            <span>30+ Years</span>
                        </div>

                        <div class="expirence">
                            <div class="con">
                                <i class='bxr bx-slice'></i> 
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
                            <i class='bxr bx-lock-keyhole'></i> 
                            <p>Your Health data is protected with us</p>
                        </div>
                    </div>
                    <div class="docs">
                        <div class="img">
                            <img src="../asset/images/doc.jpg" alt="">
                            <div class="flag">
                                <img src="../asset/images/india.png" alt="">
                            </div>
                        </div>
                        <a href="#">
                            <h2>Dr. Pradeep Chowbey</h2>
                        </a>
                        <p>Chairman - Max Institute of Laparoscopic, Endoscopic, Bariatric Surgery & Allied Surgical Specialities</p>
                        <div class="rate">
                            <div class="stars">
                                <i class='bxr bxs-star'></i> 
                                <i class='bxr bxs-star'></i> 
                                <i class='bxr bxs-star'></i> 
                                <i class='bxr bxs-star'></i> 
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
                                <i class='bxr bx-briefcase-alt'></i> 
                                <p>Experience:</p>
                            </div>
                            <span>30+ Years</span>
                        </div>

                        <div class="expirence">
                            <div class="con">
                                <i class='bxr bx-slice'></i> 
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
                            <i class='bxr bx-lock-keyhole'></i> 
                            <p>Your Health data is protected with us</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="filterMenu">
        <button id="cancel">Cancel</button>
        <button id="filter">Filters</button>
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
                    <img src="../asset/images/uk.png" alt="">
                    <h3>UK</h3>
                    <p>16192 Coastal Highway, Lewes, United States of America.</p>
                </div>
                <div class="offices">
                    <img src="../asset/images/sing.png" alt="">
                    <h3>SG</h3>
                    <p>Vision Exchange, # 13-30, No-02 Venture Drive, Singapore-608526</p>
                </div>
                <div class="offices">
                    <img src="../asset/images/saudi.webp" alt="">
                    <h3>KSA</h3>
                    <p>3738 King Abdullah Branch Rd, 6258 Al Muhammadiyah Dist, 12362, Riyadh, Saudi Arabia</p>
                </div>
                <div class="offices">
                    <img src="../asset/images/uae.png" alt="">
                    <h3>UAE</h3>
                    <p>3401, 34th Floor, Saeed Tower 2, Sheikh Zayed Road, PO Box No. 114429. Dubai, UAE.</p>
                </div>
                <div class="offices">
                    <img src="../asset/images/india.png" alt="">
                    <h3>IN</h3>
                    <p>2nd Floor, Omaxe Square, Jasola, Behind Apollo Hospital, New Delhi, Delhi 110025</p>
                </div>
                <div class="offices">
                    <img src="../asset/images/bd.png" alt="">
                    <h3>BD</h3>
                    <p>Apt-4A, Level-5, House-407, Road-29, DOHS Mohakhali, Dhaka-1206.</p>
                </div>
                <div class="offices">
                    <img src="../asset/images/turkey.avif" alt="">
                    <h3>TD</h3>
                    <p>Regus - Atasehir Palladium Office Barbaros, Palladium Office and Residence Building, Halk Cd. No:8/A Floor 2 & 3, 34746 Ataşehir/İstanbul.</p>
                </div>
                <div class="offices">
                    <img src="../asset/images/uk.png" alt="">
                    <h3>TH</h3>
                    <p>Axcel Health Co. Ltd., UnionSpace Building, 30 Soi Sukhumvit 61, Khlongton-nua, Wattana, Bangkok 10110. Thailand.</p>
                </div>
                <div class="offices">
                    <img src="../asset/images/niger.png" alt="">
                    <h3>NG</h3>
                    <p>Dr Hassan’s Hospital, 5 Katsina Ala street, Maitama- Abuja Nigeria.</p>
                </div>
                <div class="offices">
                    <img src="../asset/images/uk.png" alt="">
                    <h3>ET</h3>
                    <p>Hayahulet Golagol Tower, Office Number 1014, 10th Floor.</p>
                </div>
                <div class="offices">
                    <img src="../asset/images/eg.png" alt="">
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
    <script>
        const filterTitles = document.querySelectorAll(".filterTitle");

        filterTitles.forEach(title => {
            title.addEventListener("click", () => {
                const parent = title.parentElement;

                document.querySelectorAll(".filterBlock").forEach(block => {
                    if (block !== parent) {
                        block.classList.remove("active");
                    }
                });

                parent.classList.toggle("active");
            });
        });

        let filter = document.getElementById("filter");
        let cancel = document.getElementById("cancel");
        let sider = document.getElementById("sider");
        

        filter.addEventListener("click", function(){
            sider.classList.add("show");
            cancel.style.display = "block";
        });

        cancel.addEventListener("click", function(){
            sider.classList.remove("show");
            cancel.style.display = "none";
        })
    </script>
</body>
</html>
