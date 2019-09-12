@extends('layouts.app')

@section('title')
    {{$project->title}}
@endsection

@section('content')
  <h2 class="title">{{ $project->title }}</h2>
  <p class="is-size-2">{{ $project->description }}</p>
  <a href="/projects/{{$project->id}}/edit">Edit project</a>
@endsection
