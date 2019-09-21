@extends('layouts.app')

@section('title')
    {{$currentUser->name}}
@endsection

@section('content')
<div class="p-5 shadow-sm p-3 mb-5 bg-white rounded m-5 border container mx-auto">
    <div class="text-center w-50 mx-auto">
      <img src="{{ asset('img/avatar.png') }}" alt="" class="w-25 img-fluid rounded-lg">
    </div>
    <div class="m-5 p-3 shadow-sm bg-white rounded border">
      <h3>{{$currentUser->name}} ({{$currentUser->email}})</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente aliquam nobis molestias itaque adipisci vel qui aliquid nostrum ab iste laborum, blanditiis quos numquam nam ex debitis animi dicta voluptatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt distinctio facilis debitis illo ducimus dicta recusandae officia animi sequi iure fuga rerum mollitia quis saepe cupiditate odit aliquam omnis voluptates, vel ipsum? Suscipit optio reprehenderit dolor sapiente enim nemo quis, soluta iure iusto sit nisi eum commodi odio voluptatum necessitatibus id a dolorem molestias in, molestiae cupiditate voluptatibus exercitationem officiis quia? Soluta explicabo, suscipit esse veniam corporis laboriosam. Porro odio illum labore, maiores corrupti earum tempora ducimus ipsa obcaecati! Vitae, necessitatibus incidunt voluptates nulla quis, pariatur libero autem nihil et beatae corporis a magnam! Animi hic facilis officiis laborum est?</p>
    </div>
</div>
@endsection