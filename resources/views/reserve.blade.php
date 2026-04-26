<form action="/reserve" method="POST">
  @csrf
  <aside class="booking">
            <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reserve Now</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 400px;
      margin: 60px auto;
      background: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    label {
      display: block;
      margin: 10px 0 5px;
      font-weight: bold;
    }
    input, select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    button {
      width: 100%;
      padding: 12px;
      background: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Reserve Your Stay</h2>
    <form action="reserve.php" method="POST">
      <label for="checkin">Check-in Date</label>
      <input type="date" id="checkin" name="check_in" required>

      <label for="checkout">Check-out Date</label>
      <input type="date" id="checkout" name="check_out" required>

      <label for="guests">Number of Guests</label>
      <input type="number" id="guests" name="guests" min="1" value="1" required>

      <label for="property">Property</label>
      <select id="property" name="property_id" required>
        <option value="">-- Select Property --</option>
        <option value="1">Beach Villa</option>
        <option value="2">City Apartment</option>
        <option value="3">Mountain Cabin</option>
      </select>

      <button type="submit">Reserve Now</button>
    </form>
  </div>
</body>
</html>

</form>
