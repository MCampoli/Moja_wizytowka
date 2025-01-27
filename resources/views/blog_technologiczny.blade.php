@extends('layouts.layout') <!-- Używamy layoutu -->

@section('content') <!-- Zaczynamy sekcję, która zostanie wstrzyknięta w @yield('content') w layout -->


    <!-- Nagłówek strony -->
    <header class="text-center mt-5">
        <h1>Blog o Technologii</h1>
        <p>Witaj na moim blogu, który skupia się na najnowszych trendach w technologii, recenzjach produktów, poradnikach i wielu innych tematach związanych z IT i innowacjami.</p>
    </header>

    <!-- Opis projektu -->
    <section id="project-description" class="container mt-5">
        <h2>O projekcie</h2>
        <p class="text-secondary">
            Blog został stworzony jako dynamiczna platforma z systemem zarządzania treścią, pozwalającą na łatwe publikowanie artykułów oraz interakcję z czytelnikami. Umożliwia to prowadzenie dyskusji w sekcji komentarzy oraz łatwe przeszukiwanie treści za pomocą wyszukiwarki.
        </p>
        <p class="text-secondary">
            Użyte technologie: **PHP**, **Laravel**, **Vue.js**, **Bootstrap**. Blog jest responsywny i pozwala użytkownikom na wygodne przeglądanie artykułów na różnych urządzeniach.
        </p>
    </section>

    <!-- Galeria zdjęć -->
    <section id="photo-gallery" class="container mt-5">
        <h2>Galeria artykułów</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ asset('images/blog_article_1.jpg') }}" data-lightbox="gallery" data-title="Artykuł 1">
                    <img src="{{ asset('images/blog_article_1.jpg') }}" alt="Artykuł 1" class="img-fluid rounded shadow">
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('images/blog_article_2.jpg') }}" data-lightbox="gallery" data-title="Artykuł 2">
                    <img src="{{ asset('images/blog_article_2.jpg') }}" alt="Artykuł 2" class="img-fluid rounded shadow">
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('images/blog_article_3.jpg') }}" data-lightbox="gallery" data-title="Artykuł 3">
                    <img src="{{ asset('images/blog_article_3.jpg') }}" alt="Artykuł 3" class="img-fluid rounded shadow">
                </a>
            </div>
        </div>
    </section>

@endsection
