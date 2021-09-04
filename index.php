<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/fontawesome-free-5.14.0-web/css/all.css"
    crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <title>Bootstrap Theme</title>
</head>


<!-- HOME SECTION -->
  <section id="showcase">
<div class="row ">

 <div class="col-lg-4 p-4 primary-overlay">

<div class="container m-5">
    <div class="display-4">
      <p class="text-center" >Portfolio</p>
    </div>
<ul class="nav nav-pills flex-column ">
            <li class="nav-item ">
                <a class="nav-link text-dark whit" href="index.php" >
                  <b> ABOUT </b> 
                </a>
            </li>
            <li class="nav-item opac">
                <a class="nav-link text-dark " href="contact_us.php">CONTACT</a>
            </li>
            <li class="nav-item opac">
                <a class="nav-link text-dark" href="profile.php">PROFILE</a>
            </li>
            <li class="nav-item opac">
                <a class="nav-link text-dark" href="resume.php">RESUME</a>
            </li>
        </ul>
        <footer id="mainFooter" class="text-center p-4 mt-2 pt-5 text-black-50">
          <div class="container">
            <div class="row">
              <div class="col">
                <p>  Copyright <i class="fa fa-copyright" aria-hidden="true"></i>
                 <span id="year">  
                   
                 </span>
                 All right deserved
               </p>
               <div class="car">
                <div class="card-body"> 
                  <div class="card-text">Follow</div>         
                  <div class="d-flex justify-align-content">
                    <div class="p-4">
                      <a href="facebook.com"  class="anchor">
                        <i class="fab fa-facebook fa-2x"></i>
                      </a>
                    </div>
                    <div class="p-4"> 
                      <a href="twitter.com"  class="anchor">
                      <i class="fab fa-twitter fa-2x"></i>
                    </a>
                  </div>
                    <div class="p-4">
                      <a href="instagram.com"  class="anchor">
                        <i class="fab fa-instagram fa-2x"></i>
                      </a>
                    </div>
                  </div>
                  <h6 class="h5 mb-4">Check my repository </h6>
                  <a href="" class="anchor">
               <i class="fab fa-github fa-2x" aria-hidden="true"></i>
              </a> 
                </div>
              </div>
              </div>
            </div>
          </div>
         </footer>
      </div>
    </div>
      <div class="col-lg-8    sec-overlay d-none d-md-block">
        <div class="container col-10 mx-auto ">
            <div class="col-5 mx-auto mt-5 mb-2">
          <img src="images/high.jpg" alt="" class="img-fluid so rounded-circle ">
          </div>
          <div class="col-lg-5 mx-auto">
            <p class="text-muted text-black mx-auto">Full stack Developer</p>
          </div>
          <div class="col-lg-7 mx-auto">
            <h4 class="text-dark mx-5">Oladejo Samuel</h4>
          </div>
          <div class="col-lg-12 mx-auto p-3">
            <p class="text-dark p-4 text-justify">
              Hi, am Oladejo Samuel, a full stack developer. i build responsive web applications, am design wordpress site, am also into cloud base technologies such as docker and kubernetes. i have gained so much experience as a web developer over the past few years. check out my profiles to learn more about me.
            </p>
          </div>
          <br>
          <br>
      </div>
      </div>
      <div class="col-lg-8    secs-overlay d-md-none">
        <div class="container col-10 mx-auto ">
            <div class="col-6 mx-auto mt-0">
          <img src="images/person1.jpg" alt="" class="img-fluid rounded-circle im">
          </div>
          <div class="col-lg-5 mx-auto">
            <p class="text-muted text-black text-center mx-4">Full stack Developer </p>
          </div>
          <div class="col-sm-12 mx-auto">
            <h4 class="text-dark mx-2 text-center">Oladejo Samuel</h4>
          </div>
          <div class="col-sm-12 mx-auto p-2">
            <p class="text-black-100 p-1 text-justify">
             Hi, am Oladejo Samuel, a full stack developer. i build responsive web applications, am design wordpress site, am also into cloud base technologies such as docker and kubernetes. i have gained so much experience as a web developer over the past few years 
            </p>
          </div>
          <br>
          <br>
      </div>
      </div>
      </div>
    </section> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" 
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" 
  crossorigin="anonymous"></script>
  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // Init Scrollspy
    $('body').scrollspy({ target: '#main-nav' });

    // Smooth Scrolling
    $("#main-nav a").on('click', function (event) {
      if (this.hash !== "") {
        event.preventDefault();

        const hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function () {

          window.location.hash = hash;
        });
      }
    });
  </script>
  <style>
    .whit {
      text-decoration-color: #1a1a1a !important; 
    text-decoration: none !important;
    white-space: nowrap;
    cursor: pointer;
    box-sizing: border-box;
    text-decoration-line: none !important;
    }


    #showcase {
  position: relative;
  background: url("images/mountains.jpg");
  min-height: 600px; }
  #showcase .primary-overlay {
    background: rgba(219, 226, 228, 0.747);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    min-height: 652px;
    max-height: 662px;
     }
     #showcase .sec-overlay {
    background: rgba(224, 235, 238, 0.747);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    min-height: 663px;
    max-height: 720px;
     }
     #showcase .secs-overlay {
    background: rgba(224, 235, 238, 0.747);
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    min-height: 663px;
    max-height: 670px;
     }
     .opac a:hover{
    transition: opacity linear 100ms;
    opacity: .8;
    color: rgb(150, 150, 59) !important;
}
body{
  overflow-x: hidden;
}
.so{
  max-height: 200px;
  max-width: 400px;
}
.anchor{
  text-decoration: none !important;
  color: inherit;
}
  </style>
</body>

</html>