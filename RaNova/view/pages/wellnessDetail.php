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
                        <li><a href="./blogs.php">Blogs</a></li>
                        <li><a href="./join.php">Join as partner</a></li>
                    </ul>
                    <div class="translator">
                            
                    </div>
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
                    <a href="./wellness.php">Wellness</a>
                </div>
                <div class="ar">
                    <i class='bxr  bx-chevron-right'></i> 
                </div>
                <div class="text">
                    <p>Yoga Wellness Program</p>
                </div>
            </div>
    </div>

    <div class="overlays">
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
        <div class="wellH">
            <h2>Yoga Retreats</h2>
        </div>
        <div class="welllnessheader">
           <div class="mainImage">
                <img class="lightbox-img" src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fd3fzwscyjtgllx.cloudfront.net%2Fpackages%2Fimages%2Ffeatured-image-17307030702891536385.jpg&w=1200&q=75" alt="">
           </div> 
           <div class="subimages">
                <img class="lightbox-img" src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fd3fzwscyjtgllx.cloudfront.net%2Fpackages%2Fimages%2Fimage-array-17307044194636158977.jpg&w=640&q=75" alt="">
                <img class="lightbox-img" src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fd3fzwscyjtgllx.cloudfront.net%2Fpackages%2Fimages%2Fimage-array-17307053090779144193.jpg&w=640&q=75" alt="">
                <img class="lightbox-img" src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fd3fzwscyjtgllx.cloudfront.net%2Fpackages%2Fimages%2Fimage-array-17307050007710494721.jpg&w=640&q=75" alt="">
                <img class="lightbox-img" src="https://www.healthtrip.com/_next/image?url=https%3A%2F%2Fd3fzwscyjtgllx.cloudfront.net%2Fpackages%2Fimages%2Fimage-array-17307056641049749505.jpg&w=640&q=75" alt="">
           </div>
        </div>

        <div id="lightboxOverlay">
            <span class="close">&times;</span>
            <img id="lightboxImage" src="" alt="">
            <span class="prev">&#10094;</span>
            <span class="next">&#10095;</span>
        </div>

        <div class="wellDetailHolder">
            <div class="wellDetails">
                <div class="overview">
                    <h2>About the Package</h2>
                    <p>Post Cardiac Care Package is designed to support individuals recovering from cardiac events such as heart attacks, surgeries (bypass or stents), or other interventions for heart disease. This phase of care is critical for ensuring long-term recovery, preventing recurrence, and empowering patients with knowledge and tools to manage their heart health. This program focuses on physical rehabilitation, lifestyle changes, stress management, and continuous monitoring to build a strong foundation for a heart-healthy future.

                    After a cardiac event, the heart and body need time to heal. During this period, the body is more vulnerable to additional stress, inflammation, and potentially harmful lifestyle habits that could lead to complications or recurring events. Post cardiac c are helps patients gradually rebuild strength, adjust to necessary lifestyle changes, and establish routines that support heart health. This package encourages a holistic recovery, ensuring that patients not only recover but also prevent future cardiac issues.</p>
                </div>
                <div class="program-schedule">
                    <h2>7-Day Program</h2>
                    <div class="day" id="day1">
                        <h3>Day 1: Arrival and Assessment</h3>
                        <p>Arrival, initial check-ins, and assessment of individual needs.</p>
                    </div>
                    <div class="day" id="day2">
                        <h3>Day 2: Restorative Practices and Gentle Movement</h3>
                        <p>Focus on gentle exercises and restorative practices for recovery.</p>
                    </div>
                    <div class="day" id="day3">
                        <h3>Day 3: Mindfulness and Emotional Healing</h3>
                        <p>Guided mindfulness sessions and emotional well-being exercises.</p>
                    </div>
                    <div class="day" id="day4">
                        <h3>Day 4: Cardiac-Specific Exercise and Education</h3>
                        <p>Exercises and educational sessions tailored for cardiac health.</p>
                    </div>
                    <div class="day" id="day5">
                        <h3>Day 5: Integrative Therapies</h3>
                        <p>Combination of therapies like yoga, massage, and relaxation techniques.</p>
                    </div>
                    <div class="day" id="day6">
                        <h3>Day 6: Developing Long-Term Healthy Routines</h3>
                        <p>Strategies to maintain health and wellness beyond the program.</p>
                    </div>
                    <div class="day" id="day7">
                        <h3>Day 7: Wrap-Up and Departure</h3>
                        <p>Final check-out, reflections, and departure.</p>
                    </div>
                </div>
                <div class="benefit">
                    <h2>Benefits of the Program</h2>
                    <ol>
                        <li>Improved cardiovascular health and endurance.</li>
                        <li>Enhanced emotional well-being and stress management.</li>
                        <li>Better understanding of heart-healthy lifestyle choices.</li>
                        <li>Development of sustainable exercise and wellness routines.</li>
                        <li>Supportive community and professional guidance.</li>
                    </ol>
                </div>

            </div>
            <div class="paymentSider">
                    <div class="price-box">
                        <h2>Program Cost</h2>
                        <h3>₦250,000</h3>
                        <p>This fee covers consultation and guided sessions.</p>
                        <button class="btn-primary" id="bookWellness">Book Wellness Program</button>
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