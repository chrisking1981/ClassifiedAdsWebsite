<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Advertenties Nederland (Classified Ads Website)</title>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Zoeken" aria-label="Zoeken">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Zoeken</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Advertenties</a>
                    </li>
                    

                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('place-ad') }}">Plaats Advertentie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Inloggen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registreren</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <!-- Introductiesectie -->
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Welkom bij Contact Advertenties Nederland</h1>
                <p>De beste (classified ads website) plek om contactadvertenties te vinden en te plaatsen.</p>
                
                <a href="{{ route('place-ad') }}" class="btn btn-primary">Plaats Advertentie</a>
            </div>
        </div>
    </section>

    <!-- Laatste Advertenties per Rubriek -->
    <section class="container mt-5">
        <h2>Laatste Advertenties</h2>
        <!-- Hier kun je een lus gebruiken om de laatste advertenties weer te geven -->
        <div class="row">
            <!-- Voor elke rubriek -->
            <div class="col-md-4">
                <h3>Rubrieknaam</h3>
                <!-- Voor elke advertentie -->
                <div class="card mb-3">
                    <!-- Advertentie-inhoud hier -->
                </div>
                <a href="#">Bekijk meer</a>
            </div>
        </div>
    </section>

    <!-- Uitgelichte Advertenties -->
    <section class="container mt-5">
        <h2>Uitgelichte Advertenties</h2>
        <div class="row">
            <!-- Hier kun je uitgelichte advertenties weergeven -->
        </div>
    </section>

    <!-- Testimonials -->
    <section class="container mt-5">
        <h2>Testimonials</h2>
        <div class="row">
            <!-- Hier kun je testimonials weergeven -->
        </div>
    </section>

    <!-- Nieuws & Updates -->
    <section class="container mt-5">
        <h2>Nieuws & Updates</h2>
        <div class="row">
            <!-- Hier kun je nieuwsberichten weergeven -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="#">Algemene Voorwaarden</a></li>
                        <li><a href="#">Privacybeleid</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Contact</h4>
                    <p>E-mail: info@example.com</p>
                    <p>Telefoon: +123456789</p>
                    <!-- Voeg hier sociale media-iconen toe -->
                </div>
            </div>
        </div>
    </footer>

    <!-- Aanmelden/Registreren -->
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Meld je aan of registreer</h2>
                <p>Word lid van onze community om advertenties te plaatsen en te bekijken.</p>
                <a href="#" class="btn btn-primary">Aanmelden</a>
                <a href="#" class="btn btn-outline-primary">Registreren</a>
            </div>
        </div>
    </section>

    <!-- Categorieën of Rubrieken -->
    <section class="container mt-5">
        <h2>Categorieën</h2>
        <!-- Hier kun je een lijst met beschikbare categorieën weergeven -->
    </section>

    <!-- Voeg hier JavaScript-bestanden toe indien nodig -->

</body>
</html>
