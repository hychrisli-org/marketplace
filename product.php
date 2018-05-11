<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<?php
  include 'navigation.php';
?>

<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="col-xs-12 col-md-6">
          <a href=<?php echo $_POST['productUrl']?>><img src="<?php echo $_POST['imgUrl']?>" class="img-responsive" alt=""></a>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="about-text" >
            <h4 style="color:beige"><a href=<?php echo $_POST['productUrl']?>><u><?php echo $_POST['title']?></u></a></h4>
            <p><?php echo $_POST['desc']?></p>
          </div>
        </div>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" id="title" class="form-control" placeholder="Review Title" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="review" id="message" class="form-control" rows="4" placeholder="Review Comments" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-default">Submit Review</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>