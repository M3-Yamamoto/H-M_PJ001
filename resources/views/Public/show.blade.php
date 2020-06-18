<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Univerity</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://startbootstrap.github.io/startbootstrap-resume/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-white fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"
                > <img src="{{'/images/'.$university->image}}" width="180" height="100" alt=""></a
            ><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#collaboration">Collaboration</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#major">Major</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid p-0 bg-light">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h3 class="text-info">Univeristy of <span class="text-info">Information Technology</span></h3>
                     <p class="text">{{ $university->about }} Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a><a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Collaboration-->
           <section class="resume-section" id="collaboration">
                <div class="resume-section-content">
                    <h3 class="text-info">Collaboration</h3>
                     <p class="text">{{ $university->collaboration }} Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                     <br>
                    <div class="social-icons">
                        <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a><a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Major-->
            <section class="resume-section" id="major">
                <div class="resume-section-content">
                    <h3 class="text-info">Major</h3>
                     <p class="text">University of Information Technology offers 7 bachelor major! You can choose according to your passion!</p>
                     <br>
                      <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-book text-warning"></i></span>
                            Software Engineering
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-book text-warning"></i></span>Knowledge Engineering
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-book text-warning"></i></span>
                            Business Information System
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-book text-warning"></i></span>
                            High Performance Computing
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-book text-warning"></i></span>Embedded System
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-book text-warning"></i></span>Computer Networking
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-book text-warning"></i></span>Computer System
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!--Contact-->
            <section class="resume-section" id="contact">
                <div class="container-fluid">
                    <ul class="fa-ul">
                        <li>
                            <span class="fa-li"><i class="fas fa-building text-warning"></i></span>
                            No.7,Parami Road,Near Pyay Road, Hlaing Township, Yangon
                        </li>
                        <hr>
                        <li>
                            <span class="fa-li"><i class="fas fa-phone text-warning"></i></span>
                           09990999999999
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
