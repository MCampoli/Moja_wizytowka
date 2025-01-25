@extends('layouts.layout') <!-- Używamy layoutu -->

@section('content') <!-- Zaczynamy sekcję, która zostanie wstrzyknięta w @yield('content') w layout -->

    <!-- Nagłówek strony -->
    <header class="text-center mt-5">
        <h1>Kontakt</h1>
        <p>Skontaktuj się ze mną, wypełniając formularz kontaktowy lub zapoznaj się z moimi danymi kontaktowymi poniżej.</p>
    </header>

    <!-- Dane kontaktowe w ramce -->
    <section class="container mt-5">
        <h2>Dane kontaktowe</h2>
        <p><strong>Imię i nazwisko:</strong> Jan Kowalski</p>
        <p><strong>Numer telefonu:</strong> +48 123 456 789</p>
        <p><strong>E-mail:</strong> <a href="mailto:jan.kowalski@example.com">jan.kowalski@example.com</a></p>
        <p><strong>Adres:</strong> Ul. Przykładowa 12, 00-001 Warszawa</p>
    </section>

    <!-- Mapa z trasą dojazdu -->
    <section id="map" class="container mt-5">
        <h2>Jak dojechać</h2>
        <p>Wpisz swoje miejsce początkowe, aby zobaczyć trasę do nas:</p>

<iframe src="https://www.google.com/maps?q=Ul.+Przykładowa+12,+00-001+Warszawa&output=embed" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
</iframe>

        
        </div>
    </section>


@endsection
