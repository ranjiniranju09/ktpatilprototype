<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;

use App\Http\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');



Route::get('/about', function () {
    return view('about.vision_mission');
})->name('about');

Route::get('/Governing_members', function () {
    return view('about.governing_body');
})->name('Governing_members');

Route::get('/Undergraduate', function () {
    return view('programs.ugprogram');
})->name('ugprogram');

// Route::get('/Diploma/Polytechnic', function () {
//     return view('programs.polytechnicdiploma');
// })->name('polytechnicdiploma');

Route::get('/Postgraduate', function () {
    return view('programs.pgprogram');
})->name('pgprogram');

Route::get('/Diploma', function () {
    return view('programs.diploma');
})->name('diploma');

Route::get('/Departments', function () {
    return view('programs.allcourses');
})->name('departments');

Route::get('/Department', function () {
    return view('departments.departments');
})->name('department');

Route::get('/Computer_Science', function () {
    return view('departments.computer');
})->name('computer');

Route::get('/Electrical_Electronics_Engineering', function () {
    return view('departments.electricalandelectronics');
})->name('eee');

Route::get('/Electronics_and_Telecommunication_Engineering ', function () {
    return view('departments.ece');
})->name('electronics');

Route::get('/Civil_Engineering', function () {
    return view('departments.civil');
})->name('civil');

Route::get('/Mechanical_Engineering', function () {
    return view('departments.mechanical');
})->name('mechanical');

Route::get('/courses', function () {
    return view('programs.allcourses');
})->name('courses');

Route::get('/comittee', function () {
    return view('others.committee');
})->name('comittee');

Route::get('/Leadership', function () {
    return view('about.leadership');
})->name('leadership');

Route::get('/Gallery', function () {
    return view('others.gallary');
})->name('gallary');

Route::get('/Notice', function () {
    return view('others.notice');
})->name('notice');

Route::get('/Admission', function () {
    return view('others.admission');
})->name('admission');

Route::get('/Placements', function () {
    return view('others.placement_alumni');
})->name('placements');

Route::get('/certificate', function () {
    return view('others.certificates');
})->name('certificate');

Route::get('/Contacts', function () {
    return view('others.contact');
})->name('contacts');

Route::get('/test', function () {
    return view('others.test');
})->name('test');

// Route::post('/contact', [App\Http\Controllers\Controller::class, 'submit'])->name('contact.submit');

Route::post('/contactshow', [ContactController::class, 'submit'])->name('contact.show');


Route::post('/showcontact', function (Request $request) {
    $validated = $request->validate([
        'name'     => 'required|string|max:100',
        'email'    => 'required|email|max:150',
        'phone'    => 'required|digits:10',
        'city'     => 'required|string',
        'program'  => 'required|string',
        'state'    => 'required|string',
    ]);

    return view('others.showcontact', compact('validated'));
})->name('contact.show');