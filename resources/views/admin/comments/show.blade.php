@extends('layouts.app')

@section('content')

@foreach ($comments as $item)
@if ($item->id == $id)
{{$item->name_create}}
<br>
Комментарий {{$item->coment}}
@else
@php
    redirect()->route('admin.comments.index');
@endphp


@endif

@endforeach

@endsection
