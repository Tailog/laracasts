@extends('layouts.app')

@section('title')
    My Projects - Laracast
@endsection

@section('content')
    <h1 class="title">Projects</h1>
    <ul>
    @foreach ($projects as $project)
      <li><a href="/projects/{{$project->id}}">{{ $project->title}}</a></li>
    @endforeach
    </ul>
@endsection