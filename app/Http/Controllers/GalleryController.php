<?php

namespace App\Http\Controllers;
use App\Gallery;
use App\Tag;
use App\PaginationCounter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Collective\Html\HtmlFacade;
use Auth;
use Illuminate\Support\Facades\Hash;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['role:user']);
    }

    public function index()
    {

        $title = 'Gallery';
        $paginationNr = PaginationCounter::first();
        $galleryNr = $paginationNr->gallery;
        $gallery = Gallery::orderBy('id', 'desc')->Paginate($galleryNr);
        if (count($gallery)<=0)
            return view('admin.empty_trash',compact('title'));
        else
        return view('admin.gallery', compact('title','gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add photos';
        $tags = Tag::select('name','id')->get();

        return view('client.addPhotos',compact('title','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'gallery_image'    => 'required',
            'tags'    => 'required'
        ]);

        $gallery_storage = public_path('storage/galleries/');
        $large_photos_storage = public_path('storage/large_photos/');
        $medium_photos_storage = public_path('storage/medium_photos/');
        $mobile_photos_storage = public_path('storage/mobile_photos/');
        $tiny_photos_storage = public_path('storage/tiny_photos/');
        $files = request()-> file('gallery_image');

        foreach ($files as $file) {
            if ($file->getClientSize() < 3145728) {
                session()->flash('message','Photos should be at least 3 Mb');
                return back();
            }else
        $gallery = new Gallery;
        $gallery -> user_id = auth()->id();
        $gallery -> unique_id = uniqid();
        $gallery -> alternative_text = Auth::user()->name.' '.'photos on'.' '.config('app.name');
        $gallery -> description = request('description');
        $gallery -> location = request('location');
        $gallery -> gallery_image = $file->hashName();
        $image = Image::make($file->getRealPath());

        $image->save($gallery_storage.$file->hashName(),100)

        ->resize(860, null, function ($constraint) {
        $constraint->aspectRatio();
        })->save($large_photos_storage.$file->hashName(),85)

        ->resize(640, null, function ($constraint) {
        $constraint->aspectRatio();
        })->save($medium_photos_storage.$file->hashName(),85)

        ->resize(420, null, function ($constraint) {
        $constraint->aspectRatio();
        })->save($mobile_photos_storage.$file->hashName(),85)

        ->resize(10, null, function ($constraint) {
        $constraint->aspectRatio();
        })->blur(1)->save($tiny_photos_storage.$file->hashName(),85);

        $gallery->downloads = 0;
        $gallery->save();
        $tag = $request->input('tags');
        $gallery->tags()->sync($tag);
         }
        session()->flash('message','Photo(s) added');
        return back();

         // $files = request()-> file('gallery_image');
        // foreach ($files as $file) {
        // $gallery = new Gallery;
        // $gallery -> user_id = auth()->id();
        // $file->store('galleries');
        // $gallery -> gallery_image = $file->hashName();
        // $gallery->save();
        // $tag = $request->input('tags');
        // $gallery->tags()->sync($tag);
        // }
        // session()->flash('message','Image(s) added');
        // return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
        {
            $gallery = Gallery::findOrFail($id);
            $gallery->forceDelete();
            $gallery->favorites()->delete();
            Storage::delete('storage/galleries/'.$gallery->gallery_image);
            Storage::delete('storage/large_photos/'.$gallery->gallery_image);
            Storage::delete('storage/medium_photos/'.$gallery->gallery_image);
            Storage::delete('storage/mobile_photos/'.$gallery->gallery_image);
            Storage::delete('storage/tiny_photos/'.$gallery->gallery_image);
            session()->flash('message','Photo deleted');
            return back();
        }
}
