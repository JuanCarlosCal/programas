
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
    <div class="container bg-light w-50 mt-5">
        <h1 class="text-uppercase text-center fw-bold pt-2 pb-2">Detalles del programa</h1>
        <table class="table">
        <tr>
            <td class="text-uppercase fw-bold">ID</td>
            <td class="text-uppercase fw-bold">Numero de ficha</td>
            <td class="text-uppercase fw-bold">Nombre del programa</td>
            <td class="text-uppercase fw-bold">Created_at</td>
            <td class="text-uppercase fw-bold">Updated_at</td>

        </tr>
        <tr>
            <td>{{ $programa->id }}</td>
            <td>{{ $programa->numeroFicha }}</td>
            <td>{{ $programa->nombrePrograma }}</td>
            <td>{{ $programa->created_at }}</td>
            <td>{{ $programa->updated_at }}</td>
        </tr>
        </table>
        <a href="{{ route('programas.index') }}" class="btn btn-primary">Volver a la lista</a>
    </div>
    
</body>
</html>