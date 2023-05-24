<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lastname', 'birthday', 'status']; //Se declara de esta manera para poder hacer la asignacion masiva.
}