<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;
use App\User;

class EnderecoController extends Controller
{
    public function index() {
        return view('cliente');
    }
 
    public function create(Request $request) {     
        $id = auth()->user()->id;
        $usuario = User::find($id);
        
        $endereco = Endereco::create(
            [   
                'cep' => $request->input('cep'),
                'logradouro' => $request->input('logradouro'),
                'bairro' => $request->input('bairro'),
                'uf' => $request->input('uf'),
                'cidade' => $request->input('cidade'),
                'numero' => $request->input('numero'),
                'complemento' => $request->input('complemento'),
            ]); 
        
        $endereco->save();
    }
    
}
