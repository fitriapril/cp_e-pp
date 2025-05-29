<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\User;
use Alert;

class KelasController extends Controller
{
    public function __construct()
    {
        $this->middleware([
            'auth',
            'privilege:admin'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'kelas' => Kelas::orderBy('id', 'DESC')->paginate(10),
            'user' => User::find(auth()->user()->id),
        ];

        return view('dashboard.data-kelas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong!',
            'unique' => ':attribute sudah digunakan!'
        ];

        $validasi = $request->validate([
            'kelas' => 'required',
            'keahlian' => 'required',
        ], $messages);

        if ($validasi) {
            $create = Kelas::create([
                'nama_kelas' => $request->kelas,
                'kompetensi_keahlian' => $request->keahlian,
                'jml_siswa' => $request->jml_siswa ?? 0 // Nilai default 0 jika tidak diisi
            ]);

            if ($create) {
                Alert::success('Berhasil!', 'Data Berhasil Ditambahkan');
            } else {
                Alert::error('Gagal!', 'Data Gagal Ditambahkan');
            }
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'edit' => Kelas::find($id),
            'user' => User::find(auth()->user()->id),
        ];

        return view('dashboard.data-kelas.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        if ($update = Kelas::find($id)) {
            $stat = $update->update([
                'nama_kelas' => $req->kelas,
                'kompetensi_keahlian' => $req->keahlian,
                'jml_siswa' => $req->jml_siswa ?? $update->jml_siswa // Pertahankan nilai lama jika tidak diubah
            ]);

            if ($stat) {
                Alert::success('Berhasil!', 'Data Berhasil di Edit!');
            } else {
                Alert::error('Terjadi Kesalahan!', 'Data Gagal di Edit!');
                return back();
            }
        }

        return redirect('dashboard/data-kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Kelas::find($id)->delete()) {
            Alert::success('Berhasil!', 'Data Berhasil Dihapus');
        } else {
            Alert::error('Terjadi Kesalahan!', 'Data Gagal Dihapus');
        }

        return back();
    }
}