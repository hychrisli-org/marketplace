<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
<!-- Navigation -->
<?php
include 'lib.php';
define('TIMEZONE', 'US/Pacific');
date_default_timezone_set(TIMEZONE);
include 'navigation.php';

$username = getUsername();
$DBUSER = getenv('MARKET_DB_USER');
$DBPASS = getenv('MARKET_DB_PASS');
$HOST = getenv('MARKET_HOST');

$conn = new mysqli($HOST, $DBUSER, $DBPASS, 'marketplace');
if ($conn->connect_error) {
  die("Connection failed:" . $conn->connect_error);
}

$conn->set_charset("utf8");
$tz = (new DateTime('now', new DateTimeZone('US/Pacific')))->format('P');
$conn->query("SET time_zone='$tz';");

$selectSql="SELECT p.title, p.productUrl, vl.visitTs FROM VISIT_LOG vl JOIN PRODUCT p on vl.productId = p.productId WHERE vl.username = '$username' ORDER BY vl.visitTs DESC LIMIT 10";

?>

<div id="contact" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 section-title text-center">
        <h2><?php print ($username.": Last 10 visits")?></h2>
        <?php
        $results = $conn->query($selectSql);
        print ($conn->error);

        while( $row = $results -> fetch_assoc()) {
          $title = $row['title'];
          $productUrl = $row['productUrl'];
          $visitTs = $row['visitTs'];
          print ("
            <div class=\"row\">
              <div class=\"col-xs-6\">
                <a href = $productUrl style=\"color:beige\"><u>$title</u></a>
              </div>
              <div class=\"col-xs-6\">
                 $visitTs
              </div>
            </div>
            ");
        }
        ?>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>