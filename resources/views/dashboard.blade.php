

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoJourney</title>
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
                <li><a href="#">Our Products</a></li>
                <li><a href="#">Sustainability</a></li>
                <li><a href="#">Contact Us</a></li>
                
            </ul>
            <div class="navbar-buttons">
                <a href="#" class="cart-btn">🛒</a>
                <a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="logout-btn" type="submit">logout</button>
                    </form>
                </a>
            
            </div>
        </nav>
    </header>

    <!-- Banner Section -->
    <section class="banner">
        <div class="banner-content">
            <h1>Welcome to ...
                <br><span>Eco - Mart</span></h1>
            <p>Join us on our journey to sustainability !!!</p>
            <input type="text" placeholder="Search here ..." class="search-bar">
            <button class="learn-more">Find more about our company...</button>
        </div>
        <div class="banner-images">
            <img src="/images/download.jpeg" alt="Image 1">
            <img src="/images/images.jpeg" alt="Image 2">
            <img src="/images/images (1).jpeg" alt="Image 3">
        </div>
    </section>

    <!-- Our Company Section -->
    <section class="company-section">
        <div class="company-intro">
            <h2>Explore...<br>Our Company,</h2>
            <p>Find out more about who we are, what we do, and how we positively impact Sri Lanka.</p>
        </div>
        <div class="company-cards">
            <div class="card">
                <img src="/images/images (2).jpeg" alt="Our Story">
                <h3>Our Story .....</h3>
                <p>Learn about our company and how we positively impact our country.</p>
            </div>
            <div class="card">
                <img src="/images/images (3).jpeg" alt="Sustainability">
                <h3>Sustainability .....</h3>
                <p>Find out about our sustainable products and our environment and community.</p>
            </div>
        </div>
    </section>

    <!-- Our Products Section -->
    <section class="products-section">
        <div class="product-content">
            <img src="/images/food.png" alt="Products" class="product-image">
            <div class="product-text">
                <h2>Our Products are on a mission to do good.</h2>
                <button class="explore-btn">Explore our Products...</button>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="services-section">
        <h2>Our Services</h2>
        <div class="services-container">
            <!-- Service 1 -->
            <div class="service-card">
                <img src="images/images (4).jpeg" alt="Service 1 Icon">
                <h3>Sustainable Sourcing</h3>
                <p>Ensuring that all our products meet strict sustainability standards.</p>
            </div>
            <!-- Service 2 -->
            <div class="service-card">
                <img src="images/product-certification-marks.jpg" alt="Service 2 Icon">
                <h3>Product Certifications</h3>
                <p>Our products are certified to help consumers make responsible choices.</p>
            </div>
            <!-- Service 3 -->
            <div class="service-card">
                <img src="images/download (1).jpeg" alt="Service 3 Icon">
                <h3>Eco-Friendly Packaging</h3>
                <p>Using only environmentally safe and biodegradable packaging materials.</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
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

  
                       

                    

                    
           


    

    

