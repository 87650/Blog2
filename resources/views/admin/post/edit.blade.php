@extends('layouts.app')

@section('content')

<form action="{{route('admin.post.update', $post)}}" method="POST">
    <input type="hidden" name="__method" value="PUT">

    {{csrf_field()}}
    @method('PUT')
<p>

<input type="text" name="title" value="{{$post->title}}"> Имя поста <br>
<input type="text" name="post" value="{{$post->post}}"> Пост<br>
    <label for="">Категория</label>
    <select class="form-control" name="parent_id">
  <option value="0">-- Без категории --</option>
  @include('admin.post.tree.posts', ['categories' => $categories])
   </select>
   <label for="">Публикация</label>
   <select class="form-control" name="published">
    <option value="0">Опубликовано</option>
    <option value="1">Не Опубликовано</option>
     </select> <br>
    <input type="text" name="name_create" disabled value="{{Auth::user()->name}}">  Создатель <br>
     <input type="submit" value="Сохранить">


</p>

</form>


@endsection
