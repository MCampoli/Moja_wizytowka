<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WizytowkaController;
use App\Http\Controllers\ContactController;

Route::get('/', [WizytowkaController::class, 'home'])->name('home');
Route::get('/projekty', [WizytowkaController::class, 'projekty'])->name('projekty');
Route::get('/portfolio_fotografa', [WizytowkaController::class, 'portfolio_fotografa'])->name('portfolio_fotografa');
Route::get('/sklep_rekodzielo', [WizytowkaController::class, 'sklep_rekodzielo'])->name('sklep_rekodzielo');
Route::get('/o-mnie', [WizytowkaController::class, 'oMnie'])->name('o_mnie');
Route::get('/umiejetnosci', [WizytowkaController::class, 'umiejetnosci'])->name('umiejetnosci');
Route::get('/blog', [WizytowkaController::class, 'blog'])->name('blog'); // Strona bloga
Route::get('/blog-technologiczny', [WizytowkaController::class, 'blogTechnologiczny'])->name('blog_technologiczny'); // Blog o technologii
Route::get('/kontakt', [WizytowkaController::class, 'kontakt'])->name('kontakt');


Route::post('/submit_contact', [ContactController::class, 'submitContact']);
