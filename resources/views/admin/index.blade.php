@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col">
            <h1 class="m-0">Panel de Administración</h1>
        </div>
    </div>

    {{-- Tarjetas informativas --}}
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">

                    <h3>{{ $total_usuarios }}</h3>
                    <p>Usuarios</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ route('admin.usuarios.index') }}" class="small-box-footer">
                    Más información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53</h3>
                    <p>Citas del día</p>
                </div>
                <div class="icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Ver agenda <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>5</h3>
                    <p>Alertas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Ver detalles <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- Enlaces rápidos --}}
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Accesos rápidos</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.usuarios.create') }}" class="btn btn-outline-primary mb-2">
                        <i class="fas fa-user-plus"></i> Crear usuario
                    </a>
                    <a href="#" class="btn btn-outline-success mb-2">
                        <i class="fas fa-calendar-alt"></i> Nueva cita
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
