@extends('layouts.app')

@section('content')



 <form action="{{route('admin.category.update', $category)}}" method="POST">

    <input type="hidden" name="__method" value="PUT">

    {{csrf_field()}}
    @method('PUT')
<p>

    <input type="text" name="title"> Категория <br>
    <label for="">Родительская категория</label>
    <select class="form-control" name="parent_id">
  <option value="0">-- без родительской категории --</option>
  @include('admin.categories.tree.category', ['categories' => $categories])
   </select>
   <label for="">Публикация</label>
   <select class="form-control" name="published">
    <option value="0">Опубликовано</option>
    <option value="1">Не Опубликовано</option>
     </select>
     <input type="submit" value="Сохранит">


</p>

</form>



@endsection
