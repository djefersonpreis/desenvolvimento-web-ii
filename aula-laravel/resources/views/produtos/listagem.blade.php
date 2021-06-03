@extends("layout")

@section('titulo')
    Listagem de Produtos
@stop

@section('conteudo')
    <div class="container">

        <h1 class="text-center">Listagem de Produtos</h1>

        <hr>

        <table class="table table-striped">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Ações</td>
            </tr>
            @foreach ($produtos as $p)

            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nome}}</td>
                <td>{{$p->descricao}}</td>
                <td>
                    <a href="{{route('produtos.edit', $p->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="{{route('produtos.remove', $p->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    <a href="{{route('produtos.show', $p->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
    </div>
@endsection
