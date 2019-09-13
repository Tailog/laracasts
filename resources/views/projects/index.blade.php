@extends('layouts.app')

@section('title')
    My Projects - Laracast
@endsection

@section('content')
    <h1 class="title">Projects</h1>
    <ul>
    @foreach ($projects as $project)
      <li>
        <a href="/projects/{{$project->id}}">{{ $project->title}}</a> 
        ({{$project->tasks()->count() ? $project->tasks()->count() : 0}})
      </li>
    @endforeach
    </ul>
@endsection