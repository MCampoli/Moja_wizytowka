@extends('layouts.layout')

@section('title', 'O mnie')

@section('content')
<section id="about" class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-4 text-center">
            <!-- Zdjęcie z opisem -->
            <img src="{{ asset('images/coding.jpg') }}" alt="Pisanie kodu" class="img-fluid rounded-circle shadow">
        </div>
        <div class="col-md-8">
            <h2>O mnie</h2>
            <p class="text-secondary">
                Cześć! Nazywam się <strong>Jan Kowalski</strong> i jestem pasjonatem tworzenia nowoczesnych, funkcjonalnych stron internetowych. 
                Moje doświadczenie obejmuje projektowanie zarówno frontendowych interfejsów użytkownika, jak i backendowych rozwiązań, które działają szybko i niezawodnie.
            </p>
            <p class="text-secondary">
                Stawiam na przejrzysty kod, nowoczesne technologie i indywidualne podejście do każdego projektu. Współpracuję zarówno z klientami indywidualnymi, 
                jak i z firmami, pomagając im wyróżnić się w sieci.
            </p>
            <p class="text-secondary">
                Kiedy nie koduję, odkrywam nowe frameworki, uczę się najnowszych trendów lub eksperymentuję z grafiką komputerową.
            </p>
        </div>
    </div>
</section>
@endsection

