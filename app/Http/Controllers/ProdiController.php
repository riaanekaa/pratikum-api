<?php

namespace App\Http\Controllers;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::all();
        return view('prodi.index', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('prodi.create', compact('prodi'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validate = $request->validate([
            'nama_prodi' => 'required|max:50',
            'kode_prodi' => 'required|max:10',
            'akreditasi' => 'nullable|max:2',
        ]);
        $prodi = Prodi::create([
            'nama_prodi' => $request->nama_prodi,
            'kode_prodi' => $request->kode_prodi,
            'akreditasi' => $request->akreditasi,
        ]);

        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodi = Prodi::find($id);
        return view('prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prodi = Prodi::find($id);
        $prodi->update([
            'nama_prodi'=> $request->nama_prodi,
            'kode_prodi'=> $request->kode_prodi,
        ]);
        return redirect()->route('prodi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prodi = Prodi::find($id);
        $prodi->delete();
        return redirect()->route('prodi.index');
    }
}
