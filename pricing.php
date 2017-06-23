<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pricing | Rain E-Learning </title>
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
      <div class="full-height" id="pricing-landing">
        <div class="overlay-dark row text-center">
          <br><br><br><br><br><br><br><br>
          <h1>Flexible Pricing for different insitutions</h1>
          <p class="light-text large-text">Get a custom quotation based on your institution's needs</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="col-xs-12">
          <br><br>
        </div>
        <div class="container col-xs-12 col-sm-6">
          <div class="col-xs-12 price-box card-pricing">
            <h2 class="text-center">INSTITUTION DETAILS</h2>
            <ul class="pricing-list">
              <li>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Institution Name" id="req_inst_name">
                </div>
              </li>
              <li>
                <div class="form-group">
                  <select type="text" class="form-control"  id="req_inst_category">
                    <option value="International">International School</option>
                    <option value="Private">Private Institution</option>
                    <option value="Public" disabled>Public Institution</option>
                  </select>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Institution's Phone Number" id="req_email">
                </div>
              </li>
              <li>
                <div class="form-group">
                  <select type="text" class="form-control"  id="req_inst_category">
                    <option value="small">1 - 200 Students</option>
                    <option value="medium">201 - 500 Students</option>
                    <option value="large">501 - 1000 Students</option>
                    <option value="extra-large">1000+ Students</option>
                  </select>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Institution Location" id="req_email">
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="container col-xs-12 col-sm-6">
          <div class="col-xs-12 price-box card-pricing">
            <h2 class="text-center">FEATURES NEEDED</h2>
            <div class="col-xs-12 col-sm-6">
              <ul class="pricing-list">
                <li>
                  <div class="checkbox">
                    <label><input type="checkbox" checked disabled>Superuser Panel</label>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <label><input type="checkbox" checked disabled>Classrooms</label>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <label><input type="checkbox">Assignments</label>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <label><input type="checkbox">Schedules</label>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <label class=""><input type="checkbox">Tests</label>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-6">
              <ul class="pricing-list">
                <li>
                  <div class="checkbox">
                    <label><input type="checkbox">Statistics</label>
                  </div>
                </li>
                <li>
                  <div class="checkbox">
                    <label><input type="checkbox" value="">Assignments</label>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-xs-12 divider"></div>
            <div class="col-xs-12 container msg-box">
              <h3 class="text-center light-text"><span id="feature_count">2</span> Features selected.</h3>
              <p class="text-center light-text">If unsure, you can <a href="<?php echo FEATURES_LINK;?>">learn more about features here</a></p>
            </div>
          </div>
        </div>
        <div class="col-xs-12"><br></div>
        <div class="card-pricing container col-xs-12">
          <br>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your name(s)" id="req_name">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Role at the institution eg. Staff,Teacher" id="req_sender_role">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email address to send quotation to" id="req_email">
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="javascript:void(0)" class="btn btn-default">GET QUOTATION</a>
            <br>
          </div>
          <div class="col-xs-12"><br></div>
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
