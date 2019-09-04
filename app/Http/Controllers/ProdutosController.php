<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;
use App\Categoria;

class ProdutosController extends Controller
{
    public function index(){
        //carrega todos os produtos
        $produtos = Produto::all();
        // dd($produtos);


        //carrega o produto
        //$p = Produto::find(3);
        //dd($p);

        // retornando a view listarProdutos.blade.php
        return view('listarProdutos', compact ('produtos')  );
       
       }
}
