<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //On dit à Laravel ce qu'on veux modifier avec vérification de sa part 
    protected $fillable =[
        'title','description'
    ];
    //On dit à Laravel de nous laisser libre pour la création de project dans la db
    // protected $guarded = [];
}
