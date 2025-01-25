<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja Wizytówka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container"> 
    <!-- Logo -->
    <header class="logo-header text-center">
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

    <!-- Sekcja powitalna -->
    <header class="text-center mt-5">
        <h1>"Tworzę strony które inspirują."</h1>
        <p>Jan Kowalski – Web Developer | Frontend & Backend | Entuzjasta nowych technologii</p>
    </header>

    <!-- Sekcja z projektami -->
    <section id="projects" class="container mt-5">
        <h2>Moje projekty</h2>
        <div id="projectsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="{{ route('portfolio_fotografa') }}">
                        <img src="images/portfolio_fotografa.jpg" class="d-block w-100" alt="Portfolio Fotografa">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Portfolio Fotografa</h5>
                        <p>Nowoczesne portfolio dla fotografa z galerią zdjęć i możliwością rezerwacji sesji online.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="sklep_rekodzielo.html">
                        <img src="images/sklep_rekodzielo.jpg" class="d-block w-100" alt="Sklep z Rękodziełem">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Sklep z Rękodziełem</h5>
                        <p>Sklep online z katalogiem produktów, koszykiem i systemem płatności.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="blog_technologiczny.html">
                        <img src="images/blog_technologiczny.jpg" class="d-block w-100" alt="Blog o Technologii">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Blog o Technologii</h5>
                        <p>Dynamiczny blog z systemem zarządzania treścią, wyszukiwarką i sekcją komentarzy.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#projectsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Poprzedni</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#projectsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Następny</span>
            </button>
        </div>
    </section>



    <!-- Sekcja o mnie -->
    <section id="about" class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="images/coding.jpg" alt="Pisanie kodu" class="img-fluid rounded-circle shadow">
            </div>
            <div class="col-md-8">
                <h2>O mnie</h2>
                <p class="text-secondary">
                    Cześć! Nazywam się <strong>Jan Kowalski</strong> i jestem pasjonatem tworzenia nowoczesnych, funkcjonalnych stron internetowych. Moje doświadczenie obejmuje projektowanie zarówno frontendowych interfejsów użytkownika, jak i backendowych rozwiązań, które działają szybko i niezawodnie.
                </p>
                <p class="text-secondary">
                    Stawiam na przejrzysty kod, nowoczesne technologie i indywidualne podejście do każdego projektu. Współpracuję zarówno z klientami indywidualnymi, jak i z firmami, pomagając im wyróżnić się w sieci.
                </p>
                <p class="text-secondary">
                    Kiedy nie koduję, odkrywam nowe frameworki, uczę się najnowszych trendów lub eksperymentuję z grafiką komputerową.
                </p>
            </div>
        </div>
    </section>

    <!-- Sekcja z umiejętnościami -->
    <section id="skills" class="container mt-5">
        <h2>Moje umiejętności</h2>
        <ul>
            <li><strong>Frontend:</strong> HTML5, CSS3, JavaScript (ES6+), React, Vue.js</li>
            <li><strong>Backend:</strong> Node.js, PHP, Python (Django), MySQL</li>
            <li><strong>Narzędzia:</strong> Git, Webpack, Docker</li>
            <li><strong>Inne:</strong> UX/UI Design, optymalizacja SEO, dostępność (WCAG)</li>
        </ul>
        <p>Nieustannie rozwijam swoje umiejętności, by dostarczać rozwiązania zgodne z najnowszymi trendami i standardami.</p>
    </section>

    <!-- Sekcja Bloga -->
<section id="blog" class="container mt-5">
    <h2>Blog</h2>
    <p>Przeczytaj moje artykuły o nowinkach w programowaniu, nowych technologiach i innych interesujących tematach.</p>

    <div class="row">
        <!-- Blog post 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x200?text=Nowe+technologie" class="card-img-top" alt="Nowe technologie">
                <div class="card-body">
                    <h5 class="card-title">Nowe technologie w 2025 roku</h5>
                    <p class="card-text">W tym artykule omawiam trendy, które będą dominować w nadchodzących latach. Technologie takie jak sztuczna inteligencja, blockchain, czy 5G będą miały ogromny wpływ na naszą przyszłość.</p>
                    <a href="#" class="btn btn-primary">Czytaj więcej</a>
                </div>
            </div>
        </div>

        <!-- Blog post 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x200?text=Jak+zacząć+naukę" class="card-img-top" alt="Jak zacząć naukę programowania">
                <div class="card-body">
                    <h5 class="card-title">Jak zacząć naukę programowania?</h5>
                    <p class="card-text">Chcesz rozpocząć swoją przygodę z programowaniem? W tym artykule dzielę się swoimi doświadczeniami oraz rekomendacjami, jak skutecznie nauczyć się programowania od podstaw.</p>
                    <a href="#" class="btn btn-primary">Czytaj więcej</a>
                </div>
            </div>
        </div>

        <!-- Blog post 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x200?text=Trendy+programowania" class="card-img-top" alt="Trendy programowania">
                <div class="card-body">
                    <h5 class="card-title">Trendy w programowaniu na 2025 rok</h5>
                    <p class="card-text">W tym artykule przyglądam się najnowszym trendom w programowaniu, które mogą zrewolucjonizować sposób, w jaki tworzymy oprogramowanie.</p>
                    <a href="#" class="btn btn-primary">Czytaj więcej</a>
                </div>
            </div>
        </div>
    </div>
</section>

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


    <footer class="text-center mt-5">
        <p>&copy; 2025 Monika Campoli. Wszystkie prawa zastrzeżone.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

