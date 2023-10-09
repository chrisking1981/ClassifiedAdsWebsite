
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Contact Advertenties Nederland</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo" width="150">
            </a>
            <div class="navbar-nav ml-auto">
                <span class="navbar-text">
                    Welkom, {{ Auth::user()->name }}!
                </span>
                <a class="nav-link" href="{{ route('my-ads') }}">Mijn Advertenties</a>
                <a class="nav-link" href="{{ route('notifications') }}">Notificaties</a>
                <a class="nav-link" href="{{ route('settings') }}">Instellingen</a>
                <a class="nav-link" href="{{ route('logout') }}">Uitloggen</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container mt-5">
        <h1>Dashboard</h1>
        
<!-- Recent Advertisements -->
<section class="mt-4">
    <h2>Recente Advertenties</h2>
    <!-- List of recent ads posted by the user -->
    <ul class="list-group">
        <!-- This is a placeholder; you would dynamically generate this list based on database content -->
        <li class="list-group-item">Advertentie 1</li>
        <li class="list-group-item">Advertentie 2</li>
        <li class="list-group-item">Advertentie 3</li>
    </ul>
</section>

<!-- Messages & Responses -->
<section class="mt-4">
    <h2>Berichten & Reacties</h2>
    <!-- List of recent messages or responses -->
    <ul class="list-group">
        <!-- Placeholder; dynamically generate based on database content -->
        <li class="list-group-item">Bericht van Gebruiker A</li>
        <li class="list-group-item">Reactie op Advertentie X</li>
    </ul>
</section>

    </main>

    <!-- Footer (if needed) -->
    <!-- ... -->

    <!-- JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
