@extends('layouts.app')

@section('title')
    Create Project
@endsection

@section('content')
<div class="p-5 shadow-sm p-3 mb-5 bg-white rounded m-5 border container mx-auto">
  <h2 class="text-center mb-5">Create Project</h2>
  <form action="/projects" method="POST" >
    {{ csrf_field() }}
    <div class="form-group row px-5">
      <div class="col">
          {{-- $errors->has => nous permet de savoir si il y a des erreus pour ce champ --}}
        <input  class="form-control {{$errors->has('title') ? 'is-invalid':''}}" type="text" name="title" placeholder="Your Title" value="{{old('title')}}">
      </div>
    </div> 
    <div class="form-group row px-5">
      <div class="col">
        <textarea class="form-control {{$errors->has('description') ? 'is-invalid':''}}" type="text" name="description" placeholder="Your Description">{{old('description')}}</textarea>
      </div>
    </div>
    <div class="text-center px-5">
      <button class="btn btn-primary btn-lg btn-block" type="submit">
        Send
      </button>
    </div>
  </form>
  {{-- Partie Erreur du formulaire --}}
      @include('errors')
</div>
@endsection