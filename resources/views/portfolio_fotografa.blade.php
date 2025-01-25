@extends('layouts.layout')

@section('title', 'Portfolio Fotografa')

@section('content')
    <!-- Nagłówek strony -->
    <header class="text-center mt-5">
        <h1>Portfolio Fotografa</h1>
        <p>Strona stworzona na zlecenie fotografa, w celu zaprezentowania jego najlepszych prac w elegancki sposób.</p>
    </header>

    <!-- Opis projektu -->
    <section id="project-description" class="container mt-5">
        <h2>O projekcie</h2>
        <p class="text-secondary">
            Zrealizowałem stronę internetową dla fotografa, której celem było stworzenie eleganckiego portfolio, które pozwala na efektowne zaprezentowanie zdjęć w Internecie. Strona jest responsywna, co zapewnia jej doskonałą jakość wyświetlania na wszystkich urządzeniach, od telefonów po komputery stacjonarne.
        </p>
        <p class="text-secondary">
            Projekt obejmował stworzenie atrakcyjnej galerii zdjęć, umożliwiającej łatwe przeglądanie zdjęć w różnych kategoriach, a także integrację z prostymi narzędziami do edycji zdjęć i dodawania nowych prac. Strona została zaprojektowana z wykorzystaniem nowoczesnych technologii, takich jak **HTML5**, **CSS3** oraz **JavaScript**.
        </p>
    </section>

    <!-- Galeria zdjęć -->
    <section id="photo-gallery" class="container mt-5">
        <h2>Galeria</h2>
        <div class="row">
            <!-- Pierwsze zdjęcie -->
            <div class="col-md-4">
                <a href="{{ asset('images/portfolio_fotografa_1.jpg') }}" data-lightbox="gallery" data-title="Portfolio Fotografa - Zdjęcie 1">
                    <img src="{{ asset('images/portfolio_fotografa_1.jpg') }}" alt="Zdjęcie 1" class="img-fluid rounded shadow mb-4">
                </a>
            </div>
            <!-- Drugie zdjęcie -->
            <div class="col-md-4">
                <a href="{{ asset('images/portfolio_fotografa_2.jpg') }}" data-lightbox="gallery" data-title="Portfolio Fotografa - Zdjęcie 2">
                    <img src="{{ asset('images/portfolio_fotografa_2.jpg') }}" alt="Zdjęcie 2" class="img-fluid rounded shadow mb-4">
                </a>
            </div>
            <!-- Trzecie zdjęcie -->
            <div class="col-md-4">
                <a href="{{ asset('images/portfolio_fotografa_3.jpg') }}" data-lightbox="gallery" data-title="Portfolio Fotografa - Zdjęcie 3">
                    <img src="{{ asset('images/portfolio_fotografa_3.jpg') }}" alt="Zdjęcie 3" class="img-fluid rounded shadow mb-4">
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <!-- Lightbox2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <!-- Lightbox2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
@endpush
