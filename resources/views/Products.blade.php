<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
    
</head>
<body>
     <!-- Navbar -->
     <header>
        <nav class="navbar">
            <div class="logo">Eco - Mart</div>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Our Story</a></li>
                <li><a href="{{ route('products') }}">Our Products</a></li>
                <li><a href="#">Sustainability</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <div class="navbar-buttons">
                <a href="#" class="cart-btn">🛒</a>
                @if (Route::has('login'))
               
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
               
            @endif
            </div>
        </nav>
    </header>

    <div class="header-section">
        <div class="header-content">
            <h1>Our Products</h1>
            <h2>Eco - Mart</h2>
        </div>
    </div>

    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h3>Categories</h3>
            <ul>
                <li><a href="#">Organic Foods</a></li>
                <li><a href="#">Locally Sourced Foods</a></li>
                <li><a href="#">Sustainable Seafood</a></li>
                <li><a href="#">Fair Trade Foods</a></li>
                <li><a href="#">Biodynamic Foods</a></li>
            </ul>
        </aside>

        <!-- Product Section -->
        <main class="product-section">
            <h3>Sustainable Seafood</h3>
            <div class="product-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <img src="images/p2.jpeg" alt="Farmed Oysters">
                    <h4>Farmed Oysters</h4>
                    <p>$ 7.00</p>
                    <div class="rating">★★★★★</div>
                    <button class="cart-btn">Add to Cart</button>
                </div>
                <!-- Product 2 -->
                <div class="product-card">
                    <img src="images/p1.jpeg" alt="Arctic Char">
                    <h4>Arctic Char</h4>
                    <p>$ 7.50</p>
                    <div class="rating">★★★★★</div>
                    <button class="cart-btn">Add to Cart</button>
                </div>
                <!-- Product 2 -->
                <div class="product-card">
                    <img src="images/p3.jpeg" alt="Arctic Char">
                    <h4>Prawns and shrimp</h4>
                    <p>$ 5.50</p>
                    <div class="rating">★★★★★</div>
                    <button class="cart-btn">Add to Cart</button>
                </div>
                <!-- Product 2 -->
                <div class="product-card">
                    <img src="images/p4.jpeg" alt="Arctic Char">
                    <h4>Hake</h4>
                    <p>$ 4.50</p>
                    <div class="rating">★★★★★</div>
                    <button class="cart-btn">Add to Cart</button>
                </div>
                <!-- Product 2 -->
                <div class="product-card">
                    <img src="images/p5.jpeg" alt="Arctic Char">
                    <h4>Alaskan salmon</h4>
                    <p>$ 8.50</p>
                    <div class="rating">★★★★★</div>
                    <button class="cart-btn">Add to Cart</button>
                </div>
                <!-- Product 2 -->
                <div class="product-card">
                    <img src="images/p6.jpeg" alt="Arctic Char">
                    <h4>Skipjack tuna</h4>
                    <p>$ 9.50</p>
                    <div class="rating">★★★★★</div>
                    <button class="cart-btn">Add to Cart</button>
                </div>
               
                
            </div>
        </main>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <!-- Company Info -->
            <div class="footer-section company-info">
                <h2 class="company-logo">Eco - Mart</h2>
                <p>Contact</p>
                <p>E-Mail: ecomart@gmail.com</p>
                <p>Hotline: +94 11 123 4567</p>
            </div>

            <!-- Navigation Links -->
            <div class="footer-section links">
                <p>Home</p>
                <p>Our Story</p>
                <p>Our Products</p>
                <p>Sustainability</p>
                <p>Contact Us</p>
            </div>

            <!-- Account Links -->
            <div class="footer-section account">
                <p>Sign in</p>
                <p>View Cart</p>
                <p>Track my Order</p>
                <p>Help</p>
                <p>Responsibilities</p>
            </div>

            <!-- Social Media Links -->
            <div class="footer-section social-media">
                <p>Connect with us</p>
                <div class="social-icons">
                    <img src="images/download (1).png" alt="Facebook">
                    <img src="images/download (3).jpeg" alt="Instagram">
                    <img src="images/twitter.png" alt="Twitter">
                    <img src="images/download (2).jpeg" alt="WhatsApp">
                </div>
            </div>
        </div>
    </footer>






















    
</body>
</html>