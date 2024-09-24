<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = DB::table('produtos')
            ->join('categorias', 'produtos.categoria_id', '=', 'categorias.id')
            ->select('produtos.id', 'produtos.nome', 'produtos.descricao', 'produtos.preco', 'categorias.nome as categoria')->groupBy('produtos.id', 'produtos.nome', 'produtos.descricao', 'produtos.preco', 'categorias.nome')->get();
        //dd($produtos);
        return view('produtos.index')->with('produtos', $produtos);
    }

    public function create()
    {
        $categorias = Categoria::query()->orderBy('nome')->get();
        return view('produtos.create')->with('categorias', $categorias);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'categoria_id' => 'required|exists:categorias,id',
        ], [
            'nome.required' => 'O campo nome é obrigatório.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'preco.required' => 'O campo preço é obrigatório.',
            'preco.numeric' => 'O campo preço deve ser um número.',
            'categoria_id.required' => 'O campo categoria é obrigatório.',
            'categoria_id.exists' => 'A categoria selecionada é inválida.',
        ]);
        try {
            $produtos = Produto::create([
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'preco' => $request->preco,
                'categoria_id' => $request->categoria_id,
            ]);
            return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Erro ao criar o produto: ' . $e->getMessage()]);
        }
        
    }

    public function edit($id)
    {
        $categorias = Categoria::query()->orderBy('nome')->get();

        $produto = DB::table('produtos')
            ->join('categorias', 'produtos.categoria_id', '=', 'categorias.id')
            ->select('produtos.*', 'categorias.nome as categoria')
            ->where('produtos.id', '=', $id)
            ->first();
         //dd($produto);
        return view('produtos.edit')->with('produtos', $produto)->with('categorias', $categorias);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        //dd($produto);
        $produto->update([
          'nome' => $request->nome,
          'descricao' => $request->descricao,
          'preco' => $request->preco,
          'categoria_id' => $request->categoria_id,
        ]);
        return redirect('/produtos');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('produtos.index');
    }

}

