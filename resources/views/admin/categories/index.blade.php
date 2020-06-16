@extends('layouts.app')

@section('content')

<a href="{{route('admin.category.create')}}"> Создать категорию </a>

<div>
    @if (isset($categories))
@foreach ($categories as $item)

{{$categories->id}}

@endforeach
@endif
</div>

@endsection
