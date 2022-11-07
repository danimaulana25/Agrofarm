<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.produk.index', [
            'title' => 'Product',
            'product' => Product::paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedata = $request->validate([
            'nama' => 'required|string|max:255',
            'image' => 'image|file',
            'deskripsi' => 'required',

        ]);

        if ($request->file('image')) {
            $validatedata['image'] = $request->file('image')->store('product', 'public');
        }
        Product::create($validatedata);

        return redirect('/adminproduk')->with('toast_success', 'Product berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, $id)
    {
        $target = Product::where('id', $id)->first();
        return view('admin.produk.show', [
            'title' => 'Product',
            'product' => $target
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $target = Product::where('id', $id)->first();
        return view('admin.produk.edit', [
            'title' => 'Product',
            'product' => $target
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, $id)
    {
        $validatedata = $request->validate([
            'nama' => 'required|string|max:255',
            'image' => 'image|file',
            'deskripsi' => 'required',

        ]);

        if ($request->file('image')) {
            $validatedata['image'] = $request->file('image')->store('product', 'public');
        }
        Product::where('id', $id)->update($validatedata);

        return redirect('/adminproduk')->with('toast_success', 'Product berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, $id)
    {
        $target = Product::where('id', $id)->first();
        $target->delete();

        return redirect('/adminproduk');
    }
}
