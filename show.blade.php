@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Meal Plan</h2>
    <a href="{{ route('admin.meal_plans.index') }}" class="btn btn-secondary mb-3">Back</a>

    <table class="table">
        <tr>
            <th>Hari</th>
            <td>{{ $mealPlan->day }}</td>
        </tr>
        <tr>
            <th>Menu </th>
            <td>{{ $mealPlan->menu_1 }}</td>
        </tr>
        <tr>
            <th>Gambar Menu </th>
            <td>
                @if($mealPlan->image_1)
                    <img src="{{ asset('storage/' . $mealPlan->image_1) }}" width="150">
                @else
                    <p>No image</p>
                @endif
            </td>
        </tr>
        <tr>
            <th>Cara Membuat </th>
            <td>{{ $mealPlan->membuat_menu_1 }}</td>
        </tr>
        <tr>
            <th>Bahan Bahan</th>
            <td>{{ $mealPlan->bahan_menu_1 }}</td>
        </tr>
        <tr>
            <th>Menu </th>
            <td>{{ $mealPlan->menu_2 }}</td>
        </tr>
        <tr>
            <th>Gambar Menu</th>
            <td>
                @if($mealPlan->image_2)
                    <img src="{{ asset('storage/' . $mealPlan->image_2) }}" width="150">
                @else
                    <p>No image</p>
                @endif
            </td>
        </tr>
        <tr>
            <th>Cara Membuat</th>
            <td>{{ $mealPlan->membuat_menu_2 }}</td>
        </tr>
        <tr>
            <th>Bahan Bahan</th>
            <td>{{ $mealPlan->bahan_menu_2 }}</td>
        </tr>
        <tr>
            <th>Menu</th>
            <td>{{ $mealPlan->menu_3 }}</td>
        </tr>
        <tr>
            <th>Gambar Menu</th>
            <td>
                @if($mealPlan->image_3)
                    <img src="{{ asset('storage/' . $mealPlan->image_3) }}" width="150">
                @else
                    <p>No image</p>
                @endif
            </td>
        </tr>
        <tr>
            <th>Cara Membuat</th>
            <td>{{ $mealPlan->membuat_menu_3 }}</td>
        </tr>
        <tr>
            <th>Bahan Bahan</th>
            <td>{{ $mealPlan->bahan_menu_3 }}</td>
        </tr>
        <tr>
            <th>Diet Type</th>
            <td>{{ $mealPlan->diet_type }}</td>
        </tr>
    </table>
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
