<?php

use App\Models\Literatur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $daftarLiteratur =  Literatur::with('user', 'kontributor.user')->get();
    return view('welcome', compact('daftarLiteratur'));
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/fakultas', function () {
    return view('fakultas');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/literatur/{literatur}', function (Literatur $literatur) {
    $literatur->increment('view');
    return view('literatur-detail', compact('literatur'));
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    if (Auth::attempt(['nim_nip' => $request->username, 'password' => $request->password])) {
        // The user is being remembered...
        return Auth::user();
    }
});

Route::get('/literatur', function () {
    $daftarLiteratur =  Literatur::with('user', 'kontributor.user')->get();
    return  $daftarLiteratur;
});

Route::get('/my-literatur', function () {
    $literatur =  Literatur::with('user', 'kontributor.user')->where('user_id', auth()->id())->get();
    return  $literatur;
});
