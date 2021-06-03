<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Produto;

use Request;

class ProdutoController extends Controller
{
    public function listagem() {
        if(view()->exists('produtos.listagem')) {

            // Tem que criar o Model;
            //$produtos = DB::select('select * from produtos');
            $produtos = Produto::get();

            return view('produtos.listagem', [
                'produtos' => $produtos
            ]);
        } else {
            return 'Página não encontrada';
        }
    }

    public function show(int $id){
        $produto = Produto::where('id', $id)->get()->first();

        return view('produtos.show', compact('produto'));
    }

    public function store(Request $request)
    {
        try {
            Produto::create($request->all());

            return redirect()->route('produtos.listagem');
        } catch(Exception $e) {
            return redirect()->back()->withError('DEU PAU PORRA');
        }
    }

    public function edit(int $id){
        $produto = Produto::where('id', $id)->get();

        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, int $id)
    {
        try {
            Produto::where('id', $id)->update($request->all());

            return redirect()->route('produtos.listagem');
        } catch(Exception $e) {
            return redirect()->back()->withError('DEU PAU PORRA');
        }
    }

    public function remove(int $id){
        $produto = Produto::where('id', $id)->delete();

        return redirect()->route('produtos.listagem');
    }

}
