 @extends('layouts.app')

@section('content')
<a href="{{route('admin.comments.create')}}"> Написать комментарий</a>
@if (isset($commentss))
<div>
@foreach ($commentss as $comments)
Автор {{$comments->name_create}} <br>

<a href="{{ route('admin.comments.show', $comments->id) }}"> {{$comments->coment}} </a>
<a href="{{route('admin.comments.edit', $comments)}}"> Редактировать</a>

@endforeach
@endif
</div>

@endsection
