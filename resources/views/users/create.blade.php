@extends('layouts.app')

@section('title')
    Register user
@endsection

@section('content')
<div class="p-5 shadow-sm p-3 mb-5 bg-white rounded m-5 border container mx-auto">
  <h2 class="text-center mb-5">Welcome - Greetings</h2>
  <form action="/users" method="POST" class="box">
    @csrf
    <div class="form-group row px-5">
      <div class="col">
        <input name="name" type="text" class="form-control" id="inputName" placeholder="Full Name">
      </div>
    </div>
    <div class="form-group row px-5">
      <div class="col">
        <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>
    <div class="form-group row px-5">
      <div class="col">
          <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
    </div>
    <div class="text-center px-5">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
    </div>
  </form>
  {{-- Partie Erreur du formulaire --}}
  @include('errors')
</div>
@endsection