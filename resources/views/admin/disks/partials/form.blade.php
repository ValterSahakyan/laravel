
<label for="">Name</label>
<input type="text" class="form-control" name="name" placeholder="Disk name" value="{{$disk->name or ""}}" required>


<label for="">Singers</label>
<select class="form-control" name="singers[]" multiple="">
  @include('admin.disks.partials.singers', ['singers' => $singers])
</select>

<hr />

<input class="btn btn-primary" type="submit" value="Save">