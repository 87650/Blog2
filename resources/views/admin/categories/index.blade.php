@extends('layouts.app')

@section('content')

<a href="{{route('admin.category.create')}}"> Создать категорию </a>

<div>
@foreach ($categories as $item)

{{$categories->id}}

@endforeach
</div>

@endsection
