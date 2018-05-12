<?php
include 'lib.php';

extract($_POST);
print_r($_POST);
if (!$username || !$password) {
  header("Location: login.php?msg=Fields Cannot Be Empty");
  die();
}

$DBUSER = getenv('MARKET_DB_USER');
$DBPASS = getenv('MARKET_DB_PASS');
$HOST = getenv('MARKET_HOST');

$conn = new mysqli($HOST, $DBUSER, $DBPASS, 'marketplace');
$selectSql = "SELECT password from USER where username = '$username'";
$selectRes = $conn -> query($selectSql);
$row = $selectRes -> fetch_assoc();

if ($action === 'Login') {

  if ( $row === null) {
    header( "Location: login.php?msg=No Such User: $username!");
    die();
  }
  $crptPass = $row['password'];
  if (password_verify($password, $crptPass)){
    setLoginCookie($username);
    header("Location: index.php");
    die();
  } else {
    header("Location: login.php?msg=Wrong Password!");
    die();
  }
} else {

  if ($row !== null){
    header("Location: login.php?msg=Username: $username already exists!");
    die();
  }

  $crptPass = password_hash($password, PASSWORD_BCRYPT);
  $insertSql = "insert into USER (username, password) VALUES ('$username', '$crptPass')";
  print($insertSql);
  if ( $conn->query($insertSql) === true ) {
    header("Location: login.php?msg=User: $username created successfully! You can now login&type=ok");
    die();
  } else {
    header("Location: login.php?msg=$conn->error");
  }
}



/*$userVerified = false;
$loginFile = fopen('./resource/login.txt', 'r');
while (!feof($loginFile)&&!$userVerified){
  $line = fgets($loginFile);
  $line = chop($line);
  $field = explode(",", $line, 2);
  print ($field."<br>");
  if ( $USERNAME == trim($field[0]) && $PASSWORD == trim($field[1])){
    $userVerified = true;
  }
}
fclose($loginFile);
if ( $userVerified ){
  header("Location: members.php");
  die();
} else {
  header("Location: login.php");
  die();
}*/