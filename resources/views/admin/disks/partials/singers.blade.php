@foreach ($singers as $singer)

  <option value="{{$singer->id or ""}}"

    @isset($disk->id)
      @foreach ($disk->singers as $singer_disk)
        @if ($singer->id == $singer_disk->id)
          selected="selected"
        @endif
      @endforeach
    @endisset

    >
    {!! $delimiter or "" !!}{{$singer->name or ""}}
  </option>

  
@endforeach