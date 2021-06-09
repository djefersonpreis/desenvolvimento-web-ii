@extends('templates.master')

@section('content')

<div class="card text-center">
    <header class="card-header row justify-content-center">
        <h2>Atualizando #{{ $conta->id }}</h2>
    </header>
    <main class="card-body row justify-content-center mt-3">

        <section class="col-10 col-sm-12 col-md-8 col-lg-8">

            <form action="{{route('contas.update', $conta->id)}}" method="POST">

                {{ csrf_field() }}

                <div class="form-row justify-content-center">

                    <div class="form-group col-sm-8 col-md-10 col-lg-8">

                        <label for="instituicao"> Devedor: </label>
                        <input type="text" class="form-control" id="instituicao"
                            name="instituicao" placeholder="Devedor..." value="{{$conta->instituicao}}">

                    </div>

                </div>

                <div class="form-row justify-content-center">

                    <div class="form-group col-sm-8 col-md-10 col-lg-8">

                        <label for="preco"> Preço: </label>
                        <input type="number" class="form-control" id="preco"
                            name="preco" placeholder="Preço..." value="{{$conta->preco}}">

                    </div>

                </div>

                <div class="form-row justify-content-center">

                    <div class="form-group col-sm-8 col-md-10 col-lg-8">

                        <label for="data_pgto"> Data de Expiração: </label>
                        <input type="date" class="form-control" id="data_pgto"
                            name="data_pgto" placeholder="Data de Expiração..." value="{{$conta->data_pgto}}">

                    </div>

                </div>

               <div class="form-row justify-content-center">

                   <a href="#modalUpdate" class="btn btn-primary col-sm-8 col-md-10 col-lg-8 py-2 mt-1"
                                                       data-toggle="modal" data-target="#modalUpdate">
                       Atualizar
                   </a>

               </div>

               @include('templates.modalUpdate', [
                           'title'  => 'ALTERAR REGISTRO',
                           'text'   => 'Desejas realmente alterar o registro #' . $conta->id .'?'
                       ])

           </form>

           <div class="form-row justify-content-center">

               <a href="#" onclick="goBack()" class="btn btn-danger col-sm-8 col-md-10 col-lg-8 py-2 mt-1">
                   Voltar
               </a>

           </div>
        </section>

    </main>
</div>

@endsection()
