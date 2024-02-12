<?php
$conn = mysqli_connect('localhost', 'root', '', 'top2000');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM artist";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<h1 class='header'>Header</h1>";
    echo "<div class='content'><table>
                <tr>
                    <th>ID</th>
                    <th class='artist'>Artist</th>
                    <th>Country</th>
                    <th>Year</th>
                    <th></th>
                </tr>";
  while($row = mysqli_fetch_assoc($result)) {
    // echo "<tr><td>".$row["id"]."</td><td>". $row["name"]."</td><td>". $row["country"]."</td><td>"."<a href='update.php'>Update</a>"."</td><td>"."<button>Delete</button>";
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["country"]."</td>";
    echo "<td>".$row["year"]."</td>";
    echo "<td><a href='delete.php?id=".$row["id"]."'>Delete</a></td>";
    echo "<td><a href='update.php?id=".$row["id"]."'>Update</a></td>";
    echo "</tr>";
  }
  echo "</table></div>";
} else {
  echo "0 results";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Toets4</title>
</head>
<body>
    
</body>
</html>