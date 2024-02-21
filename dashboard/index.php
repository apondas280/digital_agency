<?php 
session_start();
if(!$_SESSION['user_login']){
  $_SESSION['err'] = 'Unauthenticated user. PLease try login';
  header('location: ../login.php');
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Class Routines | Ekator 8</title>
        <!-- all the meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- all the css files -->
        <link rel="shortcut icon" href="assets/images/logo.png" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap-5.1.3/css/bootstrap.min.css" />

        <!--Custom css-->
        <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <!-- Datepicker css -->
        <link rel="stylesheet" href="assets/css/daterangepicker.css" />
        <!-- Select2 css -->
        <link rel="stylesheet" href="assets/css/select2.min.css" />

        <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap-icons-1.8.1/bootstrap-icons.css" />
    </head>

    <body>
        <div class="sidebar">
            <div class="logo-details">
                <div class="img_wrapper">
                    <img src="assets/images/Sidebar_Logo.png" alt="" />
                </div>
                <span class="logo_name">ekattor</span>
            </div>
            <div class="closeIcon">
                <span>close</span>
            </div>
            <ul class="nav-links">
                <!-- sidebar title -->
                <li>
                    <a href="#" class="sMenu-title">
                        <div class="sidebar_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.5 16.5">
                                <path id="Menu_icon" data-name="Menu icon"
                                    d="M11,15a2,2,0,0,1-2-2V11a2,2,0,0,1,2-2h2a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2ZM2,15a2,2,0,0,1-2-2V11A2,2,0,0,1,2,9H4a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2Zm9-9A2,2,0,0,1,9,4V2a2,2,0,0,1,2-2h2a2,2,0,0,1,2,2V4a2,2,0,0,1-2,2ZM2,6A2,2,0,0,1,0,4V2A2,2,0,0,1,2,0H4A2,2,0,0,1,6,2V4A2,2,0,0,1,4,6Z"
                                    transform="translate(0.75 0.75)" stroke-width="1.5" />
                            </svg>
                        </div>
                        <span class="link_name">UI Elements</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">UI Elements</a></li>
                    </ul>
                </li>
                <!-- Sidebar menu -->
                <li class="nav-links-li">
                    <div class="iocn-link">
                        <a href="#">
                            <div class="sidebar_icon">
                                <?xml version="1.0"?><svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48px" height="48px">
                                    <path
                                        d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z" />
                                </svg>
                            </div>
                            <span class="link_name">Components</span>
                        </a>
                        <span class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="4.743" height="7.773" viewBox="0 0 4.743 7.773">
                                <path id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                                    d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                                    fill="#fff" opacity="1" />
                            </svg>
                        </span>
                    </div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="#">Components</a></li>
                        <li><a href="#">Alerts</a></li>
                        <li><a href="#">Student</a></li>
                        <li><a href="#">Admission</a></li>
                        <li><a href="#">Teacher</a></li>
                        <li><a href="#">Teacher Permission</a></li>
                        <li><a href="#">Parent</a></li>
                        <li><a href="#">Accountant</a></li>
                        <li><a href="#">Librarian</a></li>
                    </ul>
                </li>
                <li class="nav-links-li">
                    <div class="iocn-link">
                        <a href="#">
                            <div class="sidebar_icon">
                                <?xml version="1.0"?><svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48px" height="48px">
                                    <path
                                        d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z" />
                                </svg>
                            </div>
                            <span class="link_name">Tables</span>
                        </a>
                        <span class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="4.743" height="7.773" viewBox="0 0 4.743 7.773">
                                <path id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                                    d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                                    fill="#fff" opacity="1" />
                            </svg>
                        </span>
                    </div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="#">Tables</a></li>
                        <li><a href="#">Alerts</a></li>
                        <li><a href="#">Student</a></li>
                        <li><a href="#">Admission</a></li>
                        <li><a href="#">Teacher</a></li>
                        <li><a href="#">Teacher Permission</a></li>
                        <li><a href="#">Parent</a></li>
                        <li><a href="#">Accountant</a></li>
                        <li><a href="#">Librarian</a></li>
                    </ul>
                </li>
                <li class="nav-links-li">
                    <div class="iocn-link">
                        <a href="#">
                            <div class="sidebar_icon">
                                <?xml version="1.0"?><svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48px" height="48px">
                                    <path
                                        d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z" />
                                </svg>
                            </div>
                            <span class="link_name">Forms</span>
                        </a>
                        <span class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="4.743" height="7.773" viewBox="0 0 4.743 7.773">
                                <path id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                                    d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                                    fill="#fff" opacity="1" />
                            </svg>
                        </span>
                    </div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="#">Forms</a></li>
                        <li><a href="#">Alerts</a></li>
                        <li><a href="#">Student</a></li>
                        <li><a href="#">Admission</a></li>
                        <li><a href="#">Teacher</a></li>
                        <li><a href="#">Teacher Permission</a></li>
                        <li><a href="#">Parent</a></li>
                        <li><a href="#">Accountant</a></li>
                        <li><a href="#">Librarian</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <section class="home-section">
            <div class="home-content">
                <div class="home-header">
                    <div class="row w-100 justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="sidebar_menu_icon">
                                <div class="menuList">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12">
                                        <path id="Union_5" data-name="Union 5" d="M-2188.5,52.5v-2h15v2Zm0-5v-2h15v2Zm0-5v-2h15v2Z" transform="translate(2188.5 -40.5)" fill="#6e6f78" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-xl-block d-none">
                            <div class="header_notification d-flex align-items-center">
                                <div class="notification_icon">
                                    <i class="bi bi-bell"></i>
                                </div>
                                <p>
                                    will Come to School Wearing a Mask
                                    <span>Covid-19. Stay safe!</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-menu">
                                <ul>
                                    <li>
                                        <a href="" class="list">
                                            <span class="success-counter">20</span>
                                            <i class="bi bi-bell"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="list">
                                            <span class="danger-counter">20</span>
                                            <i class="bi bi-chat-dots"></i>
                                        </a>
                                    </li>
                                    <li class="user-profile">
                                        <div class="btn-group">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true"
                                                aria-expanded="false">
                                                <div class="">
                                                    <img src="assets/images/user.jpeg" height="42px" />
                                                </div>
                                                <div class="px-2 text-start">
                                                    <span class="user-name">David Warner</span>
                                                    <span class="user-title">Superadmin</span>
                                                </div>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end eDropdown-menu" aria-labelledby="defaultDropdown">
                                                <li class="user-profile user-profile-inner">
                                                    <button class="btn w-100 d-flex align-items-center" type="button">
                                                        <div class="">
                                                            <img class="radious-5px" src="assets/images/user.jpeg" height="42px" />
                                                        </div>
                                                        <div class="px-2 text-start">
                                                            <span class="user-name">David Warner</span>
                                                            <span class="user-title">Superadmin</span>
                                                        </div>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="13.275" height="14.944" viewBox="0 0 13.275 14.944">
                                                                <g id="user_icon" data-name="user icon" transform="translate(-1368.531 -147.15)">
                                                                    <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(1370.609 147.15)" fill="none" stroke="#181c32" stroke-width="2">
                                                                        <ellipse cx="4.576" cy="4.435" rx="4.576" ry="4.435" stroke="none" />
                                                                        <ellipse cx="4.576" cy="4.435" rx="3.576" ry="3.435" fill="none" />
                                                                    </g>
                                                                    <path id="Path_41" data-name="Path 41" d="M1485.186,311.087a5.818,5.818,0,0,1,5.856-4.283,5.534,5.534,0,0,1,5.466,4.283"
                                                                        transform="translate(-115.686 -149.241)" fill="none" stroke="#181c32" stroke-width="2" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        My Account
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.774" height="12.619" viewBox="0 0 15.774 12.619">
                                                                <path id="Path_1203" data-name="Path 1203"
                                                                    d="M17.774,5.577A1.582,1.582,0,0,0,16.2,4H3.577A1.582,1.582,0,0,0,2,5.577v9.465a1.582,1.582,0,0,0,1.577,1.577H16.2a1.582,1.582,0,0,0,1.577-1.577Zm-1.577,0L9.887,9.521,3.577,5.577Zm0,9.465H3.577V7.155L9.887,11.1,16.2,7.155Z"
                                                                    transform="translate(-2 -4)" fill="#181c32" />
                                                            </svg>
                                                        </span>
                                                        Inbox
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.602" height="14.636" viewBox="0 0 14.602 14.636">
                                                                <g id="Setting_icon" data-name="Setting icon" transform="translate(-215.957 -39.599)">
                                                                    <path id="Path_387" data-name="Path 387"
                                                                        d="M8.332,3.961a1.254,1.254,0,0,1,2.439,0,1.254,1.254,0,0,0,1.873.778,1.257,1.257,0,0,1,1.725,1.73,1.259,1.259,0,0,0,.775,1.877,1.259,1.259,0,0,1,0,2.445,1.259,1.259,0,0,0-.776,1.878,1.257,1.257,0,0,1-1.725,1.73,1.254,1.254,0,0,0-1.872.777,1.254,1.254,0,0,1-2.439,0A1.254,1.254,0,0,0,6.459,14.4a1.257,1.257,0,0,1-1.725-1.73,1.259,1.259,0,0,0-.775-1.877,1.259,1.259,0,0,1,0-2.445,1.259,1.259,0,0,0,.776-1.878A1.257,1.257,0,0,1,6.46,4.738a1.254,1.254,0,0,0,1.872-.777Z"
                                                                        transform="translate(213.707 37.349)" fill="none" stroke="#181c32" stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="1.5" />
                                                                    <circle id="Ellipse_2" data-name="Ellipse 2" cx="1.689" cy="1.689" r="1.689" transform="translate(221.57 45.415)" fill="none"
                                                                        stroke="#181c32" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        Settings
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15.062" height="15.062" viewBox="0 0 15.062 15.062">
                                                                <path id="Support_icon" data-name="Support icon"
                                                                    d="M8.778,5.765h1.506V7.272H8.778Zm0,3.012h1.506V13.3H8.778ZM9.531,2a7.531,7.531,0,1,0,7.531,7.531A7.534,7.534,0,0,0,9.531,2Zm0,13.555a6.025,6.025,0,1,1,6.025-6.025A6.033,6.033,0,0,1,9.531,15.555Z"
                                                                    transform="translate(-2 -2)" fill="#181c32" />
                                                            </svg>
                                                        </span>
                                                        Support
                                                    </a>
                                                </li>
                                                <!-- Logout Button -->
                                                <li>
                                                    <a class="btn eLogut_btn" href="../logout.php">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.046" height="12.29" viewBox="0 0 14.046 12.29">
                                                                <path id="Logout"
                                                                    d="M4.389,42.535H2.634a.878.878,0,0,1-.878-.878V34.634a.878.878,0,0,1,.878-.878H4.389a.878.878,0,0,0,0-1.756H2.634A2.634,2.634,0,0,0,0,34.634v7.023A2.634,2.634,0,0,0,2.634,44.29H4.389a.878.878,0,1,0,0-1.756Zm9.4-5.009-3.512-3.512a.878.878,0,0,0-1.241,1.241l2.015,2.012H5.267a.878.878,0,0,0,0,1.756H11.05L9.037,41.036a.878.878,0,1,0,1.241,1.241l3.512-3.512A.879.879,0,0,0,13.788,37.525Z"
                                                                    transform="translate(0 -32)" fill="#fff" />
                                                            </svg>
                                                        </span>
                                                        Log out
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_content">
                    <!-- Mani section header and breadcrumb -->
                    <div class="mainSection-title">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-center flex-wrap gr-15">
                                    <div class="d-flex flex-column">
                                        <h4>Admins</h4>
                                        <ul class="d-flex align-items-center eBreadcrumb-2">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Users</a></li>
                                            <li><a href="#">Admin</a></li>
                                        </ul>
                                    </div>
                                    <div class="export-btn-area">
                                        <a href="#" class="export_btn">Create Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start Admin area -->
                    <div class="row">
                        <div class="col-12">
                            <div class="eSection-wrap-2">
                                <!-- Search and filter -->
                                <div class="search-filter-area d-flex justify-content-md-between justify-content-center align-items-center flex-wrap gr-15">
                                    <div class="search-input d-flex justify-content-start align-items-center">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <path id="Search_icon" data-name="Search icon"
                                                    d="M2,7A4.951,4.951,0,0,1,7,2a4.951,4.951,0,0,1,5,5,4.951,4.951,0,0,1-5,5A4.951,4.951,0,0,1,2,7Zm12.3,8.7a.99.99,0,0,0,1.4-1.4l-3.1-3.1A6.847,6.847,0,0,0,14,7,6.957,6.957,0,0,0,7,0,6.957,6.957,0,0,0,0,7a6.957,6.957,0,0,0,7,7,6.847,6.847,0,0,0,4.2-1.4Z"
                                                    fill="#797c8b" />
                                            </svg>
                                        </span>
                                        <input type="text" placeholder="Search user" class="form-control" />
                                    </div>
                                    <div class="filter-export-area d-flex align-items-center">
                                        <div class="position-relative">
                                            <button class="eBtn-3 dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <span class="pr-10">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.028" height="12.276" viewBox="0 0 14.028 12.276">
                                                        <path id="filter-solid"
                                                            d="M.106,32.627A1.1,1.1,0,0,1,1.1,32H12.934a1.092,1.092,0,0,1,.989.627,1.054,1.054,0,0,1-.164,1.164l-4.99,6.126V43.4a.877.877,0,0,1-1.4.7L5.612,42.786a.871.871,0,0,1-.351-.7V39.917L.248,33.79a1.1,1.1,0,0,1-.142-1.164Z"
                                                            transform="translate(0 -32)" fill="#00a3ff" />
                                                    </svg>
                                                </span>
                                                Filter
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end filter-options" aria-labelledby="defaultDropdown">
                                                <h4 class="title">Filter Options</h4>
                                                <div class="filter-option d-flex flex-column">
                                                    <div>
                                                        <label for="eDataList" class="eForm-label">Class</label>
                                                        <select class="form-select" data-placeholder="Type to search...">
                                                            <option value="Choice 01">Choice 01</option>
                                                            <option value="Choice 02">Choice 02</option>
                                                            <option value="Choice 03">Choice 03</option>
                                                            <option value="Choice 04">Choice 04</option>
                                                            <option value="Choice 05">Choice 05</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label for="eDataList" class="eForm-label">Section</label>
                                                        <select class="form-select" data-placeholder="Type to search...">
                                                            <option value="Choice 01">Choice 01</option>
                                                            <option value="Choice 02">Choice 02</option>
                                                            <option value="Choice 03">Choice 03</option>
                                                            <option value="Choice 04">Choice 04</option>
                                                            <option value="Choice 05">Choice 05</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label for="eFilterRoll" class="eForm-label">Roll</label>
                                                        <input type="number" class="form-control eForm-control" id="eFilterRoll" placeholder="Your roll" aria-label="Your roll" />
                                                    </div>
                                                    <div>
                                                        <label for="eDataList" class="eForm-label">Month</label>
                                                        <select class="form-select" data-placeholder="Type to search...">
                                                            <option value="Choice 01">Choice 01</option>
                                                            <option value="Choice 02">Choice 02</option>
                                                            <option value="Choice 03">Choice 03</option>
                                                            <option value="Choice 04">Choice 04</option>
                                                            <option value="Choice 05">Choice 05</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label for="eDataList" class="eForm-label">Date</label>
                                                        <select class="form-select" data-placeholder="Type to search...">
                                                            <option value="Choice 01">Choice 01</option>
                                                            <option value="Choice 02">Choice 02</option>
                                                            <option value="Choice 03">Choice 03</option>
                                                            <option value="Choice 04">Choice 04</option>
                                                            <option value="Choice 05">Choice 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="filter-button d-flex justify-content-end align-items-center">
                                                    <a href="#" class="eFilter-reset">Reset</a>
                                                    <a href="#" class="eFilter-apply">Apply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Export Button -->
                                        <div class="position-relative">
                                            <button class="eBtn-3 dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <span class="pr-10">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.31" height="10.77" viewBox="0 0 10.771 12.31">
                                                        <path id="arrow-right-from-bracket-solid"
                                                            d="M3.847,1.539H2.308a.769.769,0,0,0-.769.769V8.463a.769.769,0,0,0,.769.769H3.847a.769.769,0,0,1,0,1.539H2.308A2.308,2.308,0,0,1,0,8.463V2.308A2.308,2.308,0,0,1,2.308,0H3.847a.769.769,0,1,1,0,1.539Zm8.237,4.39L9.007,9.007A.769.769,0,0,1,7.919,7.919L9.685,6.155H4.616a.769.769,0,0,1,0-1.539H9.685L7.92,2.852A.769.769,0,0,1,9.008,1.764l3.078,3.078A.77.77,0,0,1,12.084,5.929Z"
                                                            transform="translate(0 12.31) rotate(-90)" fill="#00a3ff" />
                                                    </svg>
                                                </span>
                                                Export
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end eDropdown-menu-2">
                                                <li>
                                                    <a class="dropdown-item" href="#">PDF</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">ZIP</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">CSV</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table -->
                                <div class="table-responsive">
                                    <table class="table eTable eTable-2">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">NAME</th>
                                                <th scope="col">EMAIL</th>
                                                <th scope="col">USR INFO</th>
                                                <th scope="col">OPTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <p class="row-number">01</p>
                                                </th>
                                                <td>
                                                    <div class="dAdmin_profile d-flex align-items-center min-w-200px">
                                                        <div class="dAdmin_profile_img">
                                                            <img class="img-fluid" width="50" height="50" src="assets/images/user.png" />
                                                        </div>
                                                        <div class="dAdmin_profile_name">
                                                            <h4>Jony Bristow</h4>
                                                            <p>University of Michigan</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px">
                                                        <p>admin@domain.com</p>
                                                        <p>jonybristow@domain.com</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px">
                                                        <p><span>Phone:</span> + (00) 1234-5678</p>
                                                        <p>
                                                            <span>Address:</span> Melbourne, S/A 120,
                                                            Australia
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="adminTable-action">
                                                        <button type="button" class="eBtn eBtn-black dropdown-toggle table-action-btn-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end eDropdown-menu-2 eDropdown-table-action">
                                                            <li>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="row-number">02</p>
                                                </th>
                                                <td>
                                                    <div class="dAdmin_profile d-flex align-items-center min-w-250px">
                                                        <div class="dAdmin_profile_img">
                                                            <img class="img-fluid" width="50" height="50" src="assets/images/user.png" />
                                                        </div>
                                                        <div class="dAdmin_profile_name">
                                                            <h4>Jony Bristow</h4>
                                                            <p>University of Michigan</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px min-w-200px">
                                                        <p>admin@domain.com</p>
                                                        <p>jonybristow@domain.com</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px min-w-250px">
                                                        <p><span>Phone:</span> + (00) 1234-5678</p>
                                                        <p>
                                                            <span>Address:</span> Melbourne, S/A 120,
                                                            Australia
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="adminTable-action">
                                                        <button type="button" class="eBtn eBtn-black dropdown-toggle table-action-btn-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end eDropdown-menu-2 eDropdown-table-action">
                                                            <li>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="row-number">03</p>
                                                </th>
                                                <td>
                                                    <div class="dAdmin_profile d-flex align-items-center min-w-200px">
                                                        <div class="dAdmin_profile_img">
                                                            <img class="img-fluid" width="50" height="50" src="assets/images/user.png" />
                                                        </div>
                                                        <div class="dAdmin_profile_name">
                                                            <h4>Jony Bristow</h4>
                                                            <p>University of Michigan</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px">
                                                        <p>admin@domain.com</p>
                                                        <p>jonybristow@domain.com</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px">
                                                        <p><span>Phone:</span> + (00) 1234-5678</p>
                                                        <p>
                                                            <span>Address:</span> Melbourne, S/A 120,
                                                            Australia
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="adminTable-action">
                                                        <button type="button" class="eBtn eBtn-black dropdown-toggle table-action-btn-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end eDropdown-menu-2 eDropdown-table-action">
                                                            <li>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="row-number">04</p>
                                                </th>
                                                <td>
                                                    <div class="dAdmin_profile d-flex align-items-center min-w-200px">
                                                        <div class="dAdmin_profile_img">
                                                            <img class="img-fluid" width="50" height="50" src="assets/images/user.png" />
                                                        </div>
                                                        <div class="dAdmin_profile_name">
                                                            <h4>Jony Bristow</h4>
                                                            <p>University of Michigan</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px min-w-200px">
                                                        <p>admin@domain.com</p>
                                                        <p>jonybristow@domain.com</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px min-w-200px">
                                                        <p><span>Phone:</span> + (00) 1234-5678</p>
                                                        <p>
                                                            <span>Address:</span> Melbourne, S/A 120,
                                                            Australia
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="adminTable-action">
                                                        <button type="button" class="eBtn eBtn-black dropdown-toggle table-action-btn-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end eDropdown-menu-2 eDropdown-table-action">
                                                            <li>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="row-number">05</p>
                                                </th>
                                                <td>
                                                    <div class="dAdmin_profile d-flex align-items-center min-w-200px">
                                                        <div class="dAdmin_profile_img">
                                                            <img class="img-fluid" width="50" height="50" src="assets/images/user.png" />
                                                        </div>
                                                        <div class="dAdmin_profile_name">
                                                            <h4>Jony Bristow</h4>
                                                            <p>University of Michigan</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px">
                                                        <p>admin@domain.com</p>
                                                        <p>jonybristow@domain.com</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px">
                                                        <p><span>Phone:</span> + (00) 1234-5678</p>
                                                        <p>
                                                            <span>Address:</span> Melbourne, S/A 120,
                                                            Australia
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="adminTable-action">
                                                        <button type="button" class="eBtn eBtn-black dropdown-toggle table-action-btn-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end eDropdown-menu-2 eDropdown-table-action">
                                                            <li>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="row-number">06</p>
                                                </th>
                                                <td>
                                                    <div class="dAdmin_profile d-flex align-items-center min-w-200px">
                                                        <div class="dAdmin_profile_img">
                                                            <img class="img-fluid" width="50" height="50" src="assets/images/user.png" />
                                                        </div>
                                                        <div class="dAdmin_profile_name">
                                                            <h4>Jony Bristow</h4>
                                                            <p>University of Michigan</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px min-w-200px">
                                                        <p>admin@domain.com</p>
                                                        <p>jonybristow@domain.com</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px min-w-200px">
                                                        <p><span>Phone:</span> + (00) 1234-5678</p>
                                                        <p>
                                                            <span>Address:</span> Melbourne, S/A 120,
                                                            Australia
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="adminTable-action">
                                                        <button type="button" class="eBtn eBtn-black dropdown-toggle table-action-btn-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end eDropdown-menu-2 eDropdown-table-action">
                                                            <li>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <p class="row-number">07</p>
                                                </th>
                                                <td>
                                                    <div class="dAdmin_profile d-flex align-items-center min-w-200px">
                                                        <div class="dAdmin_profile_img">
                                                            <img class="img-fluid" width="50" height="50" src="assets/images/user.png" />
                                                        </div>
                                                        <div class="dAdmin_profile_name">
                                                            <h4>Jony Bristow</h4>
                                                            <p>University of Michigan</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px min-w-200px">
                                                        <p>admin@domain.com</p>
                                                        <p>jonybristow@domain.com</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dAdmin_info_name min-w-250px min-w-200px">
                                                        <p><span>Phone:</span> + (00) 1234-5678</p>
                                                        <p>
                                                            <span>Address:</span> Melbourne, S/A 120,
                                                            Australia
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="adminTable-action">
                                                        <button type="button" class="eBtn eBtn-black dropdown-toggle table-action-btn-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end eDropdown-menu-2 eDropdown-table-action">
                                                            <li>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Data info and Pagination -->
                                <div class="admin-tInfo-pagi d-flex justify-content-md-between justify-content-center align-items-center flex-wrap gr-15">
                                    <p class="admin-tInfo">Showing 1 - 6 from 30 data</p>
                                    <div class="admin-pagi">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination epagination-2">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 8.414 14.828">
                                                            <path id="Path_460" data-name="Path 460" d="M15,6,9,12l6,6" transform="translate(-8 -4.586)" fill="none" stroke="#797c8b"
                                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link active" href="#">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">...</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">29</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">30</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 8.414 14.828">
                                                            <path id="Path_462" data-name="Path 462" d="M9,6l6,6L9,18" transform="translate(-7.586 -4.586)" fill="none" stroke="#797c8b"
                                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Admin area -->

                    <!-- Start Footer -->
                    <div class="copyright-text">
                        <p>2022 &copy; <span>By Creativeitem</span></p>
                    </div>
                    <!-- End Footer -->
                </div>
            </div>
        </section>

        <!--Main Jquery-->
        <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
        <!--Bootstrap bundle with popper-->
        <script src="assets/vendors/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <!-- Datepicker js -->
        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/daterangepicker.min.js"></script>
        <!-- Select2 js -->
        <script src="assets/js/select2.min.js"></script>

        <!--Custom Script-->
        <script src="assets/js/script.js"></script>
    </body>

</html>
