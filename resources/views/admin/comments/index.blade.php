 @extends('layouts.app')

@section('content')
@foreach ($comments as $item)
Автор {{$item->name_create}} <br>
{{$item->coment}}
<br>

<a href="{{route('admin.comments.create')}}"> Написать комментарий</a>
@endforeach


@endsection
