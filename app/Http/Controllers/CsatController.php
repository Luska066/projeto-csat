<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Http\Request;

class CsatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = Search::all();
        //Valor Positivo
        $noteFive = Search::where('note',5)->count();
        $noteFour = Search::where('note',4)->count();
        $totalNote = Search::all()->count();

        //Valor negativo
        $noteTwo = Search::where('note',2)->count();
        $noteOne = Search::where('note',1)->count();

        $csatValueNegativeFeedback =( ($noteTwo + $noteOne)/$totalNote)*100;


        $noteThree = Search::where('note',3)->count();
        $csatValueNeutralFeedback =($noteThree/$totalNote)*100;

        $csatValue = (($noteFour + $noteFive)/$totalNote)*100;

        $allNotes = Search::all('note')->pluck('note')->map(function ($value) {
            return intval($value);
        });



        return view("csat.index",compact('search','csatValue','csatValueNegativeFeedback','csatValueNeutralFeedback','allNotes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function statistics(){
        return view('csat.statistics.index');
    }
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
