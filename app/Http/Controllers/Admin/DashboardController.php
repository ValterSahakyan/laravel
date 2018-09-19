<?php

namespace App\Http\Controllers\Admin;
use App\Disk;
use App\Singer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	public function dashboard() {
		return view('admin.dashboard',[
			'singers' => Singer::Singers(),
			'disks'   => Disk::Disks(),
			'count_singers' => Singer::count(),
			'count_disks'   => Disk::count(),
		]);
	}
}
