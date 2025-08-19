<?php

namespace App\Http\Controllers;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index(){
        $livres=Livre::all();
        return view('livres.index',compact('livres'));
    }



    public function store(Request $request){
        $request->validate([
            'titre'=>'required',
            'auteur'=>'required',
            'prix'=>'required|numeric'
        ]);
        Livre::create($request->all());
        return redirect()->route('livres.index');
    }

    public function destroy(Livre $livre){
        $livre->delete();
        return redirect()->route('livres.index');
    }
    public function edit(Livre $livre){
      
        return view("livres.edit",compact("livre"));
    }

    public function update(Request $request, Livre $livre){
        $request->validate([
            'titre'=>'required',
            'auteur'=>'required',
            'prix'=>'required|numeric'
        ]);
        $livre->update($request->all());
        return redirect()->route('livres.index');
    }
}
