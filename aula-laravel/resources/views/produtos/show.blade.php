@extends("layout")

@section('titulo')
    Detalhamento de Produto
@stop

@section('conteudo')
    <div class="container">

        <h1 class="text-center">Detalhamento de Produto</h1>

        <hr>

        <h2 class="p-3 m-3 bg-info"> ID => {{$produto->id}} </h2>
        <hr>
        <div class="p-3 m-3 bg-danger"> Nome => {{$produto->nome}} </div>
        <hr>
        <div class="p-3 m-3 bg-success"> Descrição => {{$produto->descricao}} </div>
        <hr>
    </div>
@endsection
