@extends('layouts.app')

@section('content')
{{$posts->title}} <br>
{{$posts->post}}
<form onsubmit="if(confirm('удалить?')){return true}else{return false}"
action="{{route('admin.post.destroy', $posts)}}" method="POST">
<input type="hidden" name="_method" value="DELETE">
{{csrf_field()}}
<a href="{{route('admin.post.edit', $posts)}}"> Редактировать </a>
<button type="submit">Удалить</button>
</form>
<br>

@endsection
