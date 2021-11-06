<?php

namespace App\Http\Controllers;


use App\Repositories\PessoaRepository;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PessoaRepository $model)
    {
        $pessoas = $model->all();
        return view('pessoas.index', compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {


            $pessoa = new Pessoa();
            $pessoa->fill($request->all());
            $resultSave = $pessoa->save();

            if ($resultSave) {
                Alert::success('Sucesso', 'Operação realizada com sucesso');
                return redirect()->route('pessoa.index');
            }

            Alert::warning('Aviso', 'Não foi possivel completar a operação. Tente novamente');
            return redirect()->route('pessoa.index');

        } catch (\Exception $exception) {

            Alert::error('Erro', 'Ocorreu um erro. Não possivel concluir o cadastro');
            return redirect()->route('pessoa.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pessoas  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoas)
    {
        //
    }
}
