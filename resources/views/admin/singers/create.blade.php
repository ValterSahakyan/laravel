@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Singers List @endslot
    @slot('parent') Admin @endslot
    @slot('active') Singers @endslot
  @endcomponent

  <hr />

  <form class="form-horizontal" action="{{route('admin.singer.store')}}" method="post">
    {{ csrf_field() }}

    {{-- Form include --}}
    @include('admin.singers.partials.form')
    
  </form>
</div>

@endsection