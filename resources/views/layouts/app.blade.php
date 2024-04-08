<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Include any CSS or JS files -->
</head>
<body>
    <header>
        <!-- Your header content -->
    </header>

    <nav>
        <!-- Your navigation menu -->
    </nav>

    <main>
        @yield('content') <!-- This will be replaced by content from other views -->
    </main>

    <footer>
        <!-- Your footer content -->
    </footer>
</body>
</html>
