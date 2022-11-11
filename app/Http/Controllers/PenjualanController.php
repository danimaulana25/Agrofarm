<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pengambilan;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.penjualan.index', [
            'title' => 'Penjualan',
            'penjualan' => Penjualan::paginate(5),
            'pengambilan' => Pengambilan::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.penjualan.create', [
            'kategori' => Category::all(),
            'pengambilan' => Pengambilan::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedata = $request->validate([
            'nama_pembeli' => 'required|string|max:255',
            'pengambilan_id' => 'required',
            'lokasi' => 'required',
            'tanggal_jual' => 'required',
        ]);
        Penjualan::create($validatedata);

        $pengambilan = Pengambilan::where('id', $request->pengambilan_id)->first();
        $pengambilan->status = 2;
        $pengambilan->save();

        return redirect('/adminpenjualan')->with('toast_success', 'Penjualan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan, $id)
    {
        $target = Penjualan::where('id', $id)->first();
        return view('admin.penjualan.show', [
            'title' => 'Penjualan',
            'penjualan' => $target,
            'kategori' => Category::all(),
            'pengambilan' => Pengambilan::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan, $id)
    {
        $target = Penjualan::where('id', $id)->first();
        return view('admin.penjualan.edit', [
            'title' => 'Penjualan',
            'penjualan' => $target,
            'kategori' => Category::all(),
            'pengambilan' => Pengambilan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan, $id)
    {
        $validatedata = $request->validate([
            'nama_pembeli' => 'required|string|max:255',
            'pengambilan_id' => 'required',
            'lokasi' => 'required',
            'tanggal_jual' => 'required',

        ]);
        Penjualan::where('id', $id)->update($validatedata);

        return redirect('/adminpenjualan')->with('toast_success', 'Penjualan berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan, $id)
    {
        $target = Penjualan::where('id', $id)->first();
        $target->delete();
        return redirect('/adminpenjualan');
    }
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $penjualan = Penjualan::where('nama_pembeli', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $penjualan = Penjualan::all();
        }
        return view('admin.penjualan.index', ['penjualan' => $penjualan, 'pengambilan' => Pengambilan::all()]);
    }
}
