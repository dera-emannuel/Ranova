<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <title>Renova sp dashboard</title>
    <link rel="stylesheet" href="./asset/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <header>
        <nav>
            <div class="logo">
                <div class="menu" id="menu">
                    <i class='bxr  bx-menu-select'></i> 
                </div>
                <a href="../index.php">
                    <img src="../asset/images/hosiptalLogo.png" alt="">
                </a>
                <div class="dah">
                    <h2>Dashboard</h2>
                </div>
            </div>
            <div class="notHolder">
                <div class="notIcon">
                    <i class='bxr  bx-bell-ring'></i> 
                </div>
                <div class="trashIcon">
                    <i class='bxr  bx-trash'></i> 
                </div>
                <div class="spproholder">
                    <div class="spimg">
                        <img src="../asset/images/blog.jpg" alt="">
                    </div>
                    <div class="spname">
                        <p>supper admin</p>
                    </div>
                </div>
            </div>
          

        </nav>
    </header>

    <section class="dashboardWrapper">

        <aside class="sidebar" id="sidebar">
            <a data-page="dashboard" class="sidebarLink active">
                <i class='bx bxs-dashboard'></i>
                <span>Dashboard</span>
            </a>

            <a data-page="hospitals" class="sidebarLink">
                <i class='bx bxs-building'></i>
                <span>Hospitals</span>
            </a>
            
            <a data-page="unApprovedHospital" class="sidebarLink">
                <i class='bxr  bx-alert-octagon'></i> 
                <span>UnApproved Hospital</span>
            </a>

            <!-- <a data-page="payout" class="sidebarLink">
                <i class='bxr  bx-credit-card'></i> 
                <span>Hospital Payouts</span>
            </a> -->

            <!-- <div class="dropdown">
                <a class="sidebarLink dropdown-toggle">
                    <i class='bx bxs-building'></i>
                    <span>Hospitals</span>
                    <i class='bx bx-chevron-down arrow'></i>
                </a>
                <div class="dropdown-menu">
                    <a data-page="hospitals-list" class="sidebarLink sub-link">All Hospitals</a>
                    <a data-page="hospitals-add" class="sidebarLink sub-link">Add Hospital</a>
                </div>
            </div> -->

            </div>

            <a data-page="doctors" class="sidebarLink">
                <i class='bx bxs-user'></i>
                <span>Doctors</span>
            </a>

            <a data-page="undoc" class="sidebarLink">
                <i class='bxr  bx-user-x'></i> 
                <span>Unapproved Doctors</span>
            </a>

            <a data-page="docDetail" class="sidebarLink">
                <i class='bx bxs-user'></i>
                <span>Doctor Details</span>
            </a>
            
            <a data-page="app" class="sidebarLink">
                <i class='bxr  bx-form'></i> 
                <span>Applications</span>
            </a>
            
            <a data-page="point" class="sidebarLink">
                <i class='bx bx-calendar-check'></i>
                <span>Appointments</span>
            </a>

            <a data-page="settings" class="sidebarLink">
                <i class='bx bxs-cog'></i>
                <span>Settings</span>
            </a>

            <a href="../logout.php" class="sidebarLink logout">
                <i class='bx bx-log-out'></i>
                <span>Logout</span>
            </a>
        </aside>

        <main class="contentArea" id="contentArea">
        <div id="preloader">
                <div class="loader">
                    <div class="pulse"></div>
                    <p>Loading...</p>
                </div>
            </div>
        </main>

    </section>

<script src="./asset/script.js"></script>
</body>
</html>
