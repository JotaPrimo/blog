<?php

namespace App\Repositories;

use App\Models\Produto;

class ProdutoRepository
{
    public function create(Produto $produto)
    {
        try {

            DB::beginTransaction();
            $produto = new Produto();
            $produto->fill($request->all());
            $resultSave = $produto->save();

            if ($resultSave) {
                DB::commit();
                Alert::success('Tudo certo', 'Produto inserido com sucesso');
                return redirect()->route('produto.index');
            } else {
                DB::rollBack();
                Alert::warning('Atenção', 'Cadastro não concluido');
                return redirect()->route('produto.index');
            }

        }catch (\Exception $exception) {
            Alert::error('Error Title', 'Ocorreu um erro. Cadastro não concluido');
            return redirect()->route('produto.index');
        }
    }
}
