<!DOCTYPE html>
<html>
<head>
  <title>Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/mygridsystem.css">

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Philosopher:400,700" rel="stylesheet">
  <!-- google fonts -->

  <!-- fontawesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"></script>
  <!-- fontawesome -->

  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- jquery -->

  <!-- local script -->
  <script type="text/javascript" src="javascripts/script.js"></script>
    <script type="text/javascript" src="javascripts/jquery.touchSwipe.min.js"></script>
  <!-- local script -->

</head>
<body>
<div class="grid-container">
  <div class="sidebar">
    <div class="grid-container">
      <div class="row" id="dp">
        <div class="col-xsm-3 col-tb-3 col-lp-3"></div>
        <div class="col-xsm-6 col-tb-6 col-lp-6">
          <img class="img-res dp" src="images/tz.jpg">
        </div>
        <div class="col-xsm-3 col-tb-3 col-lp-3"></div>
      </div>
    </div>
    <div class="menu font-mina">
      <ul>
        <li><a class="active-menu" href="#about">About</a></li>
        <li><a href="#work">Work</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
    <div class="sidebar-social">
      <div class="grid-container">
        <div class="row">
          <div class="col-xsm-2 col-tb-2 col-lp-2"></div>
          <div class="col-xsm-2 col-tb-2 col-lp-2">
            <a href="#behancelink"><i class="fab fa-behance-square"></i></a>
          </div>
          <div class="col-xsm-2 col-tb-2 col-lp-2">
            <a href="#twitterlink"><i class="fab fa-twitter-square"></i></a>
          </div>
          <div class="col-xsm-2 col-tb-2 col-lp-2">
            <a href="#instagramlink"><i class="fab fa-instagram"></i></a>
          </div>
          <div class="col-xsm-2 col-tb-2 col-lp-2">
            <a href="#githublink"><i class="fab fa-github-square"></i></a>
          </div>
          <div class="col-xsm-2 col-tb-2 col-lp-2"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="mobilenav">
      <button class="menu-button"><i class="fas fa-bars"></i></button>
  </div>
    <div class="my-overlay"></div>
    <div class="swipe-area"></div>
  <div class="main-content">
    <section class="about" id="about">
      <div class="row pt-lp-5">
        <div class="col-lp-1 col-xsm-12"></div>
        <div class="col-lp-11 col-xsm-12 abouttitle">
          <h3 class="font-mina">About me</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lp-1 col-xsm-12"></div>
        <div class="col-lp-11 col-xsm-12">
          <p class="name font-philosopher pt-lp-5 pt-xsm-0">tabrez<span class="surname"> khan</span><span class="dot">.</span></p>
          <p class="front-end-dev font-mina">
            Front-End Developer
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lp-1 col-xsm-12"></div>
        <div class="col-lp-11 col-xsm-12">
          <p class="aboutmetext font-mina">
            India based front-end developer in making.
            Currently a trainee at <a href="https://edwisor.com">edWisor.com</a>.
            <br>
            From a very young age, I enjoyed pushing my creativity discovering code and design in all its forms.
            <br>
            I design thoughtful, easy-to-use and of course amazing web designs that surpass common <br>obstacles and make lives simpler.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lp-1 col-xsm-12"></div>
        <div class="col-lp-11 col-xsm-12 aboutbuttons">
          <a href="#contact"><button class="hiremebutton font-mina">Hire me</button></a>
          <a href="#contact"><button class="contactmebutton font-mina">Contact me</button></a>
        </div>
      </div>
      <div class="row mt-lp-2">
        <div class="col-lp-1 col-xsm-12"></div>
        <div class="col-lp-11 col-xsm-12">
          <i class="fas fa-quote-left quote-icon"></i>
          <br>
          <span class="quote-text font-mina">A good design is as little design as possible.</span>
          <br>
          <br>
        </div>
      </div>
    </section>
    <section class="work" id="work">
      <div class="row pt-lp-5 pt-xsm-1">
        <div class="col-lp-1 col-xsm-12"></div>
        <div class="col-lp-11 col-xsm-12 worktitle">
          <h3 class="font-mina">Work</h3>
        </div>
      </div>
      <div class="cards mt-xsm-3">
          <div class="row font-mina card-text">
              <div class="col-lp-4 col-xsm-12">
                  <div class="card">
                      <div class="card-image">
                          <img src="images/card_image_2.png" alt="">
                      </div>
                  </div>
                  <h4>Faceless Man</h4>
              </div>
              <div class="col-lp-4 col-xsm-12">
                  <div class="card font-mina">
                      <div class="card-image">
                          <img src="images/card_image_1.png" alt="">
                      </div>
                  </div>
                  <h4>Almost before we knew it, we had left the ground</h4>
              </div>
              <div class="col-lp-4 col-xsm-12">
                  <div class="card font-mina">
                      <div class="card-image">
                          <img src="images/card_image_3.png" alt="">
                      </div>
                  </div>
                  <h4>And that's a good bye!!!</h4>
              </div>
          </div>
          <div class="row font-mina card-text">
              <div class="col-lp-4 col-xsm-12">
                  <div class="card">
                      <div class="card-image">
                          <img src="images/card_image_4.png" alt="">
                      </div>
                  </div>
                  <h4>Office workspace</h4>
              </div>
              <div class="col-lp-4 col-xsm-12">
                  <div class="card font-mina">
                      <div class="card-image">
                          <img src="images/card_image_5.png" alt="">
                      </div>
                  </div>
                  <h4>Installation infographics</h4>
              </div>
              <div class="col-lp-4 col-xsm-12">
                  <div class="card font-mina">
                      <div class="card-image">
                          <img src="images/card_image_6.png" alt="">
                      </div>
                  </div>
                  <h4>The end is near</h4>
              </div>
          </div>
      </div>
    </section>
    <section class="contact" id="contact">
      <div class="row pt-lp-5 pt-xsm-1">
        <div class="col-lp-1 col-xsm-12"></div>
        <div class="col-lp-11 col-xsm-12 contacttitle">
          <h3 class="font-mina">Contact Me</h3>
        </div>
      </div>
        <div class="row pt-lp-5 pt-xsm-1">
            <div class="col-lp-1 col-xsm-12"></div>
            <div class="col-lp-10 col-xsm-12 contacttitle">
              <div class="row">
              <?php 
                $success = $_GET["success"];
                if(isset($success)) {
                  echo '<div class="col-xsm-12 col-lp-12 suceess-message font-mina">
                            Contact form successfully submitted. Thank you, I will get back to you soon!
                          </div>';
                }
                else {
                  echo '<div class="col-xsm-12 col-lp-12 danger-message font-mina">
                          Internal Error!!!
                        </div>';
                }
              ?>
              </div>
                <form method="post" action="contact-form-process.php" class="contact-form font-mina">
                    <label for="projectBrief">
                        Project brief description
                    </label><br>
                    <textarea name="projectBrief" id="projectBrief" placeholder="Project type, target customer, timeline, estimate etc" cols="30" rows="5" required="required"></textarea>
                    <br>
                    <label for="about-you">
                        About You
                    </label>
                    <div class="row fullNameRow">
                        <div class="col-lp-6 col-xsm-12">
                            <input type="text" name="fullName" id="fullName" required="required" placeholder="Full Name">
                        </div>
                        <div class="col-lp-6 col-xsm-12">
                            <input type="email" name="email" id="email" required="required" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lp-6 col-xsm-12">
                            <input type="text" name="companyName" id="companyName" required="required" placeholder="Company Name">
                        </div>
                        <div class="col-lp-6 col-xsm-12">
                            <input type="text" name="position" id="position" required="required" placeholder="Position">
                        </div>
                    </div>
                    <br>
                    <button class="hiremebutton font-mina" type="submit">Request a Quote</button>
                </form>
            </div>
            <div class="col-lp-1 col-xsm-12"></div>
        </div>
    </section>
  </div>
</div>
</body>
</html>