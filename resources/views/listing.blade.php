<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cozy Villa - LaraBnb</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; background: #fff; }
        header, footer { padding: 1rem 2rem; background: #f8f8f8; }
        .logo { color: #e91e63; font-weight: bold; font-size: 1.5rem; }
        .btn { padding: 0.5rem 1rem; border: none; cursor: pointer; }
        .btn-primary { background: #e91e63; color: white; }
        .btn-outline { background: white; color: black; border: 1px solid #ccc; }
        .grid { display: grid; grid-template-columns: 2fr 1fr; gap: 2rem; padding: 2rem; }
        .images { display: grid; grid-template-columns: 2fr 1fr; gap: 1rem; }
        .images img { width: 100%; border-radius: 8px; }
        .booking { border: 1px solid #ccc; padding: 1rem; border-radius: 8px; }
        .footer { text-align: center; font-size: 0.9rem; color: #666; }
    </style>
</head>
<body>
    <header>
        <div class="logo">LaraBnb</div>
        <div style="float:right;">
            <button class="btn btn-outline">Login</button>
            <button class="btn btn-primary">Sign Up</button>
        </div>
    </header>

    <main class="grid">
        <section>
            <h1>Cozy Villa</h1>
            <p>Ghazelabourg, Tunisia · <strong>New Listing</strong> · Hosted by Test User</p>
            <div class="images">
                <img src="/images/cozyvilla.jpg" alt="Main Photo">
                <div>
                    <img src="/images/bedroom.jpg" alt="Bedroom">
                    <img src="/images/kitchen.jpg" alt="Kitchen">
                    <img src="/images/bathroom.jpg" alt="Bathroom">
                    <img src="/images/view.jpg" alt="View">
                </div>
            </div>
            <h2>About this space</h2>
            <p>🛏️ 6 Bedrooms · 🚿 2 Bathrooms</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </section>

        <aside class="booking">
            <h3>$298 /night</h3>
            <form>
                <label>Check-in</label><br>
                <input type="date" name="checkin"><br><br>
                <label>Check-out</label><br>
                <input type="date" name="checkout"><br><br>
                <button class="btn btn-primary">Reserve Now</button>
                <p style="font-size: 0.8rem; color: #666;">You won’t be charged yet</p>
            </form>
        </aside>
    </main>

    <footer class="footer">
        © 2026 LaraBnb Vacation Rentals. Built with Laravel.
    </footer>
</body>
</html>
