<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar programa</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container bg-light rounded-1 w-75 mt-5 p-5">
        <form action="{{ route('programas.store') }}" method="POST">
            @csrf
            @method('POST')
            <h1 class="pb-3 fw-bold text-center text-uppercase">Ingresar programa</h1>
            <label class="fw-semibold mt-3 w-25" for="numeroFicha">Numero de ficha:</label>
            <input type="text" class="border border-0 w-50" id="numeroFicha" name="numeroFicha" placeholder="Ingrese el numero de ficha">
            <br>
            <label class="fw-semibold mt-3 w-25 mb-3" for="nombrePrograma">Nombre del programa:</label>
            <input type="text" class="border border-0 w-50" id="nombrePrograma" name="nombrePrograma" placeholder="Ingrese el nombre del programa">
            <br>
            <div class="d-flex justify-content-center">
            <input type="submit" class="bg-primary mt-2 border border-0 fw-semibold rounded-2 p-2 w-25" value="Agregar">
            </div>
        </form>
    </div>
</body>
</html>