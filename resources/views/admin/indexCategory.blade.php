@extends('layouts.app')

@section('content')
@foreach ($posts as $item)
{{$item->title}}
@endforeach

@endsection
