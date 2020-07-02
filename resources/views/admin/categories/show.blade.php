@extends('layouts.app')

@section('content')
{{$category->id}}
{{$category->title}}
<form onsubmit="if(confirm('удалить?')){return true}else{return false}"
action="{{route('admin.category.destroy', $category)}}" method="POST">
<input type="hidden" name="_method" value="DELETE">
{{csrf_field()}}
<a href="{{route('admin.category.edit', $category)}}"> Редактировать </a>
<button type="submit">Удалить</button>
</form>
<br>

@endsection
