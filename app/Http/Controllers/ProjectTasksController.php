<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    //

    public function store(Request $request, Project $project){
        // Méthode du model
        $task = $request->validate(['description' => 'required']);
        $project->addTask($task);

        
        // Création Basique
        // $task=Task::create([
        //     'description' => request('description'),
        //     'project_id' => $project->id
        // ]);
        return back();
    }

    public function update(Task $task){

        $task->update([
            'completed' => request()->has('completed')
        ]);
        return back();
    }
}
