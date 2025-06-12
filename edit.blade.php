@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Perencanaan Makanan</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.meal_plans.update', $mealPlan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="day" class="form-label">Hari</label>
            <input type="text" name="day" id="day" class="form-control" value="{{ old('day', $mealPlan->day) }}" required>
        </div>

        @for ($i = 1; $i <= 3; $i++)
            <div class="border p-3 mb-3">
                <h5>Menu {{ $i }}</h5>
                <div class="mb-3">
                    <label for="menu_{{ $i }}" class="form-label">Nama Menu</label>
                    <input type="text" name="menu_{{ $i }}" id="menu_{{ $i }}" class="form-control" value="{{ old('menu_'.$i, $mealPlan['menu_'.$i]) }}" required>
                </div>
                <div class="mb-3">
                    <label for="image_{{ $i }}" class="form-label">Gambar Menu</label>
                    <input type="file" name="image_{{ $i }}" id="image_{{ $i }}" class="form-control">
                    @if ($mealPlan['image_'.$i])
                        <p>Gambar Saat Ini:</p>
                        <img src="{{ asset('storage/'.$mealPlan['image_'.$i]) }}" alt="Menu {{ $i }}" class="img-thumbnail" width="150">
                    @endif
                </div>
                <div class="mb-3">
                    <label for="membuat_menu_{{ $i }}" class="form-label">Cara Membuat</label>
                    <textarea name="membuat_menu_{{ $i }}" id="membuat_menu_{{ $i }}" class="form-control" rows="3" required>{{ old('membuat_menu_'.$i, $mealPlan['membuat_menu_'.$i]) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="bahan_menu_{{ $i }}" class="form-label">Bahan-bahan</label>
                    <textarea name="bahan_menu_{{ $i }}" id="bahan_menu_{{ $i }}" class="form-control" rows="3" required>{{ old('bahan_menu_'.$i, $mealPlan['bahan_menu_'.$i]) }}</textarea>
                </div>
            </div>
        @endfor

        <!-- Input untuk diet type -->
        <div class="mb-3">
            <label for="diet_type" class="form-label">Tipe Diet</label>
            <select name="diet_type" id="diet_type" class="form-select" required>
                <option value="">-- Pilih Tipe Diet --</option>
                <option value="vegan" {{ old('diet_type', $mealPlan->diet_type) == 'vegan' ? 'selected' : '' }}>Vegan</option>
                <option value="gluten-free" {{ old('diet_type', $mealPlan->diet_type) == 'gluten-free' ? 'selected' : '' }}>Gluten-Free</option>
                <option value="low-carb" {{ old('diet_type', $mealPlan->diet_type) == 'low-carb' ? 'selected' : '' }}>Low-Carb</option>
                <option value="vegetarian" {{ old('diet_type', $mealPlan->diet_type) == 'vegetarian' ? 'selected' : '' }}>Vegetarian</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.meal_plans.index') }}" class="btn btn-secondary">Batal</a>
    </form>
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
