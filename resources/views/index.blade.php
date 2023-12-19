<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    @foreach ($lista1 as $lista)
    {{$lista->nome}}
    {{$lista->descricao}}
    {{$lista->preco}}
    {{$lista->quantidade}}

    <form action="{{ route('produto.delete', $lista->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Remover</button>

    </form>
    <br>
    @endforeach

</html>





