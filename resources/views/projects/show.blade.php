@extends('layouts.app')

@section('title')
    {{$project->title}}
@endsection

@section('content')
  <h2 class="title">{{ $project->title }}</h2>
  <p class="is-size-2">{{ $project->description }}</p>
  <a href="/projects/{{$project->id}}/edit">Edit project</a>

  @if ($project->tasks()->count())
  <div class="box">
      @foreach ($project->tasks as $task)
        <form method="POST" action="/tasks/{{$task->id}}">
          @csrf
          @method('PATCH')
          <label class="checkbox" for="completed">
            <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
            {{$task->description}}
          </label>
        </form>
      @endforeach
  </div>
  @endif
  <form action="/projects/{{$project->id}}/tasks" method="POST" class="box">
    @csrf
    <div class="field">
        <label class="label" for="description">Your task :</label>
        <br>
        <input class="input {{$errors->has('description') ? 'is-danger':''}}" type="text" name="description" placeholder={{old('description')}}/>
      </div>
      @include('errors')
      <div class="control">
        <button class="button is-primary" type="submit">
          Create Task
        </button>
      </div>
  </form>
@endsection
