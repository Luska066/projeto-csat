<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Http\Request;

class PesquisaSatisfacaoController extends Controller
{
    public function index(){
        return view('pesquisa-satisfacao.pesquisa-satisfacao');
    }

    public function store(Request $request){

        $validated = $request->validate(
            [
                'description' => 'required|max:4000|min:5',
                'note' => 'integer',
            ],
            [
                'description.required' => "É necessário preencher o campo Descrição",
                'description.max' => "O número máximo de caracteres é 4000",
                'description.min' => "O número mínimo de caracteres é 5",

                'note.integer' => 'Não mude o tipo da nota'
            ]);
            $object = $request->all();


            if($object["note"] == "" || $object["note"] == null){
                $object["note"] = 1;
            }
            if($object["note"] == "" || $object["note"] == null){
                $dd = Search::create([
                    "description" => $object["description"],
                    "note" =>$object["note"]
                ]);
                if(empty($dd) == false){
                    return redirect()->back()->with('message',"Obrigado por enviar sua Opinião!");
                }else{
                    return redirect()->back()->with('message',"Houve um Erro ao enviar Mensagem")->with('type',1);
                }
            }else{
                $dd = Search::create($object);
                 if(empty($dd) == false){
                    return redirect()->back()->with('message',"Obrigado por enviar sua Opinião!");
                }else{
                    return redirect()->back()->with('message',"Houve um Erro ao enviar Mensagem")->with('type',1);
                }
            }



    }
}
