<?php

/*$dataPoints = array(
  array("x"=> 10, "y"=> 41),
  array("x"=> 20, "y"=> 35, "indexLabel"=> "Lowest"),
  array("x"=> 30, "y"=> 50),
  array("x"=> 40, "y"=> 45),
  array("x"=> 50, "y"=> 52),
  array("x"=> 60, "y"=> 68),
  array("x"=> 70, "y"=> 38),
  array("x"=> 80, "y"=> 71, "indexLabel"=> "Highest"),
  array("x"=> 90, "y"=> 52),
  array("x"=> 100, "y"=> 60),
  array("x"=> 110, "y"=> 36),
  array("x"=> 120, "y"=> 49),
  array("x"=> 130, "y"=> 41)
);*/

?>
<!DOCTYPE HTML>
<html>
<?php
include 'head.php';
include 'navigation.php';

$DBUSER = getenv('MARKET_DB_USER');
$DBPASS = getenv('MARKET_DB_PASS');
$HOST = getenv('MARKET_HOST');

$conn = new mysqli($HOST, $DBUSER, $DBPASS, 'marketplace');
if ($conn->connect_error) {
  die("Connection failed:" . $conn->connect_error);
}
$conn->set_charset("utf8");

$sql = "SELECT title as label, totVisits as y FROM PRODUCT order by totVisits desc limit 10";
$result = $conn->query($sql);
$dataPoints = [];

while ($row = $result->fetch_assoc()) {
  $dataPoints[] = $row;
}

?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="contact" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
      </div>
    </div>
  </div>
</div>
</body>
<script>
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      exportEnabled: true,
      theme: "light1", // "light1", "light2", "dark1", "dark2"
      title:{
        text: "Total Visits"
      },
      data: [{
        type: "column", //change type to bar, line, area, pie, etc
        //indexLabel: "{y}", //Shows y value on all Data Points
        indexLabelFontColor: "#5A5757",
        indexLabelPlacement: "outside",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
      }]
    });
    chart.render();

  }
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<?php include 'footer.php'; ?>
</html>

