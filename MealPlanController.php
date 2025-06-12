<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MealPlan;

class MealPlanController extends Controller
{
    public function index()
    {
        $mealPlans = MealPlan::all(); // Ambil semua data dari database
        return view('perencanaan.index', compact('mealPlans'));
    }

    
}
