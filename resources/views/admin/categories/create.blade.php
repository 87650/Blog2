@extends('layouts.app')

@section('content')


<form action="{{route('admin.category.store')}}">
    <input type="text"> Категория

</form>


@endsection
