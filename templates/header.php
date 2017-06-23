<?php
  //Main links
  const HOME_LINK = "./";
  const ABOUT_LINK = "about";
  const PRICING_LINK = "pricing";
  const FEATURES_LINK = "features";
  const CONTACT_LINK = "contact";

  //Other links
  const FAQS_LINK = "faqs";
  const TERMS_LINK = "terms-and-conditions";
  const PRIVACY_LINK = "privacy";
  const COOKIES_LINK = "cookie-policy";

  //Features links (Sub-links)
  const CLASSROOMS_LINK = FEATURES_LINK."#classrooms";
  const ASSIGNMENTS_LINK = FEATURES_LINK."#assignments";
  const TESTS_LINK = FEATURES_LINK."#tests";
  const SCHEDULES_LINK = FEATURES_LINK."#schedules";
  const STATISTICS_LINK = FEATURES_LINK."#statistics";
  const SUPERUSER_LINK = FEATURES_LINK."#superuser";
?>
<!-- Navigation -->
<header>
  <nav class="nav">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo HOME_LINK; ?>"><i class="glyphicon glyphicon-tint"></i> RAIN</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#rainNav" aria-label="Navigation menu toggle">
          <i class="fa fa-bars" style="color:#ccc;"></i>
        </button>
      </div>

      <div class="collapse navbar-collapse row" id="rainNav">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo ABOUT_LINK; ?>">ABOUT</a></li>
          <li><a href="<?php echo FEATURES_LINK;?>">FEATURES</a></li>
          <li><a href="<?php echo PRICING_LINK; ?>">PRICING</a></li>
          <li><a href="<?php echo CONTACT_LINK; ?>">CONTACT</a></li>
        </ul>
      </div>

    </div>
  </nav>
</header>
