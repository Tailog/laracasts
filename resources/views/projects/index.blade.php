@extends('layouts.app')

@section('title')
    My Projects - Laracast
@endsection

@section('content')
<div class="p-5 shadow-sm p-3 mb-5 bg-white rounded m-5 border container mx-auto">
  <h1>{{$currentUserName}}'s Projects</h1>
  
  <ul class="list-group mt-5">
  @foreach ($projects as $project)
    <li class="list-group-item">
      <a href="/projects/{{$project->id}}">{{ $project->title}}</a> 
      ({{$project->tasks()->count() ? $project->tasks()->count() : 0}})
    </li>
  @endforeach
  </ul>
@endsection