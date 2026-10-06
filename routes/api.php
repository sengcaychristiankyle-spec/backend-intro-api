<?php
use Illuminate\Support\Facades\Route;

Route::get('/student', function () {
    return response()->json([
        'id' => 1,
        'name' => 'Juan Dela Cruz',
        'course' => 'BSIT',
        'year_level' => 3,
        'section' => 'F',
    ]);
});

Route::get('/students', function () {
    return response()->json([
        ['id' => 1, 'name' => 'Juan Dela Cruz', 'course' => 'BSIT', 'year_level' => 3],
        ['id' => 2, 'name' => 'Maria Santos', 'course' => 'BSCS', 'year_level' => 2],
        ['id' => 3, 'name' => 'Pedro Reyes', 'course' => 'BSIT', 'year_level' => 4],
    ]);
});

Route::get('/courses', function () {
    return response()->json([
        ['id' => 1, 'code' => 'BSIT', 'name' => 'BS Information Technology'],
        ['id' => 2, 'code' => 'BSCS', 'name' => 'BS Computer Science'],
        ['id' => 3, 'code' => 'BSIS', 'name' => 'BS Information Systems'],
    ]);
});

Route::get('/sections', function () {
    return response()->json([
        ['id' => 1, 'name' => 'Section F', 'year_level' => 3],
        ['id' => 2, 'name' => 'Section A', 'year_level' => 2],
        ['id' => 3, 'name' => 'Section B', 'year_level' => 4],
    ]);
});

Route::get('/profile', function () {
    return response()->json([
        'id' => 1,
        'name' => 'Juan Dela Cruz',
        'course' => 'BSIT',
        'section' => 'F',
    ]);
});