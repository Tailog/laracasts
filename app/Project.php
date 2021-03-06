<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProjectCreated;
use App\User;

class Project extends Model
{
    //On dit à Laravel ce qu'on veux modifier avec vérification de sa part 
    protected $fillable =[
        'title','description','owner_id'
    ];
    //On dit à Laravel de nous laisser libre pour la création de project dans la db
    // protected $guarded = [];

    protected static function boot(){

        parent::boot();

        static::created(function($project){
            Mail::to($project->owner->email)->send(
                new ProjectCreated($project)
            );
        });
    }
    // Permet de créer des relations entre les project et les taches => création de cléfs etrangères
    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function addTask($task){
        // Laravel sait quoi mettre pour project_id
        $this->tasks()->create($task);

        // $task=Task::create([
        //         'project_id' => $this->id,
        //         'description' =>$description
        //     ]
        // );
        // return $task;
    }
    public function owner(){
        return $this->belongsTo(User::class);
    }
}
