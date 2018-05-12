<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-moon-o fa-rotate-90"></i> Marketplace</a> </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php#page-top" class="page-scroll">Home</a></li>
        <li><a href="index.php#portfolio" class="page-scroll">Products</a></li>
        <li><a href="index.php#about" class="page-scroll">About</a></li>
        <li><a href="analytics.php">Analytics</a></li>
        <?php
          if (isset($_COOKIE["USER"])){
            $username =  $_COOKIE["USER"];
            print ("<li><a href=\"logout.php\">$username | logout</a></li>");
          }
          else
            print ("<li><a href=\"login.php\">Login/Signup</a></li>");
        ?>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>