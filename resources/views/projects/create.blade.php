@extends('layouts.app')

@section('title')
    Create Project
@endsection

@section('content')
    <h2 class="title">Create Project</h2>
    <form action="/projects" method="POST">
      {{ csrf_field() }}
      <div class="field">
        <label for="title" class="label">The Title :</label>
        <br>
        <input class="input" type="text" name="title" placeholder="Your Title">
      </div>
      <div class="field">
        <label class="label" for="description">The Description :</label>
        <br>
        <textarea class="textarea" type="text" name="description">Your Descritpion</textarea>
      </div>
      <div class="control">
        <button class="button is-primary" type="submit">
          Send
        </button>
      </div>
    </form>
@endsection