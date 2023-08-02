<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogo de Produtos</title>
</head>
<body>
    <form action="{{route('produto.create',$lista1->id)}} " method="POST">
    @csrf
    <label for="">Nome</label>
    <input type="text" placeholder="Digite o nome do Produto" name="nome_produto">
    <br> <br>
    <label for="">descricao</label>
    <input type="text" placeholder="Digite a descricao do produto" name="descricao_produto">
    <br> <br>
    <label for="">Preco</label>
    <input type="text" placeholder="Digite o preco" name="preco_produto">
    <br> <br>
    <label for="">quantidade</label>
    <input type="text" placeholder="Digite a quantidade em estoque" name="quantidade_produto">
    <br><br>
    <button>Enviar</button>

</form>

</body>
</html>
