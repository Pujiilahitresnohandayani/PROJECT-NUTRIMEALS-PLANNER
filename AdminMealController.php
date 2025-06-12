<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MealPlan;

class AdminMealController extends Controller
{
    public function index()
    {
        $mealPlans = MealPlan::all(); // Ambil semua data dari database
        return view('admin.meal_plans.index', compact('mealPlans'));
    }
    

    public function create() {
        return view('admin.meal_plans.create');
    }

    public function store(Request $request) {
        $request->validate([
            'day' => 'required|string|max:255',
            'menu_1' => 'required|string|max:255',
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'membuat_menu_1' => 'nullable|string',
            'bahan_menu_1' => 'nullable|string',
            'menu_2' => 'nullable|string|max:255',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'membuat_menu_2' => 'nullable|string',
            'bahan_menu_2' => 'nullable|string',
            'menu_3' => 'nullable|string|max:255',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'membuat_menu_3' => 'nullable|string',
            'bahan_menu_3' => 'nullable|string',
        ]);
    
        // Simpan data tanpa gambar
        $mealPlan = MealPlan::create($request->except(['image_1', 'image_2', 'image_3']));
    
        // Simpan gambar jika ada
        if ($request->hasFile('image_1')) {
            $mealPlan->update(['image_1' => $request->file('image_1')->store('images', 'public')]);
        }
        if ($request->hasFile('image_2')) {
            $mealPlan->update(['image_2' => $request->file('image_2')->store('images', 'public')]);
        }
        if ($request->hasFile('image_3')) {
            $mealPlan->update(['image_3' => $request->file('image_3')->store('images', 'public')]);
        }
    
        return redirect()->route('admin.meal_plans.index')->with('success', 'Meal plan added successfully!');
    }

    public function edit($id)
{
    $mealPlan = MealPlan::findOrFail($id);
    return view('admin.meal_plans.edit', compact('mealPlan'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'day' => 'required|string|max:255',
        'menu_1' => 'required|string|max:255',
        'image_1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'membuat_menu_1' => 'nullable|string',
        'bahan_menu_1' => 'nullable|string',
        'menu_2' => 'nullable|string|max:255',
        'image_2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'membuat_menu_2' => 'nullable|string',
        'bahan_menu_2' => 'nullable|string',
        'menu_3' => 'nullable|string|max:255',
        'image_3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'membuat_menu_3' => 'nullable|string',
        'bahan_menu_3' => 'nullable|string',
    ]);

    $mealPlan = MealPlan::findOrFail($id);
    $mealPlan->update($request->except(['image_1', 'image_2', 'image_3']));

    if ($request->hasFile('image_1')) {
        $mealPlan->update(['image_1' => $request->file('image_1')->store('images', 'public')]);
    }
    if ($request->hasFile('image_2')) {
        $mealPlan->update(['image_2' => $request->file('image_2')->store('images', 'public')]);
    }
    if ($request->hasFile('image_3')) {
        $mealPlan->update(['image_3' => $request->file('image_3')->store('images', 'public')]);
    }

    return redirect()->route('admin.meal_plans.index')->with('success', 'Meal plan updated successfully!');
}

public function destroy($id)
{
    $mealPlan = MealPlan::findOrFail($id);

    // Hapus gambar jika ada
    if ($mealPlan->image_1) {
        \Storage::disk('public')->delete($mealPlan->image_1);
    }
    if ($mealPlan->image_2) {
        \Storage::disk('public')->delete($mealPlan->image_2);
    }
    if ($mealPlan->image_3) {
        \Storage::disk('public')->delete($mealPlan->image_3);
    }

    $mealPlan->delete();

    return redirect()->route('admin.meal_plans.index')->with('success', 'Meal plan berhasil dihapus!');
}

public function show($id)
{
    $mealPlan = MealPlan::findOrFail($id);
    return view('admin.meal_plans.show', compact('mealPlan'));
}



}
