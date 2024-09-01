<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Programa</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container bg-light w-50 mt-5">
        <h1 class="text-uppercase text-center fw-bold pt-2 pb-2">Editar Programa</h1>

        <!-- Mostrar errores de validación -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario de edición -->
        <form action="{{ route('programas.update', $programa->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="numeroFicha" class="form-label">Número de Ficha</label>
                <input type="text" class="form-control" id="numeroFicha" name="numeroFicha" value="{{ $programa->numeroFicha }}" required>
            </div>

            <div class="mb-3">
                <label for="nombrePrograma" class="form-label">Nombre del Programa</label>
                <input type="text" class="form-control" id="nombrePrograma" name="nombrePrograma" value="{{ $programa->nombrePrograma }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Programa</button>
            <a href="{{ route('programas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
