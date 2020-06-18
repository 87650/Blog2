
@foreach ($categories as $category)

@if ($category->first()->parent_id == 0)
<option value="{{$category->first()->id}}">{{$category->first()->title}}</option>
@endif

@endforeach
