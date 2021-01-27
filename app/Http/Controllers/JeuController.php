<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;

class JeuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeux = Jeu::all();
        return view('admin.jeu.index', compact('jeux'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jeu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        dd($request);
        $request->validate([
            'nom_jeu'=>'required',
            'prix'=>'required'
        ]);

        $jeux = new Jeu([
            'nom_jeu'=>$request->get('nom_jeu'),
            'urlAvatar'=>$request->get('urlAvatar'),
            'description'=>$request->get('description'),
            'prix'=>$request->get('prix')
        ]);

        $jeux->save();
        return redirect()->route('jeu.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \\Http\Response
     */
    public function show($id)
    {
        $jeux = Jeu::find($id);
        return view('pages.jeu', compact('jeux'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jeux = Jeu::find($id);
        return view('admin.jeu.edit', compact('jeux'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jeux = Jeu::find($id);
        $jeux->nom_jeu = $request->get('nom_jeu');
        $jeux->prix = $request->get('prix');
        $jeux->save();
        return redirect()->route('jeu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jeux = Jeu::find($id);
        $jeux->delete();
        return redirect()->route('jeu.index');
    }

    public function search(Request $request)
    {
        $name = $request->get('search');
        if($name != ""){
            $jeux = Jeu::where('nom_jeu', 'LIKE', "%$name%")->get();
            return view('pages.recherche', compact('jeux'));
        } else {
            return view('pages.accueil');
        }
    }

    public function pay($id)
    {
        $jeux = Jeu::find($id);
        return view('pages.payement', compact('jeux'));
    }
    
}
