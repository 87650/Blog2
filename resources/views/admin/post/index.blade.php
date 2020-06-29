@extends('layouts.app')

@section('content')

@foreach ($posts as $post)

<a href="{{route('admin.post.show', $post)}}" >{{$post->title}} </a> <br>
{{$post->post}} <a href="{{route('admin.post.edit', $post)}}">Редактировать</a>

<br>


@endforeach
<a href="{{route('admin.post.create')}}"> Создать пост </a>

@endsection
