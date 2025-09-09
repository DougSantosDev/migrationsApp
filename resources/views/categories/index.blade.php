<!DOCTYPE html>
<html>
<head>
    <title>Categorias</title>
</head>
<body>
    <h1>Categorias</h1>

    <a href="{{ route('categories.create') }}">Adicionar Categoria</a>

    <ul>
        @foreach($categories as $category)
            <li>
                {{ $category->name }}
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>