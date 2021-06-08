@extends('layout.app')
@section('content')

@foreach ($posts as $post)
<div>
    <h3>{{$post->title}}</h3>
</div>
<div class="container">
    <p>{{$post->description }}</p>
</div>

@endforeach

@endsection