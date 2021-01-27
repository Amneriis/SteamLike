<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;
use Auth;
use App\Models\Jeu;
use App\Models\TransactionsNom;
use Illuminate\Support\Facades\DB;

class TransactionsController extends Controller
{
    //
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
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
        $transaction = new Transactions([
            'montant'=>Jeu::where('id', $request->get('id_jeu'))->get()->first()->prix,
            'id_user'=>Auth::id(),
            'id_jeu'=>$request->get('id_jeu')
        ]);

        $transaction->save();
        return redirect()->route('accueil');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \\Http\Response
     */
    public function show($id)
    {
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
 
    }

    public function showInProfil()
    {
        /*
        $transactions = TransactionsNom::where('id_user', Auth::id())->get();
        dd($transactions);
        */
        $idUser = Auth::id();
        $transactions = DB::table('transactions')
            ->selectRaw('
                transactions.id,
                transactions.montant,
                transactions.created_at,
                jeu.nom_jeu'
            )
            ->join('jeu', 'jeu.id', '=', 'transactions.id_jeu')
            ->where('id_user', $idUser)
            ->orderBy('transactions.transaction_date', 'asc')
            ->get();
        //dd($transactions);
        return view('pages.profil', compact('transactions'));
    }
}
