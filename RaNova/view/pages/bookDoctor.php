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
                <a href="./doctors.php">Doctors</a>
            </div>
            <div class="ar">
                <i class='bxr  bx-chevron-right'></i> 
            </div>
            <div class="text">
                <p>Doctor Details</p>
            </div>    
        </div> 
    </div>
    <div class="containers">
        <div class="bookDocHolder">
            <div class="doctorDetais">
                <div class="bookDoctorCard">

                    <div class="doctorImg">
                        <img src="../asset/images/doc.jpg" alt="Dr. Aswini Dutt">
                    </div>

                    <div class="doctorInfo">

                        <h2>Dr. Aswini Dutt</h2>
                        <span class="specialty">General Physician</span>

                        <div class="metaRow">
                            <div class="meta">
                                <i class='bxr bxs-star'></i>
                                <span>5.0 Rating</span>
                            </div>

                            <div class="meta">
                                <i class='bxr bx-briefcase-alt'></i>
                                <span>30+ Years Experience</span>
                            </div>
                        </div>

                        <div class="feeBox">
                            <p>Consultation Fee</p>
                            <h3>₦45,000</h3>
                        </div>

                        <div class="doctorBio">
                            <h4>About Doctor</h4>
                            <p>
                                Dr. Aswini Dutt is a highly experienced General Physician with over
                                30 years of medical practice. He specializes in diagnosing and
                                managing chronic and acute medical conditions with a
                                patient-centered approach.
                            </p>
                        </div>

                        <div class="securityNote">
                            <i class='bxr bx-lock-keyhole'></i>
                            <span>Your health data is securely protected</span>
                        </div>

                    </div>

                </div>
            </div>
            <div class="bookAppointment">
                <h2>Book Appointment</h2>
                <form action="process-booking.php" method="POST">
                    <input type="hidden" name="doctor_id" value="<!-- doctor id here -->">

                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>

                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>

                    <label for="phone">Phone Number (WhatsApp preferred) *</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

                    <label for="gender">Gender *</label>
                    <select id="gender" name="gender" required>
                        <option value="">Select gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>

                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" placeholder="Enter your age">

                    <label for="country">Country of Residence *</label>
                    <input type="text" id="country" name="country" placeholder="Enter your country" required>

                    <label for="appointment_type">Appointment Type *</label>
                    <select id="appointment_type" name="appointment_type" required>
                        <option value="">Select appointment type</option>
                        <option value="hospital">Hospital Visit</option>
                        <option value="video">Video Consultation</option>
                        <option value="phone">Phone Consultation</option>
                    </select>

                    <label for="date">Preferred Appointment Date *</label>
                    <input type="date" id="date" name="date" required>

                    <label for="time">Preferred Time *</label>
                    <input type="time" id="time" name="time" required>

                    <label for="message">Brief Medical Concern (Optional)</label>
                    <textarea id="message" name="message" rows="4"
                        placeholder="Briefly describe your condition or symptoms"></textarea>

                    <label class="checkbox">
                        <input type="checkbox" required>
                        I agree that my medical information will be shared securely with the doctor.
                    </label>

                    <button type="submit">Proceed to Payment</button>

                </form>

        </div>
    </div>

<script src="../asset/script.js"></script>
</body>
</html>
