<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1cb33cb3;
        }
        .navbar {
            background-color: #090a0b;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar h1 {
            font-size: 1.5rem;
            margin-left: 250px
        }
        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            margin-left: 1rem;
        }
        
        .sidebar {
            width: 250px;
            background-color: #070707;
            color: white;
            position: fixed;
            top: 0;
            bottom: 0;
            padding-top: 0rem;
            gap: 10rem;
        }
        .sidebar a {
            display: block;
            padding: 2rem;
            color: rgb(255, 255, 255);
            text-decoration: none;
            font-size: 1rem;
        }

        .sidebar .logo {
            display: block;
            padding: 2rem;
            color: rgb(31, 242, 66);
            text-decoration: none;
            font-size: 2.3rem;
            font-family: Georgia, 'Times New Roman', Times, serif
        }
        
        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.171);
        }
        .main-content {
            margin-left: 250px;
            padding: 2rem;
        }
        .main-content h2 {
            margin-bottom: 3rem;
            font-size: 2rem;
            margin-top: 0rem;
        }

        .main-content h2 span {
            color: #eef1ef;
            font-size: 2rem;
        }
        
        .card-container {
            display: grid;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        .card {
            background-color: white;
            border-radius: 8px;
            padding: 1rem;
            flex: 1;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card h3 {
            margin: 0 0 1rem;
            font-size: 1.2rem;
        }
        .card p {
            font-size: 1.5rem;
            color: #28a745;
        }
        .button {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background-color: #030303;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 1rem;
        }
        .button:hover {
            background-color: #0c0d0ec5;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Admin Dashboard</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </div>
    <div class="sidebar">
        <div class="logo">Eco - Mart</div>
        <a href="#">Dashboard</a>
        <a href="#">Manage Suppliers</a>
        <a href="#">Manage Products</a>
        <a href="#">Manage Orders</a>
        <a href="#">Manage Customers</a>
        <a href="#">Reports</a>
        <a href="#">Settings</a>
    </div>
    <div class="main-content">
        <h2>Welcome, Admin</h2>
        <div class="card-container">
            <div class="card">
                <h3>Total Suppliers</h3>
                <p>25</p>
            </div>
            <div class="card">
                <h3>Total Products</h3>
                <p>120</p>
            </div>
            <div class="card">
                <h3>Pending Orders</h3>
                <p>15</p>
            </div>
            <div class="card">
                <h3>Total Revenue</h3>
                <p>$25,000</p>
            </div>
            <div class="card">
                <h3>Registered Customers</h3>
                <p>500</p>
            </div>
        </div>
    </div>
</body>
</html>
