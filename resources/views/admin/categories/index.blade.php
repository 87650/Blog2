@extends('layouts.app')

@section('content')

<a href="{{route('admin.category.create')}}"> Создать категорию </a>

<div>
    @if (isset($categories))
@foreach ($categories as $category)

{{$category->id}}
<a href="{{route('admin.category.show', $category)}}"> {{$category->title}} </a> <a href="{{route('admin.category.edit', $category)}}"> Редактировать </a>
<br>

@endforeach
@endif
</div>

@endsection
