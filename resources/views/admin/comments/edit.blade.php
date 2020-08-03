@extends('layouts.app')

@section('content')

<form action="{{route('admin.comments.update', $commentss)}}" method="POST">
    <input type="hidden" name="__method" value="PUT">

    {{csrf_field()}}
    @method('PUT')
<p>
    <input value="{{$comments->coment}}" type="text" name="coment"> Комментарий
     <br>

    <label for="">пост к комментарию</label>
    <select class="form-control" name="parent_id">
   @include('admin.comments.tree.comments', ['posts' => $posts])
   </select>

   <label for="">Вложенный комментарий</label>
   <select class="form-control" name="id_parent">
    <option value="0">-- без родительского комментария --</option>
  @include('admin.comments.tree.comment', ['comments' => $comments])
  </select>
<br>
  <input type="hidden" name="name_create"  value="{{Auth::user()->name}}"> Автор
  <br>
     <input type="submit" value="Сохранить">


</p>

</form>

@endsection


