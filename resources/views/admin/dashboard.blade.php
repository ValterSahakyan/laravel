@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="jumbotron">
                <p><span class="label label-primary">Singers 0</span></p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="jumbotron">
                <p><span class="label label-primary">Disks 0</span></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <a class="btn btn-block btn-default" href="#">Create Singer</a>
            <a class="list-group-item" href="#">
                <h4 class="list-group-item-heading">First Singer</h4>
                <p class="list-group-item-text">
                    Disks
                </p>
            </a>
        </div>
        <div class="col-sm-6">
            <a class="btn btn-block btn-default" href="#">Create Disk</a>
            <a class="list-group-item" href="#">
                <h4 class="list-group-item-heading">First Disk</h4>
                <p class="list-group-item-text">
                    Singers
                </p>
            </a>
        </div>
    </div>
</div>
@endsection