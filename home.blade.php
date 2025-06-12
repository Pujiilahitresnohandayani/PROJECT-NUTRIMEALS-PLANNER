@extends('layouts.app')

@section('content')

<div class="hero-section text-center text-white d-flex align-items-center justify-content-center"
     style="background: url('{{ asset('images/hero1.jpg') }}') center/cover no-repeat; 
            height: 500px; position: relative; margin-top: -24px;">
    <div class="overlay" style="background: rgba(0, 0, 0, 0.5); width: 100%; height: 100%; position: absolute; top: 0; left: 0;"></div>
    <div class="container position-relative">
        <h1 class="fw-bold">Selamat Datang Di Web NutriMeals Planner</h1>
        <p class="lead">Temukan Rencana Makanan Anda</p>
    </div>
</div>

<div class="container my-5">
    <!-- Judul di tengah -->
    <h2 class="text-center fw-bold mb-4">Healty Food</h2>

    <!-- Grid Card untuk makanan -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @php
            $foods = [
                ['image' => 'fo1.png', 'title' => 'Salad Buah Segar', 'description' => 'Kombinasi buah segar dengan saus yogurt sehat.'],
                ['image' => 'fo2.png', 'title' => 'Ayam Panggang Madu', 'description' => 'Daging ayam panggang dengan bumbu madu yang lezat.'],
                ['image' => 'fo3.png', 'title' => 'Smoothie Alpukat', 'description' => 'Minuman sehat dengan alpukat dan susu almond.'],
                ['image' => 'fo4.png', 'title' => 'Pasta Pesto', 'description' => 'Pasta dengan saus pesto basil segar dan keju parmesan.'],
                ['image' => 'fo5.png', 'title' => 'Sup Krim Jagung', 'description' => 'Sup jagung creamy dengan rasa yang lembut dan gurih.'],
                ['image' => 'fo6.png', 'title' => 'Oatmeal Berry', 'description' => 'Oatmeal sehat dengan topping berry dan madu.'],
            ];
        @endphp

        @foreach($foods as $food)
            <div class="col">
                <div class="card h-100 shadow-sm bg-white">
                    <div class="row g-0">
                        <!-- Gambar Makanan -->
                        <div class="col-md-5">
                            <img src="{{ asset('images/' . $food['image']) }}" class="img-fluid rounded-start" alt="{{ $food['title'] }}">
                        </div>
                        <!-- Detail Makanan -->
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title">{{ $food['title'] }}</h5>
                                <p class="card-text">{{ $food['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    <!-- Bagian Resep -->
    <div class="resep mt-5">
    <h2 class="text-center fw-bold mb-4">Resep</h2>
        <div class="row row-cols-1 row-cols-md-4">
            @php
                $resepImages = [
                    'resep1.jpg', 'resep2.jpg', 'resep3.jpg', 'resep4.jpg',
                    'resep5.jpg', 'resep6.jpg', 'resep7.jpg', 'resep8.jpg'
                ];
            @endphp

            @foreach($resepImages as $image)
                <div class="col">
                    <div class="card border-0 rounded-3 overflow-hidden cursor-pointer">
                        <img src="{{ asset('images/' . $image) }}" class="w-100 h-100" alt="Resep">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="testimony mt-5">
    <h2 class="text-center fw-bold mb-4">Testimoni Pelanggan</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @php
            $testimonials = [
                ['image' => 'team1.jpg', 'name' => 'Andi Saputra', 'review' => 'NutriMeals Planner sangat membantu saya dalam menyusun pola makan sehat!'],
                ['image' => 'team2.jpg', 'name' => 'Rina Kartika', 'review' => 'Makanan sehat yang disarankan sangat enak dan mudah dibuat.'],
                ['image' => 'team3.jpg', 'name' => 'Budi Santoso', 'review' => 'Saya merasa lebih sehat dan bugar sejak mengikuti rencana makan ini.'],
            ];
        @endphp

        @foreach($testimonials as $testimonial)
            <div class="col">
                <div class="card h-100 shadow-sm text-center p-3">
                    <img src="{{ asset('images/' . $testimonial['image']) }}" class="rounded-circle mx-auto d-block" style="width: 80px; height: 80px; object-fit: cover;" alt="{{ $testimonial['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $testimonial['name'] }}</h5>
                        <p class="card-text">"{{ $testimonial['review'] }}"</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

</div>

<footer class="bg-success text-white text-center py-3 mt-5">
    <div class="container">
        <p class="mb-0">&copy; {{ date('Y') }} NutriMeals Planner. All Rights Reserved.</p>
        <p class="mb-0">
            <a href="{{ url('/about') }}" class="text-white text-decoration-none mx-2">Tentang Kami</a> |
            <a href="{{ url('/contact') }}" class="text-white text-decoration-none mx-2">Kontak</a> |
            <a href="{{ url('/privacy') }}" class="text-white text-decoration-none mx-2">Kebijakan Privasi</a>
        </p>
    </div>
</footer>

@endsection
