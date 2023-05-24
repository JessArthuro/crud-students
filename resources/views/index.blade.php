@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-white">CRUD de estudiantes</h2>
            </div>
            <div>
                <a href="{{ route('students.create') }}" class="btn btn-primary">Crear alumno</a>
            </div>
        </div>

        @if (Session::get('success'))
            <div class="alert alert-success mt-3">
                <p>{{ Session::get('success') }}</p>
            </div>
        @endif

        <div class="col-12 mt-4">
            <table class="table table-bordered text-white">
                <tr class="text-secondary">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Status</th>
                    <th>Opciones</th>
                </tr>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td class="fw-bold">{{ $student->name }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>{{ $student->birthday }}</td>
                        <td>
                            @if ($student->status == 'Aprobado')
                                <span class="badge bg-success ">{{ $student->status }}</span>
                            @else
                                <span class="badge bg-secondary">{{ $student->status }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('students.edit', $student) }}" class="btn btn-info">Editar</a>

                            <form action="{{ route('students.destroy', $student) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

            {{ $students->links() }}
        </div>
    </div>
@endsection
