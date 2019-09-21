@extends('layouts.app')

@section('title')
    {{$project->title}}
@endsection

@section('content')
<div class="p-5 shadow-sm p-3 mb-5 bg-white rounded m-5 border container mx-auto">
  <h2>{{ $project->title }}</h2>
  <p>{{ $project->description }}</p>
  <a href="/projects/{{$project->id}}/edit">Edit project</a>
  <div class="p-5 shadow-sm p-3 mb-5 bg-white rounded border container w-50">
    @if ($project->tasks()->count())
      <h3>Current Tasks :</h3>
      @foreach ($project->tasks as $task)
        <form method="POST" action="/tasks/{{$task->id}}" class="box">
          @csrf
          @method('PATCH')
          <div class="form-check">
            <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
            <label class="checkbox" for="completed">{{$task->description}}</label>
          </div>
        </form>
      @endforeach
    @endif
    <form action="/projects/{{$project->id}}/tasks" method="POST" >
      @csrf
      <div class="field">
          <label class="label" for="description">Adding task :</label>
          <br>
          <input class="form-control {{$errors->has('description') ? 'is-danger':''}}" type="text" name="description" placeholder={{old('description')}}/>
      </div>
      @include('errors')
      <div class="mt-5">
        <button class="btn btn-primary" type="submit">
          Create Task
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
