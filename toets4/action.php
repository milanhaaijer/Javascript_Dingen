<?php

$conn = mysqli_connect('localhost', 'root', '', 'top2000');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET["id"];
$name = $_GET['artist'];
$country = $_GET['country'];
$year = $_GET['year'];


$sql = "UPDATE artist SET name='$name', country='$country', year=$year WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header("Location: ./");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
?>