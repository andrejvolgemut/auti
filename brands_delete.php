<?php require('connect.php'); ?>

<?php 

//$_POST['name']
//$_POST['year_est]

$sql = "DELETE FROM brands  WHERE id=" . $_GET['id'] . ";";
echo($sql);
$mysqli->query($sql);


header('Location: brands.php');
?>

