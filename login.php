<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
<!-- Navigation -->
<?php
include 'navigation.php';
?>

<div id="contact" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 section-title text-center">
        <h2>Login / Signup</h2>
        <?php
          $msg = $_GET['msg'];
          $type = $_GET['type'];
          $color = 'red';
          if ( $type === 'ok'){
            $color = 'white';
          }
          print("<p style='color: $color'>$msg</p>")
        ?>

        <form name="login" id="login" action="login-handler.php" method = "post">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="form-group">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="required">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <input type="submit" name="action" class="btn btn-default" value="Login"/>
          <input type="submit" name="action" class="btn btn-default" value="Signup"/>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>