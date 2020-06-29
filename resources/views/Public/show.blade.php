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
        <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">

    </head>
            <div class="container">
             <nav class="nav  justify-content-end">
                <a class="p-2 text-muted" href="#">Home</a>
                <a class="p-2 text-muted" href="#">Forum</a>
                <a class="p-2 text-muted" href="#">Blog</a>
                <a class="p-2 text-muted" href="#">AboutUs</a>
                <div class="nav-scroller py-1 mb-1">
                <div class="col-12 d-flex justify-content-end">
                  <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                </div>
              </div>
              </nav>
            </div>

          <body id="page-top">
              <nav class="navbar navbar-expand-lg bg-white fixed-top" id="sideNav">
                  <a class="navbar-brand js-scroll-trigger" href="#page-top">
                  <img src="{{'/logo/'.$university->logo}}" width="90" height="90" alt=""></a
                  ><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav">
                          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">History and Founding</a></li>
                          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#collaboration">Major</a></li>
                          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#major">Address</a></li>
                      </ul>
                  </div>
              </nav>
              <div class="container bg-light">

            <div class="row row-content align-items-center">
                <div class="col-12 col-sm-6 order-sm-first col-md-10">
                  <br>
                      <h5>{{ $university->name}}</h5>
                      <br>
                      <p> {{ $university->about }}</p>
                  </div>
                <div>
                </div>
            </div>
            <hr>

            <div class="row row-content align-items-center">
                <div class="col-12 col-sm col-md">
                    <h5>Major</h5>
                    <p>{{ $university->name}} offers following major.<br>
                        {{ $university->major }}
                    </p>
                </div>
           </div>
        <hr>

      <div class="row row-content align-items-center">
        <div class="col-12 col-sm-4 order-sm-6 col-md" align="center">
                <img src="{{'/building_images/'.$university->building_image}}" width="800" height="250">
                <br><br>
                <h5>Building and Sites</h5>
          </div>
      </div>
      <hr>

      <div class="row row-content align-items-center">
        <div class="col-12 col-sm-4 order-sm-first col-md-4">
                <img src="{{'/campus_images/'.$university->building_image}}" width="300" height="200"><br>
                <h7>Campus View</h7>
          </div>
          <div class="col col-sm-2-last col-md">
          <p></p>
          </div>
      </div>
      <hr>
      
      <div class="row row-content align-items-center">
          <div class="col-12 col-sm col-md">
              <h5>collaboration</h5>
              <p>{{ $university->collaboration}}<br>
              </p>
          </div>
      </div>
      <hr>

      <div class="row row-content align-items-center">
          <div class="col-12 col-sm col-md">
              <h5>Contact</h5>
              <p>{{ $university->address}}<br>
              </p>
          </div>
      </div>
      <hr>

        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-4 offset-1 col-sm-2">
                        <h5>Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-7 col-sm-5">
                        <h5>Our Address</h5>
                        <address>
                      121, Clear Water Bay Road<br>
                      Clear Water Bay, Kowloon<br>
                      HONG KONG<br>
                      Tel.: +852 1234 5678<br>
                      Fax: +852 8765 4321<br>
                      Email: <a href="mailto:confusion@food.net">confusion@food.net</a>
                   </address>
                    </div>
                    <div class="col-12 col-sm-4 align-self-center">
                        <div class="text-center">
                            <a href="http://google.com/+">Google+</a>
                            <a href="http://www.facebook.com/profile.php?id=">Facebook</a>
                            <a href="http://www.linkedin.com/in/">LinkedIn</a>
                            <a href="http://twitter.com/">Twitter</a>
                            <a href="http://youtube.com/">YouTube</a>
                            <a href="mailto:">Mail</a>
                        </div>
                    </div>
               </div>
               <div class="row justify-content-center">
                    <div class="col-auto">
                        <p>© Copyright</p>
                    </div>
               </div>
            </div>
        </footer>
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
