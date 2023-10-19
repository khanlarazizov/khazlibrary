<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Website</title>
    <link rel="stylesheet" href="/mainpage/style.css">
    <script src="scripts.js" defer></script>
</head>

<body>
<div class="container">
    <div class="search-section">
        <input type="text" id="bookSearch" placeholder="Search for a book...">
        <button id="searchButton">Search</button>
        @auth()
            <div>{{auth()->user()->name . " ". auth()->user()->surname}}</div>
        @endauth
    </div>


    <div class="categories">
        <h2>Book Categories</h2>
        <ul>
            <li>Fiction</li>
            <li>Non-fiction</li>
            <li>Science</li>
            <li>History</li>
            <!-- ... -->
        </ul>
    </div>

    <main class="book-display">
        <div class="book">
            <div class="book-image">
                <img src="https://m.media-amazon.com/images/I/81xboqJhzQL._AC_UF1000,1000_QL80_.jpg" alt="Book Title 1">
            </div>
            <p>Book Title 1</p>
        </div>
        <div class="book">
            <div class="book-image">
                <img src="https://m.media-amazon.com/images/I/81xboqJhzQL._AC_UF1000,1000_QL80_.jpg" alt="Book Title 1">
            </div>
            <p>Book Title 1</p>
        </div>
        <div class="book">
            <div class="book-image">
                <img src="https://m.media-amazon.com/images/I/81xboqJhzQL._AC_UF1000,1000_QL80_.jpg" alt="Book Title 1">
            </div>
            <p>Book Title 1</p>
        </div>
        <div class="book">
            <div class="book-image">
                <img src="https://m.media-amazon.com/images/I/81xboqJhzQL._AC_UF1000,1000_QL80_.jpg" alt="Book Title 1">
            </div>
            <p>Book Title 1</p>
        </div>

        <!-- ... [add more book divs as needed] -->
    </main>

    <footer>
        <div class="footer-section">
            <h3>Contact</h3>
            <p>Email: library@example.com</p>
            <p>Phone: +1 123-456-7890</p>
        </div>
        <div class="footer-section">
            <h3>Address</h3>
            <p>123 Library Lane</p>
            <p>Book City, BK 12345</p>
        </div>
        <div class="footer-section">
            <h3>Follow Us</h3>
            <p>Facebook | Twitter | Instagram</p>
        </div>
        <div class="copyright">
            Library &copy; 2023. All rights reserved.
        </div>
    </footer>
</div>
</body>

</html>
