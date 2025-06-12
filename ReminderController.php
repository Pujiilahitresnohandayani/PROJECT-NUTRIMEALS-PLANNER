<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reminder;

class ReminderController extends Controller
{
   public function index()
{
    $reminders = Reminder::where('user_id', auth()->id())->get();
    return view('pengingat.index', compact('reminders'));
}

public function create()
{
    return view('pengingat.create');
}

public function store(Request $request)
{
    Reminder::create([
        'user_id' => auth()->id(),
        'meal_type' => $request->meal_type,
        'reminder_time' => $request->reminder_time,
        'active' => $request->has('active')
    ]);
    return redirect()->route('pengingat.index');
}

public function edit(Reminder $pengingat)
{
    return view('pengingat.edit', ['reminder' => $pengingat]);
}

public function update(Request $request, Reminder $pengingat)
{
    $pengingat->update([
        'meal_type' => $request->meal_type,
        'reminder_time' => $request->reminder_time,
        'active' => $request->has('active')
    ]);
    return redirect()->route('pengingat.index');
}

public function destroy(Reminder $pengingat)
{
    $pengingat->delete();
    return back();
}
}
