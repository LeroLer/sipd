<?php
namespace App\Http\Controllers;

use App\Models\DataMasuk;
use Illuminate\Http\Request;

class DataMasukController extends Controller
{
    // Menampilkan daftar permohonan baru (index)
    public function index()
    {
        $data = DataMasuk::all();
        return view('permohonanbaru.index', compact('data'));
    }

    // Menampilkan form untuk membuat permohonan baru (create)
    public function create()
    {
        return view('permohonanbaru.create');
    }

    // Menyimpan data permohonan baru (store)
    public function store(Request $request)
{
    $request->validate([
        'perusahaan' => 'required|string',
        'nama' => 'required|string',
        'email' => 'required|email',
        'telepon' => 'required|string',
        'identitas' => 'required|string',
        'jenis_info' => 'required|string',
        'tujuan_info' => 'required|string',
        'data' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Menyesuaikan tipe file yang diperbolehkan
        'jam_masuk' => 'required|date',
        'jam_keluar' => 'required|date|after_or_equal:jam_masuk', // Menambahkan validasi agar jam_keluar setelah jam_masuk
    ]);

    $data = new DataMasuk();
    $data->perusahaan = $request->perusahaan;
    $data->nama = $request->nama;
    $data->email = $request->email;
    $data->telepon = $request->telepon;
    $data->identitas = $request->identitas;
    $data->jenis_info = $request->jenis_info;
    $data->tujuan_info = $request->tujuan_info;
    $data->data = $request->file('data')->store('public/data'); // Simpan file
    $data->jam_masuk = $request->jam_masuk;
    $data->jam_keluar = $request->jam_keluar;

    $data->save();

    return redirect()->route('permohonanbaru.index')->with('success', 'Permohonan berhasil dibuat.');
}


    // Menampilkan detail permohonan (show)
    public function show($id)
{
    $data = DataMasuk::findOrFail($id);
    return view('permohonanbaru.detail', compact('data'));
}

public function edit($id)
{
    $data = DataMasuk::findOrFail($id);
    return view('permohonanbaru.edit', compact('data'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'perusahaan' => 'required|string|max:255',
        'nama' => 'required|string|max:255',
        'email' => 'required|email',
        'telepon' => 'required|string|max:20',
        'identitas' => 'required|string|max:255',
        'jenis_info' => 'required|string|max:255',
        'tujuan_info' => 'required|string|max:255',
        'jam_masuk' => 'required|date',
        'jam_keluar' => 'required|date|after_or_equal:jam_masuk',
    ]);

    $data = DataMasuk::findOrFail($id);

    $data->update([
        'perusahaan' => $request->perusahaan,
        'nama' => $request->nama,
        'email' => $request->email,
        'telepon' => $request->telepon,
        'identitas' => $request->identitas,
        'jenis_info' => $request->jenis_info,
        'tujuan_info' => $request->tujuan_info,
        'data' => $request->hasFile('data') ? $request->file('data')->store('public/data') : $data->data,
        'jam_masuk' => $request->jam_masuk,
        'jam_keluar' => $request->jam_keluar,
    ]);

    return redirect()->route('permohonanbaru.index')->with('success', 'Permohonan berhasil diperbarui.');
}


    // Menghapus permohonan (destroy)
    public function destroy($id)
    {
        $data = DataMasuk::findOrFail($id);
        $data->delete();

        return redirect()->route('permohonanbaru.index')
                         ->with('success', 'Data permohonan berhasil dihapus.');
    }
}

?>