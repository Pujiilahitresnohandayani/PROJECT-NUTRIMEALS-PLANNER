@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Meal Plans</h1>
    <a href="{{ route('admin.meal_plans.create') }}" class="btn btn-primary">Add Meal Plan</a>
    <table class="table mt-3">
        <tr>
            <th>Day</th>
            <th>Menu 1</th>
            <th>Menu 2</th>
            <th>Menu 3</th>
            <th>Actions</th>
        </tr>
        @foreach($mealPlans as $mealPlan)
            <tr>
                <td>{{ $mealPlan->day }}</td>
                <td>{{ $mealPlan->menu_1 }}</td>
                <td>{{ $mealPlan->menu_2 }}</td>
                <td>{{ $mealPlan->menu_3 }}</td>
                <td>
                    <a href="{{ route('admin.meal_plans.show', $mealPlan->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('admin.meal_plans.edit', $mealPlan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.meal_plans.destroy', $mealPlan->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
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


