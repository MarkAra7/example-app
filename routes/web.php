<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/submit', function (Request $request) {
    // Validate the form data

    $validated = $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Process the data as needed (e.g., save, email, etc.)
    // For demonstration, just return a simple success message

    return "Form submitted successfully. Hello, " . htmlspecialchars($validated['name']) . "!";
});


Route::get('/static-form', function () {
    return view('static_form');
});

Route::post('/submit-static-form', function (Request $request) {
    Log::debug($request->all());
    return "Form data: {$request->input('name')}  ";
});



Route::resource('posts', PostController::class);
