@extends('layouts.app')

@section('title')
    Create Project
@endsection

@section('content')
    <h2>Edit Project</h2>
    <form action="/projects/{{$project->id}}" method="POST">
      {{method_field('PATCH')}}
      {{ csrf_field() }}
      <div>
        <label for="title">The Title :</label>
        <br>
        <input type="text" name="title" placeholder="Your Title" value="{{$project->title}}">
      </div>
      <div>
        <label for="description">The Description :</label>
        <br>
        <textarea type="text" name="description">{{$project->description}}</textarea>
      </div>
      <button type="submit">
        Send
      </button>
    </form>
    <form action="/projects/{{$project->id}}" method="post">
      {{method_field('DELETE')}}
      {{ csrf_field() }}
      <button type="submit">
        Delete
      </button>
    </form>
@endsection