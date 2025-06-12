<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Notifications\ReminderNotification;

class KirimPengingat extends Command
{
    protected $signature = 'kirim:pengingat';
    protected $description = 'Mengirim notifikasi pengingat makan ke pengguna';

    public function handle()
{
    $users = User::all();

    foreach ($users as $user) {
    // Buat objek dummy stdClass dengan properti yang dibutuhkan
    $reminder = new \stdClass();
    $reminder->meal_type = "makan siang";
    $reminder->reminder_time = date('H:i');

    $user->notify(new ReminderNotification($reminder));
}
    $this->info('Notifikasi pengingat berhasil dikirim.');
}
}
