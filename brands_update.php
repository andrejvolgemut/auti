<?php require('connect.php'); ?>

<?php 

//$_POST['name']
//$_POST['year_est]

$sql = "UPDATE brands SET name='" . $_POST['name'] . "', year_est='" . $_POST['year_est'] . "' WHERE id=" . $_POST['id'] . ";";
echo($sql);
$mysqli->query($sql);


header('Location: brands.php');
?>

