@foreach ($singers as $singer_list)

  <option value="{{$singer_list->id or ""}}">
    {!! $delimiter or "" !!}{{$singer_list->name or ""}}
  </option>

@endforeach