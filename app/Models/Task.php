<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
	
	// Define el nombre de la tabla en la base de datos
    protected $table = 'tareas'; // El nombre de tu tabla es 'tareas'

    // Los campos que se pueden asignar masivamente
    protected $fillable = [
        'title',
        'description',
        'completed',
    ];

    // Si deseas, puedes definir la fecha de creación y actualización como formato de fecha
    protected $dates = ['created_at', 'updated_at'];
}
