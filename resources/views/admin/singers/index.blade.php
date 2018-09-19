@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

@component('admin.components.breadcrumb')
@slot('title') Singers List @endslot
@slot('parent') Admin @endslot
@slot('active') Singers @endslot
@endcomponent

<hr>

<a href="{{route('admin.singer.index')}}" class="btn btn-primary pull-right">
  <i class="fa fa-plus-square-o"></i> Create Singer
</a>
<table class="table table-striped">
<thead>
<th>Name</th>
<th>Published</th>
<th class="text-right">Action</th>
</thead>
<tbody>
@forelse ($singers as $singer)
<tr>
<td>{{$singer->name}}</td>
<td>{{$singer->published}}</td>
<td>
<a href="{{route('admin.singer.edit', ['id'=>$singer->id])}}"><i class="fa fa-edit"></i></a>
</td>
</tr>
@empty
<tr>
<td colspan="3" class="text-center"><h2>No data available</h2></td>
</tr>
@endforelse
</tbody>
</table>
</div>

@endsection