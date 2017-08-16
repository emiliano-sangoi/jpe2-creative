<?php 

    ob_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name'); ?></title>

    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


<?php wp_head(); ?>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">Your Favorite Source of Free Bootstrap Themes</h1>
          <hr>
          <p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
          <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
        </div>
      </div>
    </header>


    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light">
            <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
            <a class="btn btn-default btn-xl sr-button" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
              <h3>Sturdy Templates</h3>
              <p class="text-muted">Our templates are updated regularly so they don't break.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
              <h3>Ready to Ship</h3>
              <p class="text-muted">You can use this theme as is, or you can make changes!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
              <h3>Up to Date</h3>
              <p class="text-muted">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
              <h3>Made with Love</h3>
              <p class="text-muted">You have to make your websites with love these days!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
          <div class="col-lg-4 col-sm-6">

	<?php
		$base = get_template_directory_uri();
		$imgf1 = $base . '/img/portfolio/fullsize/1.jpg';
		$imgf2 = $base . '/img/portfolio/fullsize/2.jpg';
		$imgf3 = $base . '/img/portfolio/fullsize/3.jpg';
		$imgf4 = $base . '/img/portfolio/fullsize/4.jpg';
		$imgf5 = $base . '/img/portfolio/fullsize/5.jpg';
		$imgf6 = $base . '/img/portfolio/fullsize/6.jpg';

		$imgt1 = $base . '/img/portfolio/thumbnails/1.jpg';
		$imgt2 = $base . '/img/portfolio/thumbnails/2.jpg';
		$imgt3 = $base . '/img/portfolio/thumbnails/3.jpg';
		$imgt4 = $base . '/img/portfolio/thumbnails/4.jpg';
		$imgt5 = $base . '/img/portfolio/thumbnails/5.jpg';
		$imgt6 = $base . '/img/portfolio/thumbnails/6.jpg';


	?>


            <a class="portfolio-box" href="<?php echo $imgf1; ?>">
              <img class="img-fluid" src="<?php echo $imgt1; ?>" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo $imgt2; ?>">
              <img class="img-fluid" src="<?php echo $imgt2; ?>" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo $imgf3; ?>">
              <img class="img-fluid" src="<?php echo $imgt3; ?>" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo $imgf4; ?>">
              <img class="img-fluid" src="<?php echo $imgt4; ?>" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo $imgf5; ?>">
              <img class="img-fluid" src="<?php echo $imgt5; ?>" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo $imgf6; ?>">
              <img class="img-fluid" src="<?php echo $imgt6; ?>" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <div class="call-to-action bg-dark">
      <div class="container text-center">
        <h2>Free Download at Start Bootstrap!</h2>
        <a class="btn btn-default btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
      </div>
    </div>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="primary">
            <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>-->


<?php wp_footer(); ?>
    
  </body>

</html>

<?php
    echo ob_get_clean();
?>

