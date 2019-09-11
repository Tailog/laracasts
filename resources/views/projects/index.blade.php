@extends('layouts.app')

@section('title')
    My Projects - Laracast
@endsection

@section('content')
    <h1>Projects</h1>
    @foreach ($projects as $project)
    <div>
      <h2>{{ $project->title}}</h2>
      <p>{{ $project->description}}</p>
    </div>
        
    @endforeach
@endsection