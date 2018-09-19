<?php

namespace App\Http\Controllers\Admin;

use App\Singer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.singers.index', [
              'singers' => Singer::paginate(10)
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.singers.create', [
              'singer'   => [],
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
           Singer::create($request->all());
           return redirect()->route('admin.singer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function show(Singer $singer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function edit(Singer $singer)
    {
        return view('admin.singers.edit', [
              'singer'   => $singer,
              'singers' => Singer::get(),
              'delimiter'  => ''
           ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Singer $singer)
    {
        $singer->update($request->all());
        return redirect()->route('admin.singer.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Singer $singer)
    {
        $singer->delete();
        return redirect()->route('admin.singer.index');
    }
}
