@extends('layouts.app')

@section('content')


@foreach ($categories as $item)

 <ul>
    <li>Категории
     <ul>
         @if ($item->parent_id == 0)
     <li><a href="{{route('id', $item->id)}}">{{$item->title}}</li>
     @endif
     </ul>
    </li>
        @if($item->parent_id != 0 && $item->parent_id)
<li>{{$item->title}}</li>
    @endif
   </ul>
   @endforeach
@endsection
