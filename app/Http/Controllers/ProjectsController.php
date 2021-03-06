<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Validation;

class ProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::where('owner_id',auth()->id())->orderBy('created_at', 'desc')->get();
        $currentUserName = auth()->user()->name;
        return view('projects.index',compact('projects','currentUserName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Plusieurs facon d'écrire
        // $project = new Project();
        // $project->title = $request->title;
        // $project->description = $request->description;
        // $project->save();

        $validate=$request->validate([
            'title' => ['required','min:3'],
            'description' => 'required|min:15',
        ]);
        if(auth()->user()== null){
            $validate['owner_id'] = 0;
        }else {
            $validate['owner_id']=auth()->user()->id;
        }
        // Ne pas oublier de modifier le Model pour utiliser cette écriture
        Project::create($validate);

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //Erreur 403 envoyé si nous ne sommes pas la bonne personne pour accéder à ce projet
        // abort_if($project->owner_id !== auth()->id(),403);
        //Policy methodes pour autoriser un certain utilisateur pour un projet donné
        // $this->authorize('view',$project);
        //Gate qui nous permet de réecrire l'autorisation
        if(\Gate::denies('view',$project)){
            abort(403);
        }
        return view('projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project )
    {
        //
        return view('projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
        // $project->title = $request->title;
        // $project->description = $request->description;
        // $project->save();

        $project->update(request(['title','descritpion']));

        return redirect('/projects/'.$project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();
        return redirect('/projects');
    }
}
