
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>University</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/carousel/carousel.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/album/album.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="nav-scroller py-1 mb-1 float-right">
        <nav class="nav d-flex justify-content-end">
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
      </div>
    </header>
    <main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <div class="row">
                  <div class="col-4">
                    <img src="{{'images/sharemeImage.svg'}}" class="paperlogo1">
                  </div>

                  <div class="col-8">
                    <div class="row">
                      <h5>Hello Learner !</h5>
                    </div>
                    <div class="row">
                      <h1>Share your lecture, note, knowledge, skill with others.</h1>
                    </div>
                    <div class="row">
                      ShareMe allow you to share all your homework, knowledge, skill and various learners from all university can learn from each other.
                    </div>
                    <br>
                    <div class="row">
                      <button class='b-sharewithus'><span>Share With Us</span></button>
                      <button class='b-browseposts'><span>Browse Posts</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="container">
        <h3 class="text-center">University in Myanmar</h3>
      </div>
      <hr>
      <div class="container">
        <div class="row">
            @foreach($universities as $university)
          <div class="col-sm-2">
              <div class="col-mb-3 box">
                <div class="card-body">
                  @if($university->logo)
                      <a href="/public/{{ $university->id }}"><img src="{{'/logo/'.$university->logo}}" width="shrink-to-fit" height="80"></a>
                    @endif
                    <br>
                <h18>{{ $university->name}}</h18>
              </div>
            </div>
          </div>
            @endforeach
        </div>
      </div>
          {{ $universities->links() }}
      </div>
    </main>
    <footer class="blog-footer">
      <p>Footer template built for <a href="https://getbootstrap.com/">MMM & HMO Project</a> by <a href="https://twitter.com/mdo">Laravel</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
  </body>
</html>
