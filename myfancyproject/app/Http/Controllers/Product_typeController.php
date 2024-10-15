<?php

namespace App\Http\Controllers;

use App\Models\Product_type;
use Illuminate\Http\Request;

class Product_typeController extends Controller
{
    public function index()
    {
        return Product_type::all();
    }


    public function store(Request $request)
    {
        $record = new Product_type();
        $record->fill($request->all());
        $record->save();
    }


    public function show(string $id)
    {
        return Product_type::find($id);
    }

    public function update(Request $request, string $id)
    {
        $record = Product_type::find($id);
        $record->fill($request->all());
        $record->save();
    }

    public function destroy(string $id)
    {
        Product_type::find($id)->delete;
    }
}
