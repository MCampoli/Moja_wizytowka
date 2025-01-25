@extends('layouts.layout')

@section('title', 'Umiejętności')

@section('content')
<section id="skills" class="container mt-5">
    <h2>Moje umiejętności</h2>
    <p>Jako programista, posiadam doświadczenie w różnych technologiach, które umożliwiają mi tworzenie funkcjonalnych i nowoczesnych aplikacji. Oto moje kluczowe umiejętności:</p>

    <div class="row">
        <!-- Umiejętność 1 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h5 class="card-title">Frontend</h5>
                    <ul>
                        <li>HTML5, CSS3, JavaScript (ES6+)</li>
                        <li>React, Vue.js</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Umiejętność 2 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h5 class="card-title">Backend</h5>
                    <ul>
                        <li>Node.js, PHP, Python (Django)</li>
                        <li>MySQL, MongoDB</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Umiejętność 3 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h5 class="card-title">Narzędzia</h5>
                    <ul>
                        <li>Git, Webpack, Docker</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Umiejętność 4 -->
        <div class="col-md-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h5 class="card-title">Inne</h5>
                    <ul>
                        <li>UX/UI Design</li>
                        <li>Optymalizacja SEO, dostępność (WCAG)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <p class="mt-4">Nieustannie rozwijam swoje umiejętności, by dostarczać rozwiązania zgodne z najnowszymi trendami i standardami w branży IT.</p>
</section>
@endsection
