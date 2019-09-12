@extends('layouts.app')

@section('title')
    Create Project
@endsection

@section('content')
    <h2 class="title">Edit Project</h2>
    <form action="/projects/{{$project->id}}" method="POST">
      {{method_field('PATCH')}}
      {{ csrf_field() }}
      <div class="control">
        <label for="title" class="label">The Title :</label>
        <br>
        <input class="input" type="text" name="title" placeholder="Your Title" value="{{$project->title}}">
      </div>
      <div class="control">
        <label for="description" class="label">The Description :</label>
        <br>
        <textarea class="textarea" type="text" name="description">{{$project->description}}</textarea>
      </div>
      <button class="button is-primary" type="submit">
        Send
      </button>
    </form>
    <form action="/projects/{{$project->id}}" method="post">
      {{method_field('DELETE')}}
      {{ csrf_field() }}
      <button class="button is-danger" type="submit">
        Delete
      </button>
    </form>
@endsection