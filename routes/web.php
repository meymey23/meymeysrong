<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use Illuminate\Support\Facades\Route;
// Route::get('/listing/{id}', [ListingController::class, 'show']);
// Route::get('/listing', function () {
//     $listing = [
//         'title' => 'Cozy Villa',
//         'location' => 'Claraburgh, Tunisia',
//         'host' => 'Test User',
//         'bedrooms' => 6,
//         'bathrooms' => 2,
//         'price' => 298,
//         'description' => 'A beautiful villa with spacious rooms and modern amenities.',
//         'images' => [
//             'main' => 'main.jpg',
//             'bedroom' => 'bedroom.jpg',
//             'kitchen' => 'kitchen.jpg',
//             'bathroom' => 'bathroom.jpg',
//             'view' => 'view.jpg',
//         ]
//     ];

//     return view('listing.show', compact('listing'));
// }) -> name('listing.show');
Route::get('/', function () {
    $data = [
        'number'=>5
    ];
    return view('index', ['data'=>$data]);
}) -> name('home');
// routes/web.php
Route::get('cozyvilla', function (){
    // For now, we’ll just return a static view.
    // Later you can fetch listing data from a database.
    return view('cozyvilla');
}) -> name('cozyvilla');
Route::get('/login',function(){
      return view('login');

}) -> name('login');
Route:: get('homepage', function(){
     return view('homepage');
}) -> name('homepage');
Route:: get('signup', function(){
    return view('signup');
}) -> name('signup');
Route:: get('reserve',function(){
    return view('reserve');
})->name('reserve');