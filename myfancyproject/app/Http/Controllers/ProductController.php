<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        $record = new Product();
        $record->fill($request->all());
        $record->save();
    }

    public function show(string $id)
    {
        return Product::find($id);
    }

    public function update(Request $request, string $id)
    {
        $record = Product::find($id);
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete;
    }
}
