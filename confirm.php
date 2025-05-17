<?php include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$hotel_id = $_POST['hotel_id'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

$conn->query("INSERT INTO bookings (hotel_id, name, email, checkin, checkout)
              VALUES ('$hotel_id', '$name', '$email', '$checkin', '$checkout')");

echo "<h1>Booking Confirmed!</h1><p>Thank you, $name. A confirmation email has been sent.</p>";
?>
