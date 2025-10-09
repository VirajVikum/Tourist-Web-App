<?php

use App\Livewire\Home\DiscoverCountry;
use App\Livewire\Home\Index as HomeIndex;
use App\Livewire\Places\Index as PlaceIndex;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
Route::get('/', HomeIndex::class)->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

Route::get('/discover', DiscoverCountry::class)->name('discover.show');
Route::get('/discover/{topic}', DiscoverCountry::class)->name('discover.show');
Route::get('/place/{slug}', PlaceIndex::class)->name('place.details');

require __DIR__.'/auth.php';
