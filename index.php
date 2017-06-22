<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Rain E-Learning</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <?php
      include_once("templates/header.php");
    ?>
    <main>
      <!-- Landing section here -->
      <div class="full-height landing row">
        <div class="container">
          <h1 class="light-text text-center">The simplest E-Learning system that gets things done</h1>
          <div class="container card landing-card col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <h2 class="text-center">SIMPLE . ELEGANT . RESPONSIVE</h2>
            <br>
            <p class="large-text light-text text-center">
              Upgrade to a smart digital solution for your institution with Rain
            </p>
            <br>
            <div class="col-xs-6 col-sm-4 col-sm-offset-1">
              <a class="col-xs-12 btn btn-landing" href="<?php echo PRICING_LINK;?>" id="btn-landing-get">
                GET
              </a>
            </div>
            <div class="col-xs-6 col-sm-4 col-sm-offset-1">
              <a class="col-xs-12 btn btn-landing" href="<?php echo ABOUT_LINK; ?>" id="btn-landing-learn">
                LEARN <span class="hidden-sm">MORE</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="container ">
        <h2 class="text-center">FEATURES</h2>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="card card-fixed">
            <h4 class="text-center">CLASSROOMS</h4>
            <p class="text-center"><a class="icon-btn" href="<?php echo CLASSROOMS_LINK; ?>"><i class="fa fa-group fa-5x" aria-hidden="true"></i></a></p><br>
            <h4 class="text-center light-text">
              Manage groups of students through classrooms.
            </h4>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="card card-fixed">
            <h4 class="text-center">ASSIGNMENTS</h4>
            <p class="text-center"><a class="icon-btn" href="<?php echo ASSIGNMENTS_LINK; ?>"><i class="fa fa-book fa-5x" aria-hidden="true"></i></a></p><br>
            <h4 class="text-center light-text">
              Send, work on, receive and grade assignments.
            </h4>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="card card-fixed">
            <h4 class="text-center">TESTS</h4>
            <p class="text-center"><a class="icon-btn" href="<?php echo TESTS_LINK; ?>"><i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i></a></p><br>
            <h4 class="text-center light-text">
              Create, take and automatically grade tests.
            </h4>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="card card-fixed">
            <h4 class="text-center">SCHEDULING</h4>
            <p class="text-center"><a class="icon-btn" href="<?php echo SCHEDULES_LINK; ?>"><i class="fa fa-calendar-o fa-5x" aria-hidden="true"></i></a></p><br>
            <h4 class="text-center light-text">
              Plan lessons and mark student attendance
            </h4>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="card card-fixed">
            <h4 class="text-center">STATISTICS</h4>
            <p class="text-center"><a class="icon-btn" href="<?php echo STATISTICS_LINK; ?>"><i class="fa fa-pie-chart fa-5x" aria-hidden="true"></i></a></p><br>
            <h4 class="text-center light-text">
              View assignment and schedule statistics.
            </h4>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="card card-fixed">
            <h4 class="text-center">SUPERUSER PANEL</h4>
            <p class="text-center"><a class="icon-btn" href="<?php echo SUPERUSER_LINK; ?>"><i class="fa fa-user-plus fa-5x" aria-hidden="true"></i></a></p><br>
            <h4 class="text-center light-text"><h4 class="text-center light-text">
              Create and manage user accounts through the superuser panel.
            </h4>
          </div>
        </div>

        <!-- Pricing -->
        <div class="col-xs-12 col-sm-6">
          <div class="card card-fixed">
            <h4 class="text-center">PRICING</h4>
            <p class="text-center"><a class="icon-btn" href="<?php echo PRICING_LINK;?>"><i class="fa fa-money fa-5x" aria-hidden="true"></i></a></p><br>
            <h4 class="text-center light-text">
              Get a custom quotation based on your institution's needs
            </h4>
            <br>
            <p class="text-center"><a class="btn btn-default" href="<?php echo PRICING_LINK;?>">GET QUOTATION</a></p>
          </div>
        </div>

        <!-- Contact -->
        <div class="col-xs-12 col-sm-6">
          <div class="card card-fixed">
            <h4 class="text-center">CONTACT</h4>
            <p class="text-center"><a class="icon-btn" href="<?php echo CONTACT_LINK;?>"><i class="fa fa-phone fa-5x" aria-hidden="true"></i></a></p><br>
            <h4 class="text-center light-text">
              Have any Questions? Feedback? We'd like to hear from you
            </h4>
            <br>
            <p class="text-center"><a class="btn btn-default" href="<?php echo CONTACT_LINK;?>">CONTACT US</a></p>

          </div>
        </div>
      </div>
      <br><br>
    </main>

    <?php
      include_once("templates/footer.php");
    ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
