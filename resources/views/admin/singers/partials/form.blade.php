<label for="">Status</label>
<select class="form-control" name="published">
  @if (isset($singer->id))
    <option value="0" @if ($singer->published == 0) selected="" @endif>Not published</option>
    <option value="1" @if ($singer->published == 1) selected="" @endif>Published</option>
  @else
    <option value="0">Not published</option>
    <option value="1">Published</option>
  @endif
</select>

<label for="">Name</label>
<input type="text" class="form-control" name="name" placeholder="Singer name" value="{{$singer->name or ""}}" required>

<hr />

<input class="btn btn-primary" type="submit" value="Save">

