<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Search</title>
  <style>
    /* Same CSS from earlier */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #f4f4f4;
      color: #333;
      line-height: 1.6;
    }

    header {
      background-color: #0e76a8;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .search-container {
      background: #fff;
      padding: 30px;
      margin: 30px auto;
      max-width: 800px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .search-container form {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: space-between;
    }

    .search-container input,
    .search-container button {
      padding: 12px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      flex: 1;
    }

    .search-container button {
      background-color: #0e76a8;
      color: white;
      cursor: pointer;
      border: none;
      transition: background 0.3s ease;
    }

    .search-container button:hover {
      background-color: #095c84;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #0e76a8;
      color: white;
      margin-top: 50px;
    }

    @media (max-width: 600px) {
      .search-container form {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>Find the Best Hotels in Pakistan</h1>
  </header>

  <div class="search-container">
    <form action="hotels.php" method="get">
      <input type="text" name="location" placeholder="Enter City (e.g., Lahore)" required>
      <input type="date" name="checkin" required>
      <input type="date" name="checkout" required>
      <button type="submit">Search</button>
    </form>
  </div>

  <footer>
    &copy; 2025 Hotel Booking System
  </footer>
</body>
</html>
