<?php

use App\Http\Controllers\Teams\TeamInvitationController;
use App\Http\Middleware\EnsureTeamMembership;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/', 'Landing')->name('home');
Route::inertia('/innovation', 'Innovation/Index')
    ->name('innovation');
Route::inertia('/partnerships', 'Partnerships/Index')->name('partnerships');

Route::get('/news-and-media', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/details/{id}', [NewsController::class, 'show'])->name('news.show');

Route::prefix('solutions')->name('solutions.')->group(function () {

    Route::inertia('/', 'Solutions/Index')->name('index');

    Route::inertia(
        '/ai-ml-architecture-design',
        'Solutions/Ai-Ml-Architecture-Design'
    )->name('ai-ml-architecture-design');

    Route::inertia(
        '/bagsakan-ecosystem',
        'Solutions/Bagsakan-Ecosystem'
    )->name('bagsakan-ecosystem');

    Route::inertia(
        '/biotech-ai-ml-health-ecosystem',
        'Solutions/Biotech-Ai-Ml-Health-Ecosystem'
    )->name('biotech-ai-ml-health-ecosystem');

    Route::inertia(
        '/climate-smart-digital-infrastructure',
        'Solutions/Climate-Smart-Digital-Infrastructure'
    )->name('climate-smart-digital-infrastructure');

    Route::inertia(
        '/community-empowerment',
        'Solutions/Community-Empowerment'
    )->name('community-empowerment');

    Route::inertia(
        '/digital-innovation-research-labs',
        'Solutions/Digital-Innovation-Research-Labs'
    )->name('digital-innovation-research-labs');

    Route::inertia(
        '/e-mobility',
        'Solutions/E-Mobility'
    )->name('e-mobility');

    Route::inertia(
        '/geo-monitoring',
        'Solutions/Geo-Monitoring'
    )->name('geo-monitoring');

    Route::inertia(
        '/iot-based-environmental-systems',
        'Solutions/Iot-Based-Environmental-Systems'
    )->name('iot-based-environmental-systems');

    Route::inertia(
        '/sustainability-learning',
        'Solutions/Sustainability-Learning'
    )->name('sustainability-learning');
});


Route::prefix('{current_team}')
    ->middleware([
        'auth',
        'verified',
        EnsureTeamMembership::class,
    ])
    ->group(function () {
        Route::inertia('/dashboard', 'Dashboard')
            ->name('dashboard');
    });

Route::middleware('auth')->group(function () {
    Route::get(
        '/invitations/{invitation}/accept',
        [TeamInvitationController::class, 'accept']
    )->name('invitations.accept');
});

require __DIR__ . '/settings.php';