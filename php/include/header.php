<?php
include('app/conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/linearicons@1.0.2/dist/web-font/style.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="web-page" style="height: 100%;position: relative;overflow: hidden;">

        <!-- MAIN CONTAINER HERE -->
        <div class="main-container" onclick="closeSideBar()" style="height: 100%;overflow: hidden;">

            <div class="main-outer" style="height: 100%;overflow: auto;">

                <header class="header">

                    <!-- topbar starts here -->
                    <div class="topbar wrapper">

                        <ul class="flex-container nowrap" style="border: 0px; justify-content: space-between;">
                            <li class="image-logo">
                                <a href="index.php">
                                    <img src="./Assets/Logo.png" class="logo-image" alt="logo">
                                </a>
                            </li>
                            <li class="flex-container nowrap" style="border: 0px;padding: 6px;">
                                <span class="text-uppercase topbar-support">
                                    <a href="#">
                                        <span><i class="fas fa-mouse" style="padding-right: 5px;"></i></span>
                                        <span>Support</span>
                                    </a>
                                </span>
                                <span class="text-uppercase d-lg-none">
                                    <a href="#">
                                        <img class="phone-icon" src="./Assets/phone_in_talk_black_48x48.png" alt="Call">
                                    </a>
                                </span>

                                <span class="text-uppercase topbar-contact">
                                    <a href="contact.php">
                                        <span><i class="far fa-paper-plane" style="padding-right: 5px;"></i></span>
                                        <span>Contact</span>
                                    </a>
                                </span>
                                <span id="main-menu" class="text-uppercase topbar-menu">
                                    <span>
                                        <div class="toggle-wrap" style="color: white;">
                                            <span class="toggle-bar"></span>
                                        </div>
                                        <span class="text text-white">MENU</span>

                                    </span>
                                </span>

                            </li>
                        </ul>
                    </div>

                    <!-- navbar starts here -->
                    <div class="navbar">
                        <div class="wrapper">
                            <ul class="flex-container nowrap" style="padding: 0;">
                                <li class="flex-item list-design navbar-items">
                                    <a href="#" class="text-uppercase">
                                        <span class="lnr navbar-icon lnr-code" style="color: #926fb1;"></span>
                                        <span class="first-span"><small>web</small></span>
                                        <span class="second-span">Design</span>
                                    </a>

                                    <!-- On hover div element here -->
                                    <div class="navbar-on-hover bar-design">
                                        <div class="flex-container new-bar-wrapper dropdown-bar">
                                            <div>
                                                <a href="#">Stylish websites</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="">ecommerce stores</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">branding</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">mobile apps</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">web hosting</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">pay monthly websites</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex-item list-support navbar-items">
                                    <a href="#" class="text-uppercase">
                                        <span class="lnr navbar-icon lnr-screen" style="color: #4183d7;"></span>
                                        <span class="first-span"><small>IT</small></span>
                                        <span class="second-span">Support</span>
                                    </a>
                                    <!-- On hover div element here -->

                                    <div class="navbar-on-hover bar-support">
                                        <div class="flex-container new-bar-wrapper dropdown-bar">
                                            <div>
                                                <a href="#">MANAGED IT SUPPORT</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="">BUSINESS IT SUPPORT</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">OFFICE 365</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">CONSULTANCY</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">CLOUD PROVIDER</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">DATA BACKUP</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex-item list-telecoms navbar-items">
                                    <a href="#" class="text-uppercase">
                                        <i class="fas navbar-icon fa-phone-volume" style="color: #d64541;"></i>
                                        <span class="first-span"><small>telecoms</small></span>
                                        <span class="second-span">services</span>
                                    </a>
                                    <!-- On hover div element here -->
                                    <div class="navbar-on-hover bar-services">
                                        <div class="flex-container new-bar-wrapper dropdown-bar">
                                            <div>
                                                <a href="#">GIGABIT VOUCHER</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="">HOSTED VOIP</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">BUSINESS VOIP</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">BUSINESS BROADBAND</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">LEASED LINE</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">3CX SYSTEMS</a>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li class="flex-item list-software navbar-items">
                                    <a href="#" class="text-uppercase">
                                        <img src="./Assets/white.png" class="white" alt="bespoke icon">
                                        <img src="./Assets/light_grey.png" class="grey" alt="bespoke icon">
                                        <span class="first-span"><small>bespoke</small></span>
                                        <span class="second-span">software</span>
                                    </a>
                                    <!-- On hover div element here -->
                                    <div class="navbar-on-hover bar-software">
                                        <div class="flex-container new-bar-wrapper dropdown-bar">
                                            <div>
                                                <a href="#">WORKFLOW SOLUTIONS</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="">AUTOMATION</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">SYSTEM INTEGRATION</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">DATABASE MANAGEMENT</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">SHAREPOINT</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">ERP</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex-item list-marketing navbar-items">
                                    <a href="#" class="text-uppercase">
                                        <i class="fas navbar-icon fa-chart-bar" style="color: #2ecc71;"></i>
                                        <span class="first-span"><small>digital</small></span>
                                        <span class="second-span">marketing</span>
                                    </a>
                                    <!-- On hover div element here -->
                                    <div class="navbar-on-hover bar-marketing">
                                        <div class="flex-container new-bar-wrapper dropdown-bar">
                                            <div>
                                                <a href="#">SEO</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="">PPC</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">CRO</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">EMAIL</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">SOCIAL</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">CONTENT</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex-item list-security navbar-items">
                                    <a href="#" class="text-uppercase">
                                        <i class="fas navbar-icon fa-shield-alt" style="color: #f62459;"></i>
                                        <span class="first-span"><small>cyber</small></span>
                                        <span class="second-span">security</span>
                                    </a>
                                    <!-- On hover div element here -->
                                    <div class="navbar-on-hover bar-security">
                                        <div class="flex-container new-bar-wrapper dropdown-bar">
                                            <div>
                                                <a href="#">ASSESSMENT</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="">MANAGEMENT</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">PENETRATION TESTING</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">CYBER ESSENTIALS</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">PCI/DSS</a>
                                            </div>
                                            <div class="dash-list">-</div>
                                            <div>
                                                <a href="#">HACKER PREVENTION</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>

                    </div>


                </header>