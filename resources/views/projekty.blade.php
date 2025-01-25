<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header class="logo-header text-center">
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
    </a>
</header>

    <!-- Navbar (Menu) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Moja Wizytówka</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('projekty') }}">Projekty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">O mnie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Treść strony z projektami -->
    <div class="container mt-5">
        <h1>Moje Projekty</h1>
        <p>Zapraszam do zapoznania się z moimi projektami, które realizowałem do tej pory.</p>
        <!-- Tutaj możesz dodać swoje projekty -->
    </div>

     <!-- Sekcja kontaktowa -->
     <section id="contact" class="container mt-5">
            <h2>Skontaktuj się ze mną</h2>
            <p>Masz pytania dotyczące mojego projektu lub chcesz dowiedzieć się więcej o tym, jak mogę pomóc w tworzeniu stron internetowych? Skontaktuj się ze mną!</p>

            <!-- Formularz kontaktowy -->
            <form action="/submit_contact" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Imię i nazwisko</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Wiadomość</label>
                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Wyślij</button>
            </form>

            <p class="mt-3">Lub skontaktuj się ze mną bezpośrednio przez e-mail: <a href="mailto:jan.kowalski@example.com">jan.kowalski@example.com</a></p>
        </section>
        
    <!-- Stopka -->
    <footer class="text-center mt-5">
        <p>© 2025 Moja Wizytówka</p>
    </footer>

    <!-- Skrypty -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

