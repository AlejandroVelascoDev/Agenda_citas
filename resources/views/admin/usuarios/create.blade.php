@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 text-center mb-4">
            <h1>Registro de usuarios</h1>
        </div>
        
        <div class="col-md-6">
           
            <form action="{{ url('/admin/usuarios/create') }}" method="POST" class="p-4 border rounded shadow-sm bg-light">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>  <b>*</b>
                    <input type="text" class="form-control" id="name" name="name" required>
                    @error('name')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label> <b>*</b>
                    <input type="email" class="form-control" id="email" name="email" required>
                    @error('email')
                        <div class="alert alert-danger mt-2">{{ $message }}</div> 
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>  <b>*</b>
                    <input type="password" class="form-control" id="password" name="password" required> 
                    @error('password')
                        <div class="alert alert-danger mt-2">{{ $message }}</div> 
                    @enderror

                </div>
                <div class="mb-3">
                 <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>   <b>*</b>
                 <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    @error('password_confirmation')
                        <div class="alert alert-danger mt-2">{{ $message }}</div> 
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Registrar</button>
            </form>
        </div>
    </div>
</div>

@endsection