
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cozy Villa - LaraBnb</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    background: #f9f9f9;
    color: #333;
}

header {
    background: #4a90e2;
    color: white;
    padding: 20px;
    text-align: center;
}

.photos {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 10px;
    padding: 20px;
}

.photo {
    background: #ddd;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    font-weight: bold;
}

.content {
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

.about {
    flex: 2;
    margin-right: 20px;
}

.booking {
    flex: 1;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.booking h3 {
    margin-top: 0;
}

.reserve-btn {
    background: #e74c3c;
    color: white;
    border: none;
    padding: 10px;
    width: 100%;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
}

.reserve-btn:hover {
    background: #c0392b;
}

.note {
    font-size: 12px;
    color: #777;
    margin-top: 10px;
    text-align: center;
}

footer {
    background: #333;
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 20px;
}

</style>
<body>
    <header>
        <h1>Cozy Villa</h1>
        <p>Claraburgh, Tunisia · New Listing</p>
        <p>Hosted by Test User</p>
    </header>

    <section class="photos">
        <div class="photo">Main Photo</div>
        <div class="photo">Bedroom</div>
        <div class="photo">Kitchen</div>
        <div class="photo">Bathroom</div>
        <div class="photo">View</div>
    </section>

    <main class="content">
        <div class="about">
            <h2>About this space</h2>
            <p>6 bedrooms · 2 bathrooms</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
               Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>

        <aside class="booking">
            <h3>$298 / night</h3>
            <form>
                <label>Check-in</label>
                <input type="date" name="checkin">
                <label>Check-out</label>
                <input type="date" name="checkout">
                <button type="submit" class="reserve-btn">Reserve Now</button>
                <p class="note">You won't be charged yet</p>
            </form>
        </aside>
    </main>

    <footer>
        <p>© 2026 LaraBnb Vacation Rentals. Built with Laravel.</p>
    </footer>
</body>
</html>
