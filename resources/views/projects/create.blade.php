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
        {{-- $errors->has => nous permet de savoir si il y a des erreus pour ce champ --}}
        <input  class="input {{$errors->has('title') ? 'is-danger':''}}" type="text" name="title" placeholder="Your Title" value="{{old('title')}}">
      </div> 
      <div class="field">
        <label class="label" for="description">The Description :</label>
        <br>
        <textarea  class="textarea {{$errors->has('description') ? 'is-danger':''}}" type="text" name="description" placeholder="Yout Description">{{old('description')}}</textarea>
      </div>
      <div class="control">
        <button class="button is-primary" type="submit">
          Send
        </button>
      </div>
    </form>
    {{-- Partie Erreur du formulaire --}}
    @if ($errors->any())
      <div class="notification is-danger">
        <ul>
          @forelse ($errors->all() as $error)
            <li>{{$error}}</li>
          @empty
              
          @endforelse
        </ul>
      </div>
    @endif
@endsection