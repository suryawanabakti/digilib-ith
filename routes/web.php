<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LiteraturController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SubjectController;
use App\Models\Literatur;
use App\Models\User;
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
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    if (Auth::attempt(['nim_nip' => $request->username, 'password' => $request->password])) {
        // The user is being remembered...
        if (auth()->user()->role == 'admin') {
            return redirect()->intended('/admin/dashboard');
        }

        if (auth()->user()->role == 'mahasiswa') {
            return redirect()->intended('/mahasiswa/dashboard');
        }
    } else {
        return "Password salah";
    }
});

Route::get('/dashboard', function () {
    if (auth()->user()->role == 'admin') {
        return redirect('/admin/dashboard');
    }

    return redirect('/mahasiswa/dashboard');
});

Route::get('/admin/dashboard', function () {
    $literatur = Literatur::count();
    $mahasiswa = User::where('role', 'mahasiswa')->count();
    $dosen = User::where('role', 'dosen')->count();
    return view('admin.dashboard', compact('literatur', 'mahasiswa', 'dosen'));
});

Route::get('/mahasiswa/dashboard', function () {
    return view('mahasiswa.dashboard');
});
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard/literatur', [LiteraturController::class, 'index']);
    Route::get('/dashboard/literatur/create', [LiteraturController::class, 'create']);
    Route::get('/dashboard/literatur/{literatur}', [LiteraturController::class, 'show']);
    Route::get('/dashboard/literatur/{literatur}/edit', [LiteraturController::class, 'edit']);
    Route::put('/dashboard/literatur/{literatur}', [LiteraturController::class, 'update']);
    Route::post('/dashboard/literatur', [LiteraturController::class, 'store']);
    Route::delete('/dashboard/literatur/{literatur}', [LiteraturController::class, 'destroy']);

    Route::get('/master-data/jenis', [JenisController::class, 'index']);
    Route::get('/master-data/jenis/create', [JenisController::class, 'create']);
    Route::post('/master-data/jenis', [JenisController::class, 'store']);
    Route::get('/master-data/jenis/{jenis}/show', [JenisController::class, 'show']);
    Route::get('/master-data/jenis/{jenis}/edit', [JenisController::class, 'edit']);
    Route::put('/master-data/jenis/{jenis}/update', [JenisController::class, 'update']);
    Route::delete('/master-data/jenis/{jenis}', [JenisController::class, 'destroy']);


    Route::get('/master-data/subject', [SubjectController::class, 'index']);
    Route::get('/master-data/subject/create', [SubjectController::class, 'create']);
    Route::post('/master-data/subject', [SubjectController::class, 'store']);
    Route::get('/master-data/subject/{subject}/show', [SubjectController::class, 'show']);
    Route::get('/master-data/subject/{subject}/edit', [SubjectController::class, 'edit']);
    Route::put('/master-data/subject/{subject}/update', [SubjectController::class, 'update']);
    Route::delete('/master-data/subject/{subject}', [SubjectController::class, 'destroy']);

    Route::get('/master-data/mahasiswa', [MahasiswaController::class, 'index']);
    Route::get('/master-data/mahasiswa/create', [MahasiswaController::class, 'create']);
    Route::post('/master-data/mahasiswa', [MahasiswaController::class, 'store']);
    Route::get('/master-data/mahasiswa/{mahasiswa}/show', [MahasiswaController::class, 'show']);
    Route::get('/master-data/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit']);
    Route::put('/master-data/mahasiswa/{mahasiswa}/update', [MahasiswaController::class, 'update']);
    Route::delete('/master-data/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy']);

    Route::get('/master-data/dosen', [DosenController::class, 'index']);
    Route::get('/master-data/dosen/create', [DosenController::class, 'create']);
    Route::post('/master-data/dosen', [DosenController::class, 'store']);
    Route::get('/master-data/dosen/{dosen}/show', [DosenController::class, 'show']);
    Route::get('/master-data/dosen/{dosen}/edit', [DosenController::class, 'edit']);
    Route::put('/master-data/dosen/{dosen}/update', [DosenController::class, 'update']);
    Route::delete('/master-data/dosen/{dosen}', [DosenController::class, 'destroy']);
});

Route::get('/my-literatur', function () {
    $literatur =  Literatur::with('user', 'kontributor.user')->where('user_id', auth()->id())->get();
    return  $literatur;
});

Route::get('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();
    return redirect('/login');
});
