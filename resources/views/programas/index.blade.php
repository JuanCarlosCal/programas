<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de programas</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
        table td, table th {
            border: 1px solid #dee2e6;
        }
 </style>
<body>
    <div class="container bg-light w-75 mt-5 rounded-1">
        <h1 class="text-uppercase text-center fw-bold pt-2 pb-2">Lista de programas</h1>
        @foreach($lista as $lis)
        <table class="table">
        <tr>
            <td class="text-uppercase fw-bold">ID</td>
            <td class="text-uppercase fw-bold">Numero de ficha</td>
            <td class="text-uppercase fw-bold">Nombre del programa</td>
            <td class="text-uppercase fw-bold">Created_at</td>
            <td class="text-uppercase fw-bold">Updated_at</td>

        </tr>
        <tr>
            <td>{{ $lis->id }}</td>
            <td>{{ $lis->numeroFicha }}</td>
            <td>{{ $lis->nombrePrograma }}</td>
            <td>{{ $lis->created_at }}</td>
            <td>{{ $lis->updated_at }}</td>
            <td><a href="{{ route('programas.edit', $lis->id) }}">Editar</a></td>
            <td><a href="{{ route('programas.show', $lis->id) }}">Mostrar</a></td>
            <td>
                    <form action="{{ route('programas.destroy', $lis->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este programa?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-black fw-semibold">Eliminar</button>
                    </form>
                </td>
        </tr>
        </table>
        @endforeach
    </div>

    <div class="container w-75 bg-light mt-5 p-2">
        <div class="d-flex justify-content-center">
        <a href="{{ route('programas.create') }}" class="btn btn-primary text-black fw-semibold">Agregar Programa</a>
        </div>
    </div>
    
</body>
</html>