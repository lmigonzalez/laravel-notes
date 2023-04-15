<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');


Route::get('/create-note', function () {
    return Inertia::render('CreateNote');
})->name('create-note');


Route::get('/update-note/{noteId}', function ($noteId) {
    return Inertia::render('EditNote', [
        'noteId' => $noteId,
    ]);
})->name('update-note');


Route::get('/search-note', function () {
    return Inertia::render('SearchNote');
})->name('search-note');


Route::post('/notes', function (Request $request) {
    $notes = view()->shared('notes');

    $title = $request->input('note.title');
    $description = $request->input('note.description');

    $newNote = [
        'id' => count($notes) + 1,
        'title' => $title,
        'description' => $description,
        'date' => date('Y-m-d'),
    ];

    array_push($notes, $newNote);
    view()->share('notes', $notes);

    // retrieve the updated $notes array again
    $notes = view()->shared('notes');

    return redirect()->route('home', ['notes' => $notes]);
});