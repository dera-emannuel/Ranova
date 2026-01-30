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
                            <li><a haref="./doctors.php">Doctors</a></li>
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

    <div class="hospitalFormContainer">

        <div class="progressBar">
            <span class="active" onclick="history.back()"></span>
            <span class="active"></span>
            <span></span>
        </div>

        <form action="./doc3.php">
            <div class="formCard">
                <h2>Hospital & Consultation Fee</h2>

                <div class="formGroup one">
                    <label>Select Hospital</label>
                    <select required>
                        <option>Select Hospital</option>
                        <option>Max Healthcare</option>
                        <option>Renova Medical Center</option>
                    </select>
                </div>
                <div class="formGrid">


                <div class="formGroup">
                     <label>Your Consultation Fee (₦)</label>
                    <input type="number" placeholder="e.g. 40000" required>
                </div>

                <div class="formGroup">
                   <label>Patient Pays (₦)</label>
                    <input type="number" disabled placeholder="Auto calculated">
                </div>
                </div>

                <div class="formGroup">
                   <p> A 5% platform fee will be added automatically.</p>
                </div>

                <div class="formNav">
                    <button type="button" class="btn-outline" onclick="window.location.href='./doc1.php'">Back</button>
                    <button class="nextBtn">Next</button>
                </div>
            </div>
        </form>

    </div>

    <script src="../asset/script.js"></script>    
</body>
</html>