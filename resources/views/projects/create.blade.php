@extends('layouts.app')

@section('title')
    Create Project
@endsection

@section('content')
    <h2>Create Project</h2>
    <form action="/projects" method="POST">
      {{ csrf_field() }}
      <div>
        <label for="title">The Title :</label>
        <br>
        <input type="text" name="title" placeholder="Your Title">
      </div>
      <div>
        <label for="description">The Description :</label>
        <br>
        <textarea type="text" name="description">Your Descritpion</textarea>
      </div>
      <button type="submit">
        Send
      </button>
    </form>
@endsection