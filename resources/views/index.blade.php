
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Explore Stays - LaraBnb</title>
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

header nav {
    margin-top: 10px;
}

header nav a {
    color: white;
    margin: 0 10px;
    text-decoration: none;
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px;
}

.card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    padding: 15px;
    text-align: center;
}

.card img {
    width: 100%;
    border-radius: 8px;
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
        <h1>Explore Stays</h1>
        <p>Book unique places to stay and things to do</p>
        <nav>
            <a href="/login">Login</a>
            <a href="/signup">Sign Up</a>
        </nav>
    </header>

    <main class="grid-container">
        <div class="card">
            <img src="images/rustic-cabin.jpg" alt="Rustic Cabin">
            <h2>Rustic Cabin</h2>
            <p>$199 / night</p>
            <p>4 beds · 1 baths</p>
        </div>
        <div class="card">
            <img src="images/modern-villa.jpg" alt="Modern Villa">
            <h2>Modern Villa</h2>
            <p>$56 / night</p>
            <p>1 beds · 2 baths</p>
        </div>
        <div class="card">
            <img src="images/luxury-villa1.jpg" alt="Luxury Villa">
            <h2>Luxury Villa</h2>
            <p>$618 / night</p>
            <p>4 beds · 1 baths</p>
        </div>
        <div class="card">
            <img src="images/luxury-villa2.jpg" alt="Luxury Villa">
            <h2>Luxury Villa</h2>
            <p>$720 / night</p>
            <p>6 beds · 4 baths</p>
        </div>
        <div class="card">
            <img src="images/modern-apartment.jpg" alt="Modern Apartment">
            <h2>Modern Apartment</h2>
            <p>$264 / night</p>
            <p>6 beds · 4 baths</p>
        </div>
        <div class="card">
            <img src="images/cozyvilla.jpg" alt="Cozy Villa" >
            <a class="btn btn-primary" href="{{ route ('listing')}}" role="button">Detail</a>

            <h2>Cozy Villa</h2>
            <p>$298 / night</p>
            <p>6 beds · 2 baths</p>
        </div>
    </main>

    <footer>
        <p>© 2026 LaraBnb Vacation Rentals. Built with Laravel.</p>
    </footer>

</body>
</html>
