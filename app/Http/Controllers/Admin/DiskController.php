<?php

namespace App\Http\Controllers\Admin;

use App\Disk;
use App\Singer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiskController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('admin.disks.index', [
            'disks' => Disk::orderBY('created_at','desc')->paginate(10)
        ]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('admin.disks.create', [
            'disk'    => [],
            'singers' => Singer::get(),
            'delimiter'  => ''
        ]);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $disk = Disk::create($request->all());
        if($request->input('singers')) :
            $disk->singers()->attach($request->input('singers'));
        endif;

        return redirect()->route('admin.disk.index');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Disk  $disk
    * @return \Illuminate\Http\Response
    */
    public function show(Disk $disk)
    {
    //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Disk  $disk
    * @return \Illuminate\Http\Response
    */
    public function edit(Disk $disk)
    {
        return view('admin.disks.edit', [
            'disk'    => $disk,
            'singers' => Singer::get(),
            'delimiter'  => ''
        ]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Disk  $disk
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Disk $disk)
    {
        $disk->update($request->all());
        $disk->singers()->detach();
        if($request->input('singers')) :
            $disk->singers()->attach($request->input('singers'));
        endif;

        return redirect()->route('admin.disk.index');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Disk  $disk
    * @return \Illuminate\Http\Response
    */
    public function destroy(Disk $disk)
    {
    //
        $disk->singers()->detach();
        $disk->delete();

        return redirect()->route('admin.disk.index');
    }
}
