<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class DepartemenController extends Controller
{
    public $departemen;
    public function __construct()
    {
        $this->departemen = new Departemen();
    }

    public function index()
    {
        //menampilkan data dari table buku
        //menggunakan sintaks eloquent
        // $data = DB::table('buku')->paginate(5);
        // $no = 5 * ($data->currentPage() - 1);
        $data = Departemen::all();
        return view('departemen.index',  compact('data'));
    }

    public function create()
    {
        //redirect ke form tambah
        return view('departemen.create');
    }

    public function store(Request $request)
    {
        $nama_departemen = $request->nama_departemen;
        $alamat = $request->alamat;

        // Cek apakah data sudah ada
        // $departemen = departemen$departemen::where('departemen$departemen', $nama_departemen$departemen)->first();
        // if ($departemen) {
        //     Alert::warning('Data Sudah Ada!', 'Silahkan ganti dengan data yang belum ada ');
        //     return redirect()->route('departemen$departemen.create');
        // }

        // Validasi inputan user
        $rules = [
            'nama_departemen' => 'required|min:3|max:100',
            'alamat' => 'required|min:3|max:255',
        ];
        $messages = [
            'required' => ':attribute gak boleh kosong masseeh',
            'min' => ':attribute minimal harus 3 huruf',
            'max' => ':attribute maximal 100 huruf',
        ];
        $this->validate($request, $rules, $messages);

        // Pasangkan ke field tabelnya dengan kiriman user
        $this->departemen->nama_lembaga = $nama_departemen;
        $this->departemen->alamat = $alamat;

        // Simpan ke database
        $this->departemen->save();

        Alert::success('Sukses!', 'Data Berhasil Disimpan');

        // Redirect
        return redirect()->route('departemen.index');
    }

    public function show(string $id)
    {
        //ngeliat data
        $departemen = Departemen::findOrFail($id);

        //buat ngecek data ke kirim atau tidak !
        //  dd($departemen);

        return view('departemen.show', compact('departemen'));
    }

    public function edit(Request $request, $id)
    {
        //ambil data departemen$departemen dari database
        $departemen = Departemen::findOrFail($id);

        //redirect
        return view('departemen.edit', compact('departemen'));
    }


    public function update(Request $request, string $id)
    {
        // Get the data to be updated
        $update = Departemen::findOrFail($id);
        // cek ada perubahan atau  tidak?
        // isDirty() buat ngeCek field 
        $update->nama_lembaga = $request->nama_departemen;
        $update->alamat = $request->alamat;
        if ($update->isDirty()) {
            $rules = [
                // format penulisan untuk field yang unik = unique:nama_table,field_table
                'nama_departemen' => 'required|min:3|max:100',
                'alamat' => 'required|min:3|max:255',
            ];

            // Pesan error validasi
            $messages = [
                'required' => ':attribute tidak boleh kosong',
                'min' => ':attribute minimal harus 3 karakter',
                'max' => ':attribute maksimal harus 100 karakter',
            ];

            $this->validate($request, $rules, $messages);

            $update->nama_lembaga = $request->nama_departemen;
            $update->alamat = $request->alamat;

            $update->save();

            Alert::success('Success!', 'Data berhasil diupdate');
            return redirect()->route('departemen.index');
        } else {
            // Show info alert if the updated data is the same as the previous data
            Alert::info('Info!', 'Tidak ada perubahan data');
            return redirect()->route('departemen.index');
        }

        // Redirect to the 'departemen$departemen' route
        // return redirect()->route('departemen$departemen');
    }

    public function destroy(string $id)
    {
        //ngaaaaapus data
        // ngambil data sesuai dengan idnya
        $hapus = Departemen::findOrFail($id);
        // fungsi buat ngapus data
        $hapus->delete();

        Alert::success('Successfull..!', 'Data Berhasil Di Hapus');
        // redirect halaman
        return redirect()->route('departemen.index');
    }

    public function history()
    {
    }
}
