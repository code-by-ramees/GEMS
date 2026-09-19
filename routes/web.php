<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GalleryController;
use App\Models\Gallery;



Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/training', [PageController::class, 'training'])->name('training');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/career', [PageController::class, 'career'])->name('career');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy');
Route::post('/contact', [PageController::class, 'storeContact'])->name('contact.store');

// SEO Sitemap
Route::get('/sitemap.xml', function () {
    $urls = [
        ['loc' => url('/'), 'lastmod' => now()->toDateString(), 'changefreq' => 'weekly', 'priority' => '1.0'],
        ['loc' => url('/services'), 'lastmod' => now()->toDateString(), 'changefreq' => 'weekly', 'priority' => '0.9'],
        ['loc' => url('/about'), 'lastmod' => now()->toDateString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => url('/contact'), 'lastmod' => now()->toDateString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => url('/training'), 'lastmod' => now()->toDateString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => url('/blog'), 'lastmod' => now()->toDateString(), 'changefreq' => 'weekly', 'priority' => '0.8'],
        ['loc' => url('/team'), 'lastmod' => now()->toDateString(), 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['loc' => url('/gallery'), 'lastmod' => now()->toDateString(), 'changefreq' => 'weekly', 'priority' => '0.7'],
        ['loc' => url('/career'), 'lastmod' => now()->toDateString(), 'changefreq' => 'monthly', 'priority' => '0.6'],
        ['loc' => url('/terms'), 'lastmod' => now()->toDateString(), 'changefreq' => 'yearly', 'priority' => '0.5'],
        ['loc' => url('/privacy-policy'), 'lastmod' => now()->toDateString(), 'changefreq' => 'yearly', 'priority' => '0.5'],
        ];

    return response()->view('sitemap', compact('urls'))
        ->header('Content-Type', 'text/xml');
})->name('sitemap');

// SEO Robots.txt
Route::get('/robots.txt', function () {
    $robots = "User-agent: *\n"
        . "Allow: /\n"
        . "Disallow: /admin/\n"
        . "Disallow: /login\n\n"
        . "Sitemap: " . url('/sitemap.xml') . "\n";

    return response($robots, 200)
        ->header('Content-Type', 'text/plain');
})->name('robots');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/contacts', [\App\Http\Controllers\Admin\AdminContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contact}', [\App\Http\Controllers\Admin\AdminContactController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{contact}', [\App\Http\Controllers\Admin\AdminContactController::class, 'destroy'])->name('contacts.destroy');
});
// ADMIN
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('gallery', GalleryController::class)->except(['show']);
});
