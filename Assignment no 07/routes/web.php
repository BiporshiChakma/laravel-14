<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonResponse;

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    

    $response = [
        'success' => true,
        'message' => 'Form submitted successfully.'
    ];

    return new JsonResponse($response);
});
