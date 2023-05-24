<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // $students = Student::latest()->get();
        $students = Student::latest()->paginate(5); //obtener los datos en orden desde el ultimo hasta el primero
        return view('index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all()); //Sirve para saber la data que se esta recibiendo

        $request->validate([
            'name' => 'required',
            'lastname' => 'required'
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Nuevo estudiante creado exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student): View
    {
        // dd($student);
        return view('edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student): RedirectResponse
    {
        // dd($request->all());
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Estudiante actualizado exitosamente!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Estudiante eliminado exitosamente!');

    }
}