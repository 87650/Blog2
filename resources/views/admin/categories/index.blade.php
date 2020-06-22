@extends('layouts.app')

@section('content')

<a href="{{route('admin.category.create')}}"> Создать категорию </a>

<div>
    @if (isset($categories))
@foreach ($categories as $category)

{{$category->id}}
<a href="{{route('admin.category.show', $category)}}"> {{$category->title}} </a>

<form onsubmit="if(confirm('удалить?')){return true}else{return false}"
action="{{route('admin.category.destroy', $category)}}" method="POST">
<input type="hidden" name="_method" value="DELETE">
{{csrf_field()}}
<a href="{{route('admin.category.edit', $category)}}"> Редактировать </a>
<button type="submit">Удалить</button>
</form>
<br>

@endforeach
@endif
</div>

@endsection
