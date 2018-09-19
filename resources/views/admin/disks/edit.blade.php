@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Edit Disk @endslot
    @slot('parent') Admin @endslot
    @slot('active') Disk @endslot
  @endcomponent

  <hr />

  <form class="form-horizontal" action="{{route('admin.disk.update', $disk)}}" method="post">
    <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.disks.partials.form')

    <input type="hidden" name="modified_by" value="{{Auth::id()}}">
  </form>
</div>

@endsection