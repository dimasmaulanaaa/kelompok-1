<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        $gudangs = Gudang::all();
        return view('gudang.index', compact('gudangs'));
    }

    public function create()
    {
        return view('gudang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            // add validation for other columns
        ]);

        Gudang::create($request->all());

        return redirect()->route('gudang.index')->with('success', 'Gudang created successfully.');
    }

    public function edit($id)
    {
        $gudang = Gudang::findOrFail($id);
        return view('gudang.edit', compact('gudang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            // add validation for other columns
        ]);

        $gudang = Gudang::findOrFail($id);
        $gudang->update($request->all());

        return redirect()->route('gudang.index')->with('success', 'Gudang updated successfully.');
    }

    public function destroy($id)
    {
        $gudang = Gudang::findOrFail($id);
        $gudang->delete();

        return redirect()->route('gudang.index')->with('success', 'Gudang deleted successfully.');
    }

    public function getGudangs()
    {
        $gudangs = Gudang::all();

        return response()->json($gudangs, 200);
    }
}