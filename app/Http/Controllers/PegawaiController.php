<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Departemen;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public $pegawai;
    public function __construct()
    {
        $this->pegawai = new Pegawai();
    }

    public function index()
    {
        //menampilkan data dari table pegawai
        //menggunakan sintaks eloquent
        // $data = DB::table('pegawai')->paginate(5);
        // $no = 5 * ($data->currentPage() - 1);
        $data = Pegawai::all();
        return view('pegawai.index',  compact('data'));
    }

    public function create()
    {
        //redirect ke form tambah
        // mengambil seluruh data dari tabel kategori
        $departemen = Departemen::all();
        return view('pegawai.create', compact('departemen'));
    }

    public function store(Request $request)
    {
        $rules = [
            'foto' => 'required|max:250|mimes:jpg,jpeg,png',
        ];
        $messages = [
            'required' => ':attribute gak boleh kosong masseeh',
            'max' => ':attribute ukuran/jumlah tidak sesuai',
            'mimes' => 'format file yg dinput harus berupa : jpg,png dan jpeg'
        ];
        $this->validate($request, $rules, $messages);
        // dd($request->all());
        $gambar = $request->foto;
        // rename nama gambar
        // getClientOriginalExtension = untuk mendapatkan ekstensi file
        // echo time()
        // echo rand(100, 900)
        // $gambar->getClientOriginalExtension();
        // $gambar->getClientOriginalName();
        $namaFile = time() .  rand(100, 900) . "." . $gambar->getClientOriginalExtension();
        // Upload foto ke folder yang di tentukan /public/img
        // echo $namaFile
        $this->pegawai->foto = $namaFile;
        $this->pegawai->nama_peserta = $request->nama;
        $this->pegawai->gender = $request->gender;
        $this->pegawai->tgl_lahir = $request->tgl;
        $this->pegawai->alamat = $request->alamat;
        $this->pegawai->no_telepon = $request->no_telepon;
        $this->pegawai->pelatihan_it = $request->pelatihan_it;
        $this->pegawai->departement_id = $request->dp;

        // memindahkan gambar ke dalam folder publik
        $gambar->move('upload', $namaFile);
        $this->pegawai->save();
        return redirect()->route('pegawai.index');
    }

    public function show(pegawai $pegawai)
    {
        return view('pegawai.show', compact('pegawai'));
    }

    public function edit(Pegawai $pegawai)
    {
        $departemen = Departemen::all();
        return view('pegawai.edit', compact('pegawai', 'departemen'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $rules = [
            'foto' => 'nullable|max:250|mimes:jpg,jpeg,png',
        ];
        $messages = [
            'max' => ':attribute ukuran/jumlah tidak sesuai',
            'mimes' => 'format file yang diinput harus berupa: jpg, png, dan jpeg'
        ];
        $this->validate($request, $rules, $messages);

        if ($request->hasFile('foto')) {
            $gambar = $request->file('foto');
            $namaFile = time() . rand(100, 900) . "." . $gambar->getClientOriginalExtension();
            $gambar->move('upload', $namaFile);
            $pegawai->foto = $namaFile;
        }

        $pegawai->nama_peserta = $request->input('nama');
        $pegawai->gender = $request->input('gender');
        $pegawai->tgl_lahir = $request->input('tgl');
        $pegawai->alamat = $request->input('alamat');
        $pegawai->no_telepon = $request->input('no_telepon');
        $pegawai->pelatihan_it = $request->input('pelatihan_it');
        $pegawai->departement_id = $request->input('dp');

        $pegawai->save();

        return redirect()->route('pegawai.index');
    }


    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil dihapus');
    }


    public function history()
    {
    }
}
