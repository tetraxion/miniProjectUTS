<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Barang List';

        // ELOQUENT
        $barangs = Barang::all();
        return view('barangs.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barangs
        ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Barang';

         // ELOQUENT
        $satuans = Satuan::all();
        return view('barangs.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Mendefinisikan pesan kesalahan untuk validasi input
        $messages = [
            'required' => ':attribute harus diisi.',
            'unique' => ':attribute sudah digunakan.',
            'numeric' => 'Isi :attribute dengan angka.'
        ];

        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:barangs,kode_barang',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan_id' => 'required|exists:satuans,id',
        ], $messages);

        // Jika terdapat kesalahan validasi, kembalikan kembali ke halaman sebelumnya dengan pesan kesalahan dan input yang diisi sebelumnya
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


           // ELOQUENT
           $barang = New Barang;
           $barang->kode_barang = $request->kode_barang;
           $barang->nama_barang = $request->nama_barang;
           $barang->harga_barang = $request->harga_barang;
           $barang->deskripsi_barang = $request->deskripsi_barang;
           $barang->satuan_id = $request->satuan_id;
           $barang->save();

           return redirect()->route('barangs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Barang Detail';
         // ELOQUENT
         $barang = Barang::find($id);

         return view('barangs.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';

        $satuans = Satuan::all();
        $barang = Barang::find($id);


        return view('barangs.edit', compact('pageTitle', 'barang', 'satuans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mendefinisikan pesan kesalahan untuk validasi input
        $messages = [
            'required' => ':attribute harus diisi.',
            'unique' => ':attribute sudah digunakan.',
            'numeric' => 'Isi :attribute dengan angka.'
        ];

        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:barangs,kode_barang,'.$id,
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan_id' => 'required|exists:satuans,id',
        ], $messages);

        // Jika terdapat kesalahan validasi, kembalikan kembali ke halaman sebelumnya dengan pesan kesalahan dan input yang diisi sebelumnya
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


           // ELOQUENT
           $barang = Barang::find($id);
           $barang->kode_barang = $request->kode_barang;
           $barang->nama_barang = $request->nama_barang;
           $barang->harga_barang = $request->harga_barang;
           $barang->deskripsi_barang = $request->deskripsi_barang;
           $barang->satuan_id = $request->satuan_id;
           $barang->save();

           return redirect()->route('barangs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::find($id)->delete();

        return redirect()->route('barangs.index');
    }
}
