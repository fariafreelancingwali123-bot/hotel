<?php include 'db.php';
$id = $_GET['id'];
$hotel = $conn->query("SELECT * FROM hotels WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Book Hotel</title></head>
<body>
  <h1>Book <?= $hotel['name'] ?></h1>
  <form method="POST" action="confirm.php">
    <input type="hidden" name="hotel_id" value="<?= $hotel['id'] ?>">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="date" name="checkin" required>
    <input type="date" name="checkout" required>
    <button type="submit">Confirm Booking</button>
  </form>
</body>
</html>
