<?php require('connect.php'); ?>

<?php 

//$_POST['name']
//$_POST['year_est]

$sql = "INSERT INTO brands (name, year_est) VALUES ('" . $_POST('name') . "', '" . $_POST['year_est'] . "');";
$mysqli->query($sql);

header('Location: brands.php');


//INSERT INTO brands (name, year_est) VALUES 'pero', '1967-3-07';