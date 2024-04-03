<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function () {
    //\Artisan::call('key:generate');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('about-us', function () {
    return view('about');
})->name('about');

Route::get('video-gallery', function () {
    return view('video');
})->name('video');

Route::get('hair-treatment', function () {
    return view('hair-treatment');
})->name('hair-treatment');

Route::get('skin-treatment', function () {
    return view('skin-treatment');
})->name('skin-treatment');

Route::get('laser-treatment', function () {
    return view('laser-treatment');
})->name('laser-treatment');

Route::get('hair-loss-in-women', function () {
    return view('hair-loss-in-women');
})->name('hair-loss-in-women');

Route::get('hair-loss-in-men', function () {
    return view('hair-loss-in-men');
})->name('hair-loss-in-men');

Route::get('dandruff', function () {
    return view('dandruff');
})->name('dandruff');

Route::get('alopecia-areata', function () {
    return view('alopecia-areata');
})->name('alopecia-areata');

Route::get('laser-pigmentation', function () {
    return view('laser-pigmentation');
})->name('laser-pigmentation');

Route::get('hair-removal', function () {
    return view('hair-removal');
})->name('hair-removal');

Route::get('fractional-laser-co2-mnrf', function () {
    return view('fractional-laser-co2-mnrf');
})->name('fractional-laser-co2-mnrf');

Route::get('skin-tightening-laser', function () {
    return view('skin-tightening-laser');
})->name('skin-tightening-laser');

Route::get('acne-acne-marks-scars', function () {
    return view('acne-acne-marks-scars');
})->name('acne-acne-marks-scars');

Route::get('black-patches-facial-melanosis', function () {
    return view('black-patches-facial-melanosis');
})->name('black-patches-facial-melanosis');

Route::get('vitiligo', function () {
    return view('vitiligo');
})->name('vitiligo');

Route::get('chemical-peels', function () {
    return view('chemical-peels');
})->name('chemical-peels');

Route::get('facials', function () {
    return view('facials');
})->name('facials');

Route::get('microdermabrasion-skin-polishing', function () {
    return view('microdermabrasion-skin-polishing');
})->name('microdermabrasion-skin-polishing');

Route::get('nails', function () {
    return view('nails');
})->name('nails');

Route::get('anti-ageing', function () {
    return view('anti-ageing');
})->name('anti-ageing');

Route::get('appointment', function () {
    return view('appointment');
})->name('appointment');

Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');
