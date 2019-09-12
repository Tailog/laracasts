@extends('layouts.app')

@section('title')
    {{$project->title}}
@endsection

@section('content')
  <h2>{{ $project->title }}</h2>
  <p>{{ $project->description }}</p>
@endsection
