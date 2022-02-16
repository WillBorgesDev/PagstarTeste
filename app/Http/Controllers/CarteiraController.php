<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Carteira;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;

class CarteiraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $carteiras = Carteira::all();
        

        return view('carteiras.index', compact('carteiras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('carteiras.create', ['action'=>route('carteira.store'), 'method'=>'post']);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('carteira.index'));
        if (! $request->has('cancel') ){

            $dados = $request->all();
            $this->validate($request, [
                'usuario_id' => 'exists:usuarios,id'
                ]);
            
            Carteira::create($dados);
            $request->session()->flash('message', 'Carteira cadastrado com sucesso');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->to($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Carteira $carteira,Request $request)
    {
        //
        if (! $request->has('cancel') ){

            $carteira->saldo = $carteira->saldo + $request->input('saldo');
    
            
            $carteira->update();
            \Session::flash('message', 'Transação efetuada com sucesso!');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('carteira.index'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carteira $carteira, Request $request)
    {
        //
        if (! $request->has('cancel') ){
            $carteira->delete();
            \Session::flash('message', 'Usuario excluído com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('carteira.index'); 
    }
}
