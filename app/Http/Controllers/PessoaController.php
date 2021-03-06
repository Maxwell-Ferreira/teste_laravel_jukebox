<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function index(){

        return response()->json([
            "pessoas" => Pessoa::all()
        ]);
        
    }

    public function show($id){

        return response()->json([
            "pessoa" => Pessoa::find($id)
        ]);

    }
}
