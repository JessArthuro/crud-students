@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2>Crear estudiante</h2>
            </div>
            <div>
                <a href="{{ route('students.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <strong>Corrige los errores!</strong><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Nombre...">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Apellido:</strong>
                        <input type="text" name="lastname" class="form-control" placeholder="Apellido...">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                    <div class="form-group">
                        <strong>Fecha de nacimiento:</strong>
                        <input type="date" name="birthday" class="form-control" id="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                    <div class="form-group">
                        <strong>Estado inicial:</strong>
                        <select name="status" class="form-select" id="">
                            <option value="">-- Elige el status --</option>
                            <option value="Aprobado">Aprobado</option>
                            <option value="Reprobado">Reprobado</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </div>
        </form>
    </div>
@endsection
