<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required|max:100'
        ]);

        $tag = new Tag;
        $tag->name = request('name');
        $tag->save();
        session()->flash('message',"{$tag->name}".' created');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
       
        $title = 'Add tags';
        $tags = Tag::select('name','id')->get();

        return view('admin.add',compact('title','tags'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit';
        $tag = Tag::findOrFail($id);
        return view('admin.edit_tag',compact('title','tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Tag $tag)
    {
        $tag = Tag::findOrFail($id);
        $tag->name = request('name');
        $tag->update();
        session()->flash('message',"{$tag->name}".' updated');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        session()->flash('message',"{$tag->name}".' deleted');
        return back();
    }
}
