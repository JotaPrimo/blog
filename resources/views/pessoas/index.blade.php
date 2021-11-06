@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">Pessoas</div>

                    <div class="card-body">

                        <form action="{{ route('pessoa.store') }}" method="POST">

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


                                <div class="col">
                                    <input type="text" name="descricao" required class="form-control  @error('descricao') is-invalid @enderror" value="Descricao" placeholder="Descricao" value={{ old('descricao') }} >
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



                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pessoas as $pessoa)
                        <tr>
                            <th scope="row"> {{ $pessoa->id }} </th>
                            <td> {{ $pessoa->name }} </td>
                            <td> {{ $pessoa->email }} </td>
                            <td> {{ $pessoa->descricao }} </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>



                </div>

            </div>

        </div>

    </div>
@endsection
