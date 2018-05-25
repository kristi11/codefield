<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use App\Gallery;
use Illuminate\Support\Facades\Storage;

class GuestController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function signIn() {
    	$projects = Project::orderBy('id', 'desc')->limit(4)->get();
    	$photos =  Gallery::orderBy('views', 'desc')->limit(4)->get();
		return view ('client.signIn', compact('projects','photos'));
    }

    public function show_project() {
        $projects = Project::orderBy('id', 'desc')->limit(4)->get();
        return view ('client.signIn', compact('projects'));
    }

    public function g_project($title) {
        $widget = Project::where('title', $title)->first();
        $file_size = Storage::size('storage/zip_files/'.$widget->zip_file.'.zip');
        $size = number_format($file_size / 1048576,2);
        if (!in_array($widget->id, session('visited_projects', []))) 
            {
                session()->push('visited_projects', $widget->id);
                $widget->increment('views');
            }
        return view('guest.g_project',compact('widget','size'))->render();
    }

    public function g_photo($gallery_image) {
        $gallery = Gallery::where('gallery_image', $gallery_image)->first();
        // $gallery_image = $gallery->gallery_image;
        $file_size = Storage::size('storage/galleries/'.$gallery->gallery_image.'.jpeg');
        $size = number_format($file_size / 1048576,2);
        $path = public_path('storage/galleries/');
        list($width,$height) = getimagesize($path.$gallery_image);
        $w = $width; $h = $height;
        $type='jpeg';
        if (!in_array($gallery->gallery_image, session('visited_images', []))) 
            {
                session()->push('visited_images', $gallery_image);
                $gallery->increment('views');
            }
        return view('client.showImage',compact('gallery','size','w','h','type'))->render();
    }
}
