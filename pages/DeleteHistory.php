<?php 
include 'DBconnect.php';

$searchid = $_GET['searchid'];
$delete = "DELETE from searchtbl where SearchID = $searchid";
$run = mysqli_query($connect,$delete);

echo "<script>window.alert('Deleted')</script>";
echo "<script>window.location='History.php'</script>";
 ?>