<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Categoria</title>
</head>
<body>
    <h1>Adicionar Categoria</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('categories.index') }}">Voltar</a>
</body>
</html>
