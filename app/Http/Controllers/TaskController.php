<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Devuelve todas las tareas
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    // Crea una nueva tarea
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => false, // Asigna 'false' por defecto
        ]);

        return response()->json($task, 201); // Devuelve la tarea creada
    }

    // Actualiza una tarea existente
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'completed' => 'nullable|boolean',
        ]);

        $task->update([
            'title' => $request->title ?? $task->title,
            'description' => $request->description ?? $task->description,
            'completed' => $request->has('completed') ? $request->completed : $task->completed,
        ]);

        return response()->json($task);
    }

    // Elimina una tarea específica
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(['message' => 'Tarea eliminada con éxito.']);
    }
}
