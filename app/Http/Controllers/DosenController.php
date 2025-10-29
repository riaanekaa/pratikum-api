<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosen = Dosen::all();
        return view('dosen.create', compact('dosen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_dosen' => 'required|max:50',
            'dosen_prodi' => 'required',
            'nidn' => 'required|string|unique:dosens,nidn|max:20'
        ]);
        $dosen = Dosen::create([
            'nama_dosen' => $request->nama_dosen,
            'dosen_prodi' => $request->dosen_prodi,
            'nidn' => $request->nidn,

        ]);

        return redirect()->route('dosen.index');
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
        $dosen = Dosen::find($id);
        return view('dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dosen = Dosen::find($id);
        $dosen->update([
            'nama_dosen'=> $request->nama_dosen,
            'dosen_prodi'=> $request->dosen_prodi,
            'nidn' => $request->nidn,

        ]);
        return redirect()->route('dosen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect()->route('dosen.index');
    }
}
