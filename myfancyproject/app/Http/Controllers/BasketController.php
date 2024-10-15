<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index()
    {
        return Basket::all();
    }

    public function store(Request $request)
    {
        $record = new Basket();
        $record->fill($request->all());
        $record->save();
    }

    public function show(string $id)
    {
        return Basket::find($id);
    }

    public function update(Request $request, string $id)
    {
        $record = Basket::find($id);
        $record->fill($request->all());
        $record->save();
    }

    public function destroy(string $id)
    {
        Basket::find($id)->delete;
    }
}
