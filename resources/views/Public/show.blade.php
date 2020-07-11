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
          <body id="page-top">
              <nav class="navbar navbar-expand-lg bg-white fixed-top" id="sideNav">
                  <a class="navbar-brand js-scroll-trigger" href="#page-top">
                  <img src="{{'/logo/'.$university->logo}}" width="90" height="90" alt=""></a
                  ><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav">
                        <a class="p-2 text-muted" href="/public">Home</a>
                        <a class="p-2 text-muted" href="#">Forum</a>
                        <a class="p-2 text-muted" href="#">Blog</a>
                        <a class="p-2 text-muted" href="#">AboutUs</a>
                        <div class="nav-scroller py-1 mb-1">
                          <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                        </div>
                      </ul>
                  </div>
              </nav>
              <div class="container bg-light">

            <div class="row row-content align-items-center">
                <div class="col-12 col-sm-6 order-sm-first col-md-11">
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
                    <p>{{ $university->name}} offers following major.<br></p>
                    <ol>
                     @foreach(explode(',',$university->major) as $row)
                      <li> {{ $row }} </li>
                     @endforeach
                   </ol>
                 </div>
               </div>
               <hr>
      <div class="row row-content align-items-center">
        <div class="col-12 col-sm-4 order-sm-6 col-md" align="center">
                <img src="{{'/building_images/'.$university->building_image}}" width="700" height="250">
                <br><br>
                <h5>Building and Sites</h5>
          </div>
      </div>
      <hr>

      <div class="row row-content align-items-center">
        <div class="col-12 col-sm-4 order-sm-first col-md-4">
                <img src="{{'/campus_images/'.$university->campus_image}}" width="270" height="200"><br><br>
                <h5>Campus View</h5>
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
  <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Cool stuff</a></li>
            <li><a class="text-muted" href="#">Random feature</a></li>
            <li><a class="text-muted" href="#">Team feature</a></li>
            <li><a class="text-muted" href="#">Stuff for developers</a></li>
            <li><a class="text-muted" href="#">Another one</a></li>
            <li><a class="text-muted" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Resource</a></li>
            <li><a class="text-muted" href="#">Resource name</a></li>
            <li><a class="text-muted" href="#">Another resource</a></li>
            <li><a class="text-muted" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Business</a></li>
            <li><a class="text-muted" href="#">Education</a></li>
            <li><a class="text-muted" href="#">Government</a></li>
            <li><a class="text-muted" href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Team</a></li>
            <li><a class="text-muted" href="#">Locations</a></li>
            <li><a class="text-muted" href="#">Privacy</a></li>
            <li><a class="text-muted" href="#">Terms</a></li>
          </ul>
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
