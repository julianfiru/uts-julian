<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tugas1');
});

Route::get('/tugas1', function () {
    return view('tugas1');
});

Route::get('/tugas2', function () {
    return view('tugas2');
});

Route::get('/tugas2ori', function () {
    return view('tugas2ori');
});