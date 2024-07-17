<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pizza House')
    </title>
    
   <link href = "/css/main.css" rel ="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1>Pizza House</h1>
            <p>Discover the best pizzas in the Noth!</p>
        </div>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Pizza House. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
