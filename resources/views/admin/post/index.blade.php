@extends('layouts.app')

@section('content')

@foreach ($posts as $post)

{{$post->title}} <br>
{{$post->post}}

<br>


@endforeach
<a href="{{route('admin.post.create')}}"> Создать пост </a>

@endsection
