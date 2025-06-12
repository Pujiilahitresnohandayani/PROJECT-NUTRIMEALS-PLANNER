<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MealPlan;

class PerencanaanMakananController extends Controller
{
    public function index(Request $request)
{
    $dietType = $request->input('diet_type');

    $mealPlans = MealPlan::when($dietType, function ($query) use ($dietType) {
        return $query->where('diet_type', $dietType);
    })->get();

    return view('perencanaan.index', compact('mealPlans'));
}

    public function show($id)
    {
        $meal = MealPlan::findOrFail($id);
        return view('perencanaan.show', compact('meal'));
    }
}
