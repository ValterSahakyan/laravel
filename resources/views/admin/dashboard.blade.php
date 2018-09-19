@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="jumbotron">
                <p><span class="label label-primary">Singers {{$count_singers}}</span></p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="jumbotron">
                <p><span class="label label-primary">Disks {{$count_disks}}</span></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <a class="btn btn-block btn-default" href="{{route('admin.singer.create')}}">Create Singer</a>
            @foreach ($singers as $singer)
            <a class="list-group-item" href="{{route('admin.singer.edit',$singer)}}">
                <h4 class="list-group-item-heading">{{$singer->name}}</h4>
                <p class="list-group-item-text">
                    {{$singer->disks()->count()}}
                </p>
            </a>
            @endforeach
        </div>
        <div class="col-sm-6">
            <a class="btn btn-block btn-default" href="{{route('admin.disk.create')}}">Create Disk</a>
            @foreach ($disks as $disk)
            <a class="list-group-item" href="{{route('admin.disk.edit',$disk)}}">
                <h4 class="list-group-item-heading">{{$disk->name}}</h4>
                <p class="list-group-item-text">
                    {{$disk->singers()->pluck('name')->implode(', ')}}
                </p>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection