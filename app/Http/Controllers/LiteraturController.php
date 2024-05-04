<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Literatur;
use App\Models\LiteraturKontributor;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LiteraturController extends Controller
{
    public function index()
    {
        $daftarLiteratur =  Literatur::with('user', 'kontributor.user')
            ->orderBy('updated_at', 'desc');
        if (auth()->user()->role !== "admin") {
            $daftarLiteratur->where('user_id', auth()->id());
        }
        $daftarLiteratur =  $daftarLiteratur->paginate(10);
        return view('literatur.index', compact('daftarLiteratur'));
    }

    public function show(Literatur $literatur)
    {
        return view('literatur.show', compact('literatur'));
    }

    public function create()
    {
        $users = User::where(function ($query) {
            $query->where('role', 'dosen')
                ->orWhere('role', 'mahasiswa');
        })->get();
        $daftarDosen = User::where('role', 'dosen')->get();
        $daftarFakultas = Fakultas::with('prodi')->get();
        return view('literatur.create', compact('daftarDosen', 'users', 'daftarFakultas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => ['required', 'max:255'],
            'abstrak' => ['required', 'max:255'],
            'keyword' => ['required', 'max:255'],
            'penulis' => ['required'],
            'kontributor' => ['required'],
            'jenis_koleksi' => ['required'],
            'penerbit' => ['required'],
            'file' => ['required', 'file', 'mimes:pdf'],
        ]);

        $literatur = Literatur::create([
            'judul' => $request->judul,
            'abstrak' => $request->abstrak,
            'keyword' => $request->keyword,
            'user_id' => $request->penulis,
            'jenis_koleksi' =>  $request->jenis_koleksi,
            'penerbit' => $request->penerbit,
            'file' => $request->file('file')->store('file')
        ]);

        foreach ($request->kontributor as $kontributor) {
            LiteraturKontributor::create([
                'literatur_id' => $literatur->id,
                'user_id' => $kontributor
            ]);
        }
        Alert::success("Berhasil tambah literatur");
        return redirect('/dashboard/literatur');
    }

    public function edit(Literatur $literatur)
    {
        $users = User::where(function ($query) {
            $query->where('role', 'dosen')
                ->orWhere('role', 'mahasiswa');
        })->get();
        $daftarDosen = User::where('role', 'dosen')->get();
        $daftarFakultas = Fakultas::with('prodi')->get();
        return view('literatur.edit', compact('literatur', 'users', 'daftarDosen'));
    }

    public function update(Request $request, Literatur $literatur)
    {
        $request->validate([
            'judul' => ['required', 'max:255'],
            'abstrak' => ['required', 'max:255'],
            'keyword' => ['required', 'max:255'],
            'penulis' => ['required'],
            'kontributor' => ['required'],
            'jenis_koleksi' => ['required'],
            'penerbit' => ['required'],
        ]);

        $literatur->update([
            'judul' => $request->judul,
            'abstrak' => $request->abstrak,
            'keyword' => $request->keyword,
            'user_id' => $request->penulis,
            'jenis_koleksi' =>  $request->jenis_koleksi,
            'penerbit' => $request->penerbit,

        ]);
        if ($request->file) {
            $literatur->update(['file' => $request->file('file')->store('file')]);
        }

        LiteraturKontributor::where('literatur_id', $literatur->id)->delete();
        foreach ($request->kontributor as $kontributor) {
            LiteraturKontributor::create([
                'literatur_id' => $literatur->id,
                'user_id' => $kontributor
            ]);
        }
        Alert::success("Berhasil update literatur");
        return redirect('/dashboard/literatur');
    }

    public function destroy(Literatur $literatur)
    {
        $literatur->delete();
        Alert::success("Berhasil hapus literatur");
        return back();
    }
}
