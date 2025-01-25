@extends('layouts.layout')

@section('title', 'Blog')

@section('content')
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
@endsection
