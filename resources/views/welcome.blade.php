{{--Extend le template app pour avoir la même structure de page qui se trouve dans le fichier layouts/app --}}
@extends('layouts.app')

{{-- Lui donner un contenu personnalisé avec la section et le nom du yield correspondant au template --}}
@section('content')
    <h1>Welcome To My HomePage</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae aspernatur delectus numquam ipsum nemo amet.</p>
    <ul>
        @foreach ($coachs as $coach)
            <li>{{$coach}}</li>
        @endforeach
    </ul>
@endsection
