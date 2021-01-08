<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Banner;
use App\Models\Services;
use App\Models\Section;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard(){
        $admin = User::where('admin', 1)->get()->count();
        $users = User::where('admin', 0)->get()->count();
        $banners = Banner::count();
        $services = Services::count();
        $sections = Section::count();
        return view('Admin.dashboard', compact('admin', 'users', 'banners', 'services', 'sections'));
    }
}
