<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<?php
include 'navigation.php';
include 'lib.php';
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();

if (!isLogin()) {
  header("Location: login.php?msg=Please Login!&type=ok");
}

$username = getUsername();

if ( isset($_POST['submitReview']) ) {

  $reviewTitle = $_POST['reviewTitle'];
  $comment = $_POST['comment'];
  $productId = $_SESSION['productId'];
  $productUrl = $_SESSION['productUrl'];
  $imgUrl = $_SESSION['imgUrl'];
  $title = $_SESSION['title'];
  $desc = $_SESSION['desc'];
  $datetime = date('Y-m-d H:i:s');
  $reviewTitle = str_replace("'", "\'", $reviewTitle);
  $comment = str_replace("'", "\'", $comment);
  $insertSql = "INSERT INTO REVIEW (productId, username, title, comment, reviewTs) VALUES ($productId, '$username', '$reviewTitle', '$comment', '$datetime')";
} else {
  extract($_POST);
  $_SESSION['productId'] = $productId;
  $_SESSION['productUrl'] = $productUrl;
  $_SESSION['imgUrl'] =$imgUrl;
  $_SESSION['title'] = $title;
  $_SESSION['desc'] = $desc;
}
$productUrl = $productUrl."?username=$username";

$DBUSER = getenv('MARKET_DB_USER');
$DBPASS = getenv('MARKET_DB_PASS');
$HOST = getenv('MARKET_HOST');

$conn = new mysqli($HOST, $DBUSER, $DBPASS, 'marketplace');
if ($conn->connect_error) {
  die("Connection failed:" . $conn->connect_error);
}
$conn->set_charset("utf8");
if (isset($insertSql)){
  if ( $conn->query($insertSql) === true ) {
    $reviewSuccess = "Review Submitted Successfully";
  } else {
    $reviewFail = $conn->error;
  }
}
$selectReviewSql = "SELECT title, username, comment, reviewTs FROM REVIEW WHERE productId = $productId ORDER BY reviewTs desc LIMIT 20";

?>

<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="col-xs-12 col-md-6">
          <a href=<?php echo $productUrl ?>><img src="<?php echo $imgUrl ?>" class="img-responsive" alt=""></a>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="about-text">
            <h4 style="color:beige"><a href=<?php echo $productUrl ?>><u><?php echo $title ?></u></a></h4>
            <p><?php echo $desc ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <form name="review" id="reviewForm" action="product.php"  method = "post">
          <div class="form-group">
            <input type="text" id="reviewTitle" name="reviewTitle" class="form-control" placeholder="Review Title" required="required">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <textarea name="comment" id="comment" class="form-control" rows="4" placeholder="Review Comments" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <?php
          print("<p style='color: red'>$reviewFail</p>");
          print("<p style='color: white'>$reviewSuccess</p>");
          ?>
          <input type="submit" class="btn btn-default" name="submitReview" value="Submit Review"/>
        </form>
      </div>
    </div>
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <?php
        $result = $conn->query($selectReviewSql);
        while ($row = $result->fetch_assoc()) {
          $reviewTitle = $row['title'];
          $reviewer = $row['username'];
          $comment = $row['comment'];
          $reviewTs = $row['reviewTs'];

          print ("
            <div class=\"col-xs-12 col-md-6\">          
              <h4 style=\"color: yellow\"> $reviewTitle </h4>
              <p style=\"color: #c1aeff; font-size: 15px\"> $reviewer </p>
              <p style=\"color: white\"> $comment </p>
              <p style=\"color: grey; font-size: 15px\"> $reviewTs </p>
              <hr>
            </div>");
        }
        ?>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>