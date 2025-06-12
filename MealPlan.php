<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'menu_1', 'image_1', 'membuat_menu_1', 'bahan_menu_1',
        'menu_2', 'image_2', 'membuat_menu_2', 'bahan_menu_2',
        'menu_3', 'image_3', 'membuat_menu_3', 'bahan_menu_3', 'diet_type'
    ];
}
