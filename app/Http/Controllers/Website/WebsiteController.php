<?php

namespace App\Http\Controllers\Website;

use App\Models\Banner;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $banners = Banner::orderBy('id', 'DESC')->get();
        $photos = Gallery::all();
        return view('welcome', compact('banners', 'photos'));
    }

    public function about(){
        $members = Team::all();
        return view('client.about', compact('members'));
    }

    public function services(){
        $running_services = Services::where('is_upcoming', '=', null)->get();
        $upcoming_services = Services::where('is_upcoming', '=', 'on')->get();
        return view('client.services', compact('running_services', 'upcoming_services'));
    }

    public function servicesShow($id){
        $service = Services::where('id', $id)->first();
        return view('client.service-show', compact('service'));
    }

    public function contact(){
        return view('client.contact');
    }

    public function login(){
        return view('Auth.login');
    }

    public function register(){
        return view('Auth.register');
    }

    public function reset(){
        return view('Auth.reset');
    }

    public function mailSend(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255'],
            'message' => 'required',
        ]);

        var_dump($request->all());
    }

    public function denied(){
        return view('denied');
    }
}
