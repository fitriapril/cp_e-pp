<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Siswa;
use App\Kelas;
use App\Spp;
use App\Pembayaran;
use Alert;

class SiswaController extends Controller
{
    public function __construct(){
         $this->middleware([
            'auth',
            'privilege:admin'
         ]);
    }
   
    public function index()
    {
        $data = [
            'user' => User::find(auth()->user()->id),
            'siswa' => Siswa::orderBy('id', 'DESC')->paginate(10),
        ];
      
        return view('dashboard.data-siswa.index', $data);
    }

    public function create()
    {
        $data = [
            'user' => User::find(auth()->user()->id),
            'kelas' => Kelas::all(),
            'spp' => Spp::all(),
        ];
      
        return view('dashboard.data-siswa.create', $data);
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong!',
            'numeric' => ':attribute harus berupa angka!',
            'unique' => ':attribute sudah digunakan!',
            'integer' => ':attribute harus berupa bilangan bulat!'
        ];
         
        $validasi = $request->validate([
            'nisn' => 'required|numeric|unique:siswa,nisn', 
            'nis' => 'required|numeric|unique:siswa,nis',   
            'nama' => 'required',
            'kelas' => 'required|integer',
            'nomor_telepon' => 'required|numeric',
            'alamat' => 'required',
            'spp' => 'required|integer',
        ], $messages);
        
        if($validasi) {
            $store = Siswa::create([
                'nisn' => $request->nisn,
                'nis' => $request->nis,
                'nama' => $request->nama,
                'id_kelas' => $request->kelas,
                'nomor_telp' => $request->nomor_telepon,
                'alamat' => $request->alamat,
                'id_spp' => $request->spp
            ]);
            
            if($store) {
                Alert::success('Berhasil!', 'Data Berhasil di Tambahkan');
            } else {
                Alert::error('Terjadi Kesalahan!', 'Data Gagal di Tambahkan');
            }
        }
      
        return redirect('dashboard/data-siswa');
    }

    public function edit($id)
    {
        $data = [
            'user' => User::find(auth()->user()->id),
            'siswa' => Siswa::find($id),
            'kelas' => Kelas::all(),
            'spp' => Spp::all(),
        ];
      
        return view('dashboard.data-siswa.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => ':attribute tidak boleh kosong!',
            'numeric' => ':attribute harus berupa angka!',
            'unique' => ':attribute sudah digunakan!',
            'integer' => ':attribute harus berupa bilangan bulat!'
        ];
         
        $validasi = $request->validate([
            'nisn' => 'required|numeric|unique:siswa,nisn,'.$id, 
            'nis' => 'required|numeric|unique:siswa,nis,'.$id,   
            'nama' => 'required',
            'kelas' => 'required|integer',
            'nomor_telepon' => 'required|numeric',
            'alamat' => 'required',
            'spp' => 'required|integer',
        ], $messages);
        
        if($validasi) {            
            $update = Siswa::find($id)->update([
                'nisn' => $request->nisn,
                'nis' => $request->nis,
                'nama' => $request->nama,
                'id_kelas' => $request->kelas,
                'nomor_telp' => $request->nomor_telepon,
                'alamat' => $request->alamat,
                'id_spp' => $request->spp
            ]);
            
            if($update) {
                Alert::success('Berhasil!', 'Data Berhasil di Edit');
            } else {
                Alert::error('Terjadi Kesalahan!', 'Data Gagal di Edit');
            }
        }
      
        return redirect('dashboard/data-siswa');
    }

    public function destroy($id)
    {
        if(Siswa::find($id)->delete()) {
            Alert::success('Berhasil!', 'Data Berhasil di Hapus');
        } else {
            Alert::error('Terjasi Kesalahan!', 'Data Gagal di Hapus');
        }
      
        return back();
    }
}