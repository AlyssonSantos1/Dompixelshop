<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogo de Produtos</title>
</head>
<body>
    <form action="/profile/delete/{{ $lista1->id }}" id="delete_profile_{{ $lista1->id }}" method="GET">
    @csrf
    @method('DELETE')
    <button type="submit" form="delete_profile_{{ $lista1->id }}">
        <ion-icon name="trash-outline">
            delete
        </ion-icon>
    </button>

</form>

</body>
</html>
