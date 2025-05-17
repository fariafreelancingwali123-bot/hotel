<?php
include 'db.php';

// Get location from the search form
$location = isset($_GET['location']) ? $_GET['location'] : '';

// Sanitize the input to prevent SQL injection
$location = mysqli_real_escape_string($conn, $location);

// SQL query to fetch hotels by location
$sql = "SELECT * FROM hotels WHERE LOWER(location) LIKE LOWER('%$location%')";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Hotel Listings</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <h1>Hotels in <?= htmlspecialchars($location) ?></h1>

  <?php
  // Check if hotels were found
  if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      // Display each hotel with its image, name, description, and price
      echo "<div class='hotel-card'>
              <img src='assets/images/{$row['image']}' alt='{$row['name']}' class='hotel-image'>
              <h2>{$row['name']}</h2>
              <p>{$row['description']}</p>
              <p><strong>Price:</strong> ₹{$row['price']}</p>
              <a href='book.php?id={$row['id']}'>Book Now</a>
            </div><hr>";
    }
  } else {
    echo "<p>No hotels found in this location. Try another city!</p>";
  }
  ?>

</body>
</html>
