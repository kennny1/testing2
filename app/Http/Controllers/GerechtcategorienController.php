<?php

namespace App\Http\Controllers;

use App\Models\Gerechtcategorien;
use Illuminate\Http\Request;

class GerechtcategorienController extends Controller
{
    public function index()
    {
        $gerechtcategorien = gerechtcategorien::all();
        return view('gerechtcategorien.index', compact('gerechtcategorien'));
    }

    public function create()
    {
        return view('gerechtcategorien.create');
    }

    public function store(Request $request)
    {
        $gerechtcategorien = new gerechtcategorien;
        $gerechtcategorien->code = $request->input('code');
        $gerechtcategorien->naam = $request->input('naam');
        $gerechtcategorien->save();

        return redirect()->back()->with('status', 'Toevoegen is gelukt');
    }

    public function edit($id)
    {
        $gerechtcategorien = gerechtcategorien::find($id);
        return view('gerechtcategorien.edit', compact('gerechtcategorien'));
    }


    public function update(Request $request, $id)
    {
        $gerechtcategorien = gerechtcategorien::find($id);
        $gerechtcategorien->code = $request->input('code');
        $gerechtcategorien->naam = $request->input('naam');
        $gerechtcategorien->save();

        return redirect()->back()->with('status', 'Update is gelukt');
    }

    public function destroy($id)
    {
        $gerechtcategorien = gerechtcategorien::find($id);
        $gerechtcategorien->delete();
        return redirect()->back()->with('status', 'Verwijderd is gelukt');

    }
}
