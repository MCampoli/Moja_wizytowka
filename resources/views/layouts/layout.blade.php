<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Moja Wizytówka')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/menu.js') }}"></script>

</head>
<body>

    <div class="container">

        <!-- Logo -->
        <header class="logo-header text-center mt-3">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
            </a>
        </header>

        <!-- Navbar (Menu) -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('o_mnie') }}">O mnie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('umiejetnosci') }}">Umiejętności</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Projekty
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('portfolio_fotografa') }}">Portfolio Fotografa</a></li>
                                <li><a class="dropdown-item" href="{{ route('sklep_rekodzielo') }}">Sklep z Rękodziełem</a></li>
                                <li><a class="dropdown-item" href="{{ route('blog_technologiczny') }}">Blog o Technologii</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kontakt') }}">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sekcja treści strony (każda strona ma swoją treść) -->
        <div class="content">
            @yield('content')
        </div>

        <!-- Sekcja kontaktowa -->
        <section id="contact" class="container mt-5">
            <h2>Skontaktuj się ze mną</h2>
            <p>Masz pytania dotyczące mojego projektu lub chcesz dowiedzieć się więcej o tym, jak mogę pomóc w tworzeniu stron internetowych? Skontaktuj się ze mną!</p>

            <form action="/submit_contact" method="POST">
                @csrf
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
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Wyślij</button>
            </form>

            <p class="mt-3">Lub skontaktuj się ze mną bezpośrednio przez e-mail: <a href="mailto:jan.kowalski@example.com">jan.kowalski@example.com</a></p>
        </section>

    </div>

    <!-- Stopka -->
    <footer class="text-center mt-5">
        <p>&copy; 2025 Monika Campoli. Wszystkie prawa zastrzeżone.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
