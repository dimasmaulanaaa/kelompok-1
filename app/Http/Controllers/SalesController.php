<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sales::all();

        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        return view('sales.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:sales',
            'no_handphone' => 'nullable|numeric',
            // tambahkan validasi untuk kolom-kolom lainnya
        ]);
    
        Sales::create($request->all());
    
        return redirect()->route('sales.index')->with('success', 'Sales created successfully.');
    }

    public function show($id)
    {
        $sales = Sales::findOrFail($id);

        return view('sales.show', compact('sales'));
    }

    public function edit($id)
    {
        $sales = Sales::findOrFail($id);

        return view('sales.edit', compact('sales'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:sales,email,' . $id,
            'no_handphone' => 'nullable|numeric',
            // tambahkan validasi untuk kolom-kolom lainnya
        ]);
    
        $sales = Sales::findOrFail($id);
        $sales->update($request->all());
    
        return redirect()->route('sales.index')->with('success', 'Sales updated successfully.');
    }

    public function destroy($id)
    {
        $sales = Sales::findOrFail($id);
        $sales->delete();

        return redirect()->route('sales.index')->with('success', 'Sales deletedsuccessfully.');
    }
}
