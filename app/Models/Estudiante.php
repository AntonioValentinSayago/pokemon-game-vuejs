<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

/**
 * *|CURSOR_MARCADOR|*
 */

    public $table ="estudiantes";
    protected $filetable = array("*");
    public function cursos()
    {
        return $this->belongsToMany(Curso::class,"curso_estudiante");
    }
}
