@extends('layouts.layout') <!-- Używamy layoutu -->

@section('content') <!-- Zaczynamy sekcję, która zostanie wstrzyknięta w @yield('content') w layout -->


    <!-- Nagłówek strony -->
    <header class="text-center mt-5">
        <h1>Sklep z Rękodziełem</h1>
        <p>Zapraszam do zapoznania się z projektem strony internetowej stworzonej dla mojego klienta – sklepu z rękodziełem. Strona umożliwia prezentację unikalnych, ręcznie robionych produktów, a także łatwą nawigację i możliwość zakupu.</p>
    </header>

    <!-- Opis projektu -->
    <section id="project-description" class="container mt-5">
        <h2>O projekcie</h2>
        <p class="text-secondary">
            Strona internetowa została zaprojektowana, aby pomóc mojemu klientowi sprzedawać rękodzielnicze produkty. Celem było stworzenie przyjaznej platformy zakupowej, która zapewnia prostotę nawigacji i bezpieczeństwo transakcji.
        </p>
        <p class="text-secondary">
            Użyte technologie: **PHP**, **Laravel**, **Bootstrap**. Strona umożliwia przeglądanie kategorii produktów, ich szczegółów, oraz dodawanie do koszyka. Projekt jest w pełni responsywny, co zapewnia użytkownikom wygodne korzystanie na różnych urządzeniach.
        </p>
    </section>

    <!-- Galeria zdjęć -->
    <section id="photo-gallery" class="container mt-5">
        <h2>Galeria produktów</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ asset('images/recznik.jpg') }}" data-lightbox="gallery" data-title="Ręcznie robiony ręcznik">
                    <img src="{{ asset('images/recznik.jpg') }}" alt="Produkt 1" class="img-fluid rounded shadow">
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('images/misa.jpg') }}" data-lightbox="gallery" data-title="Ręcznie robiona misa">
                    <img src="{{ asset('images/misa.jpg') }}" alt="Produkt 2" class="img-fluid rounded shadow">
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('images/wazon.jpg') }}" data-lightbox="gallery" data-title="Ręcznie robiony wazon">
                    <img src="{{ asset('images/wazon.jpg') }}" alt="Produkt 3" class="img-fluid rounded shadow">
                </a>
            </div>
        </div>
    </section>

@endsection
