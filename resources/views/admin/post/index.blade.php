@extends('layouts.app')

@section('content')

@foreach ($posts as $post)

<a href="{{route('admin.post.show', $post)}}" >{{$post->title}} </a> <br>
{{$post->post}}
<form onsubmit="if(confirm('удалить?')){return true}else{return false}"
action="{{route('admin.post.destroy', $post)}}" method="POST">
<input type="hidden" name="_method" value="DELETE">
{{csrf_field()}}
<a href="{{route('admin.post.edit', $post)}}"> Редактировать </a>
<button type="submit">Удалить</button>
</form>
<br>

<br>


@endforeach
<a href="{{route('admin.post.create')}}"> Создать пост </a>

@endsection
