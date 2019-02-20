<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jogador;

class JogadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("jogadores.inserir");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jogador = new Jogador();
        $jogador->nome = $request->input('nome');
        $jogador->sobrenome = $request->input('sobrenome');
        $jogador->email = $request->input('email');
        $jogador->whatsapp = $request->input('wpp');

        if($request->hasFile('foto') && $request->file('foto')->isValid()){
            $nome = $jogador->nome.date("_d-m-o_H-i-s.");
            $extensao = $request->foto->extension();
            $nomeArquivo = $nome.$extensao;
            //dd($nomeArquivo);
            $upload = $request->file('foto')->storeAs('jogadores', $nomeArquivo);
            if(!$upload){
                return redirect()->back()->with('error', 'Falha ao fazer o upload da imagem');
            }
            $jogador->avatar = $nomeArquivo;
        }

        $jogador->save();

        //return redirect()->route('coisas.index');
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
    public function update(Request $request, $id)
    {
        //
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
}
