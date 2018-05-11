<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<?php
  include 'navigation.php';
  include 'tile.php';
  ?>
<!-- Header -->
<header id="header">
  <div class="intro text-center">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Welcome to <span class="brand">Marketplace</span></h1>
            <p>We are a digital agency that loves what we do</p>
            <a href="#services" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title text-center">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor apibus lornare diam commodo nibh.</p>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/about.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h4>Who We Are</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo.</p>
          <h4>What We Do</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh ante.</p>
          <h4>Why Choose Us</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title text-center">
      <h2>Our Portfolio</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor apibus lornare diam commodo nibh.</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".Tsum">Tsum Tsum</a></li>
            <li><a href="#" data-filter=".Litemech">Litemech</a></li>
            <li><a href="#" data-filter=".Meteoric">Meteoric</a></li>
            <li><a href="#" data-filter=".GameSeller">Game Seller</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <?php
        $sql = "SELECT * FROM PRODUCT";
        $DBUSER = getenv('MARKET_DB_USER');
        $DBPASS = getenv('MARKET_DB_PASS');
        $HOST = getenv('MARKET_HOST');

        $conn = new mysqli($HOST, $DBUSER, $DBPASS, 'marketplace');

        if ($conn->connect_error) {
          die("Connection failed:" . $conn->connect_error);
        }
        $conn->set_charset("utf8");
        $result = $conn -> query($sql);
        while ($row = $result -> fetch_assoc()){
          //$utfEncodedArray = array_map("utf8_encode", $row );
          // print_r($row);
          $title = $row["title"];
          $description = $row["description"];
          $productUrl = $row["productUrl"];
          $imgUrl = $row["imgUrl"];
          $company = $row["company"];
          productTile($title, $description, $imgUrl, $company);
        }?>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>