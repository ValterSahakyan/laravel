@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Edit Singer @endslot
    @slot('parent') Admin @endslot
    @slot('active') Singers @endslot
  @endcomponent

  <hr />

  <form class="form-horizontal" action="{{route('admin.singer.update',$singer)}}" method="post">
    <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.singers.partials.form')
    
  </form>
</div>

@endsection