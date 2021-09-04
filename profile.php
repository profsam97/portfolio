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
<section id="showcase">
  <div class="row ">
  
   <div class="col-lg-4 p-4 primary-overlay">
  
  <div class="container m-5">
      <div class="display-4">
        <p class="text-center" >Portfolio</p>
      </div>
  <ul class="nav nav-pills flex-column ">
              <li class="nav-item opac">
                  <a class="nav-link text-dark whit" href="index.php" >
                    ABOUT
                  </a>
              </li>
              <li class="nav-item opac">
                  <a class="nav-link text-dark " href="contact_us.php">CONTACT</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-dark" href="profile.php">
                    <b>PROFILE</b> 
                    </a>
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
      <div class="col-lg-8  sec-overlay">
          <div class="row">
        <div  class="col-md-6 mt-5">
        <div class="car p-2 m-2">
            <img class="card-img-top h-25  help w-100" src="images/amhope.jpg" alt="">
            <div class="card-body col-md-9 mx-auto">
                <h4 class="card-title mx-auto">Oladejo Samuel</h4>
                <i class="card-text mx-4">Software Engineer</i>
            </div>
        </div>
        </div>  
      <div class="col-md-6">
        <div class="car card-body py-5">
            <h3>My Skills</h3>
            <p>Below are some the technologies i currently use.</p>
            <hr>
                      <h4>JavaScript</h4>
            <div class="progress mb-3">
              <div class="progress-bar bg-warning" style="width:90%"></div>
            </div>
            <h4>Bootstrap</h4>
            <div class="progress mb-3">
              <div class="progress-bar bg-default" style="width: 99%"></div>
            </div>
            <h4>Docker</h4>
            <div class="progress mb-3">
              <div class="progress-bar bg-dark" style="width:85%"></div>
            </div>
            <h4>Jquery</h4>
            <div class="progress mb-3">
              <div class="progress-bar bg-danger" style="width:85%"></div>
            </div>
            <h4>PHP</h4>
            <div class="progress mb-3">
              <div class="progress-bar bg-info" style="width:90%"></div>
            </div>
            <h4>Vue</h4>
            <div class="progress mb-3">
              <div class="progress-bar bg-primary" style="width:70%"></div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div> 
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
     .help{
       border-radius: 2%;
       max-height: 470px;
     }
     .opac a:hover{
    transition: opacity linear 100ms;
    opacity: .8;
    color: rgb(150, 150, 59) !important;
}
body{
  overflow-x: hidden;
}
.anchor{
  text-decoration: none !important;
  color: inherit;
}
  </style>
</body>

</html>