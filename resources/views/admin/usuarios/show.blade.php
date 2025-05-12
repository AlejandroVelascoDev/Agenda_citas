@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Editar usuario</h1>

    <form action="{{ url('admin/usuarios/' . $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{ old('name', $usuario->name) }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" value="{{ old('email', $usuario->email) }}" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="password">Nueva contraseña (opcional)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="password_confirmation">Confirmar nueva contraseña</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('admin.usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
