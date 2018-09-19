@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Create Disk @endslot
    @slot('parent') Admin @endslot
    @slot('active') Disks @endslot
  @endcomponent

  <hr />

  <form class="form-horizontal" action="{{route('admin.disk.store')}}" method="post">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.disks.partials.form')

    <input type="hidden" name="created_by" value="{{Auth::id()}}">
  </form>
</div>

@endsection