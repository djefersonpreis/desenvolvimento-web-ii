@extends('templates.master')

@section('content')

<div class="card text-center">
    <header class="card-header row justify-content-center">
        <h2>Detalhamento de Conta (#{{ $conta->id }})</h2>
    </header>

    <main class="card-body row justify-content-center mt-3">
        <section class="col-10 col-sm-12 col-md-8 col-lg-8">

            <div class="form-row justify-content-center">
                <div class="form-group text-left col-sm-8 col-md-10 col-lg-8">
                    <label for="instituicao"> Devedor: </label>
                    <input type="text" class="form-control" id="instituicao"
                        name="instituicao" value="{{$conta->instituicao}}" disabled>
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="form-group text-left col-sm-8 col-md-10 col-lg-8">
                    <label for="preco"> Preço: </label>
                    <input type="number" class="form-control" id="preco"
                        name="preco" value="{{$conta->preco}}" disabled>
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="form-group text-left col-sm-8 col-md-10 col-lg-8">
                    <label for="data_pgto"> Data de Expiração: </label>
                    <input type="date" class="form-control" id="data_pgto"
                        name="data_pgto" value="{{$conta->data_pgto}}" disabled>
                </div>
            </div>

            <div class="form-row justify-content-center">
                <a href="#" onclick="goBack()" class="btn btn-danger col-sm-6 col-md-5 col-lg-4 py-2 mt-1">
                    Voltar
                </a>
            </div>

        </section>

    </main>
</div>
@endsection()
