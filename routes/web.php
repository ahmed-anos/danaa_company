<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/services', function () {
    return view('pages.service');
});

Route::get('/projects', function () {
    return view('pages.project');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/testimonials', function () {
    return view('pages.testimonial');
});

Route::get('/404', function () {
    return view('pages.404');
});

Route::view('services/profile', 'services.personal_profile');
Route::view('services/ecommerce', 'services.e-commerce');
Route::view('services/business_management', 'services.bussiness_mange');
Route::view('services/education', 'services.education');
Route::view('services/sports', 'services.sports');
Route::view('services/resturant', 'services.resturant');
Route::view('services/inventory', 'services.inventory');
Route::view('services/booking', 'services.booking');


Route::view('projects/profile', 'projects/profile');
Route::view('projects/e-commerce1', 'projects/e-commerce1');


Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');