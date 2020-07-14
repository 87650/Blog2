@extends('layouts.app')

@section('content')


<form action="{{route('admin.comments.store')}}" method="POST">
    {{csrf_field()}}
<p>

    <input type="text" name="title"> Комментарий
     <br>

    <label for="">Родительская категория</label>
    <select class="form-control" name="parent_id">
  <option value="0">-- без родительской категории --</option>
  @include('admin.categories.tree.category', ['categories' => $categories])
   </select>

     </select>
     <input type="submit" value="Сохранить">


</p>

</form>

@endsection
