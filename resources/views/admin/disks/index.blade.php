@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

	@component('admin.components.breadcrumb')
	@slot('title') Disks List @endslot
	@slot('parent') Admin @endslot
	@slot('active') Disks @endslot
	@endcomponent

	<hr>
	<a href="{{route('admin.disk.create')}}" class="btn btn-primary pull-right">
		<i class="fa fa-plus-square-o"></i> Create Disk
	</a>
	<table class="table table-striped">
		<thead>
			<th>Name</th>
			<th class="text-right">Action</th>
		</thead>
		<tbody>
			@forelse ($disks as $disk)
			<tr>
				<td>{{$disk->name}}</td>
				<td class="text-right">
					<form onsubmit="if(confirm('Delete ?')){return true}else{return false}" action="{{route('admin.disk.destroy',$disk)}}" method="post">
					<input type="hidden" name="_method" value="DELETE">	
					{{ csrf_field()}}
					<a class="btn btn-default" href="{{route('admin.disk.edit', $disk)}}"><i class="fa fa-edit"></i></a>
					<button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
					</form>
				</td>
			</tr>
			@empty
			<tr>
				<td colspan="3" class="text-center"><h2>No data available</h2></td>
			</tr>
			@endforelse
		</tbody>
		<tfoot>
			<tr>
				<td colspan="3">
					<ul class="pagination pull-right">
						{{$disks->links()}}
					</ul>
				</td>
			</tr>
		</tfoot>
	</table>
</div>

@endsection