<?php

use App\Livewire\Pages\Beranda;
use App\Livewire\Pages\JadwalIbadah;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Info;

Route::get('/', Beranda::class);
Route::get('jadwal-ibadah', JadwalIbadah::class);
Route::get('info', Info::class);
