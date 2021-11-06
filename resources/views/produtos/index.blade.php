@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <div class="card">

                    <div class="card-header">Produtos</div>

                    <div class="card-body">

                        <form action="{{ route('produto.store') }}" method="POST">

                        @csrf
                            <div class="row ">

                                <div class="col">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  placeholder="Nome" value={{ old('name') }} >
                                    @error('name')
                                         <div class="invalid-tooltip">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col">
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email" value={{ old('email') }}>
                                    @error('email')
                                        <div class="invalid-tooltip">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="row mt-3 mb-2">

                                <div class="col">
                                    <input type="text" name="descricao" required class="form-control  @error('descricao') is-invalid @enderror" value="Descricao" placeholder="Descricao" value={{ old('descricao') }} >
                                    @error('email')
                                        <div class="invalid-tooltip">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col">
                                    <input type="number" name="valor" required class="form-control  @error('valor') is-invalid @enderror" value="10" placeholder="Valor" value={{ old('valor') }}>
                                    @error('email')
                                         <div class="invalid-tooltip">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col">
                                    <input type="date" name="data_fabricao"  class="form-control  @error('data_fabricao') is-invalid @enderror" value={{ old('data_fabricao') }}>
                                    @error('email')
                                        <div class="invalid-tooltip">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="mt-2 pt-2">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
