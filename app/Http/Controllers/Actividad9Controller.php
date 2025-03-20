<?php

namespace App\Http\Controllers;

use App\Actividad9;
use Illuminate\Http\Request;

class Actividad9Controller extends Controller
{
    public function index()
    {
        $registros = Actividad9::all();
        return view('actividad9.index', compact('registros'));
    }

    public function create()
    {
        return view('actividad9.create'); // ← Método necesario
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $imagen = $request->file('foto')->store('public/actividad9');
        $nombreImagen = basename($imagen);

        Actividad9::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'foto' => $nombreImagen
        ]);

        return redirect()->route('actividad9.index');
    }

    public function destroy($id)
    {
        Actividad9::find($id)->delete();
        return redirect()->route('actividad9.index');
    }

    public function papelera()
    {
        $registros = Actividad9::onlyTrashed()->get();
        return view('actividad9.papelera', compact('registros'));
    }

    public function restaurar($id)
    {
        Actividad9::withTrashed()->find($id)->restore();
        return redirect()->route('actividad9.papelera');
    }
}