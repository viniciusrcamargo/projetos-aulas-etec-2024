<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    //listar
    public function index(){
        $contatos = Contato::query()->orderBy('created_at')->get();//select * from
        return view('contatos.index')->with('contatos', $contatos);
    }

    //salvar
    public function store(Request $req){
        $contato = new Contato();
        $contato->nome = $req->nome;
        $contato->telefone = $req->telefone;
        $contato->email = $req->email;
        $contato->save();//$contato->execute();
        return redirect()->back();
    }

    //Mostrar editar
    public function edit($id){
        $contato = Contato::find($id);
        return view('contatos.edit')->with('contato', $contato);
    }

    //atualizar
    public function update(Request $req, $id){
        $contato = Contato::find($id);
        $contato->update(['nome' => $req->nome, 'telefone' => $req->telefone, 'email' => $req->email]);
        return to_route('contatos.index');
    }

    //deletar o contato
    public function destroy($id){
        $contato = Contato::find($id);
        $contato->delete();
        return to_route('contatos.index');
    }
}
