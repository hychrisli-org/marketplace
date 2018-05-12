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

function getData($conn, $company)
{
  $sql = "SELECT title as label, totVisits as y FROM PRODUCT order by totVisits desc limit 10";

  if (isset($company))
    $sql = "SELECT title as label, totVisits as y FROM PRODUCT where company = '$company' order by totVisits desc limit 10";

  $result = $conn->query($sql);
  $dataPoints = [];

  while ($row = $result->fetch_assoc()) {
    $dataPoints[] = $row;
  }

  return $dataPoints;
}

$allData = getData($conn, null);
$tsumData = getData($conn, "Tsum");
$litemechData = getData($conn, "Litemech");
$meteoricData = getData($conn, "Meteoric");
$gameData = getData($conn, "GameSeller");

?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="contact" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="categories">
        <ul class="cat">
          <ol class="type">
            <li><a href="#" onclick="plotAll()" class="active">All</a></li>
            <li><a href="#" onclick="plotTsum()">Tsum Tsum</a></li>
            <li><a href="#" onclick="plotLitemech()">Litemech</a></li>
            <li><a href="#" onclick="plotMeteoric()">Meteoric</a></li>
            <li><a href="#" onclick="plotGameSeller()">Game Seller</a></li>
          </ol>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-8 col-md-offset-2 All">
        <div class="portfolio-item">
          <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<script>

  window.onload = function () {plotAll()};

  function plotAll() {
    plotChart("Top 10 Marketplace Products", <?php echo json_encode($allData, JSON_NUMERIC_CHECK); ?>);
  }

  function plotTsum (){
    plotChart("Top 10 Tsum Tsum Products", <?php echo json_encode($tsumData, JSON_NUMERIC_CHECK); ?>);
  }

  function plotMeteoric (){
    plotChart("Top 10 Meteoric Products", <?php echo json_encode($meteoricData, JSON_NUMERIC_CHECK); ?>);
  }

  function plotLitemech () {
    plotChart("Top 10 Litemech Products",<?php echo json_encode($litemechData, JSON_NUMERIC_CHECK); ?> )
  }

  function plotGameSeller () {
    plotChart("Top 10 GameSeller Products",<?php echo json_encode($gameData, JSON_NUMERIC_CHECK); ?> )
  }


  function plotChart(title, dataPoints){
    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      exportEnabled: true,
      theme: "dark2", // "light1", "light2", "dark1", "dark2"
      title: {
        text: title
      },
      axisY: {
        title: "Page Visits Counts",
        titleFontColor: "#6D78AD",
        gridColor: "#6D78AD"
      },
      data: [{
        type: "column", //change type to bar, line, area, pie, etc
        //indexLabel: "{y}", //Shows y value on all Data Points
        indexLabelFontColor: "#5A5757",
        indexLabelPlacement: "outside",
        dataPoints: dataPoints
      }]
    });
    chart.render();
  }

</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<?php include 'footer.php'; ?>
</html>

