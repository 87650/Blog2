@extends('layouts.app')

@section('content')

@if (isset($categories))

<form action="{{route('admin.category.store')}}">
    <input type="text" name="title"> Категория
    @if($categories->parent_id != 0)
    <input type="text" name="parent_id"> Родительская Категория {{$categories->parent_id}}
    @endif
    @else
    <input type="text"  name="parent_id"> Родительская Категория
    @endelse
    <input type="text" name="published"> Публикация

</form>
@endif


@endsection
