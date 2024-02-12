<?php
$id = $_GET['id'];
$conn = mysqli_connect("localhost", "root","","top2000");

if (!$conn) {
    die('Connection failed: '. mysqli_connect_error());
}

$sql = "DELETE FROM artist WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: index.php');
    exit;
} else {
    echo "Error deleting record";
}
?>