<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::orderBy('id', 'DESC')->paginate(10);
        return view('backend.banner.index')->with('banners', $banner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentCategories = Category::getAllParentWithChild();
        return view('backend.banner.create')->with('parent_cats', $parentCategories);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        /*  dd($request->all()); */
        // return $request->all();
        $this->validate($request, [
            'series' => 'string|required|max:50',
            'category' => 'string|required|max:50',
            'cat_id' => 'string|required|max:50',
            'sub_category' => 'string|required|max:50',
            'description' => 'string|nullable',
            'photo' => 'string|required',
            'cat_logo' => 'string|nullable',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->sub_category);
        $count = Banner::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        /*    dd($data); */
        // return $slug;
        $status = Banner::create($data);

        if ($status) {
            request()->session()->flash('success', 'Banner successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred while adding banner');
        }
        return redirect()->route('banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parentCategories = Category::getAllParentWithChild();
        $banner = Banner::findOrFail($id);
        return view('backend.banner.edit')->with(['banner'=>$banner,'parent_cats'=> $parentCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* dd($request->all()); */
        $banner = Banner::findOrFail($id);
        $this->validate($request, [
            'series' => 'string|required|max:50',
            'category' => 'required|max:50',
            'cat_id' => 'string|required|max:50',
            'cat_logo' => 'string|nullable',
            'sub_category' => 'string|required|max:50',
            'description' => 'string|nullable',
            'photo' => 'string|required',

            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();

        $status = $banner->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Banner successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating banner');
        }
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $status = $banner->delete();
        if ($status) {
            request()->session()->flash('success', 'Banner successfully deleted');
        } else {
            request()->session()->flash('error', 'Error occurred while deleting banner');
        }
        return redirect()->route('banner.index');
    }
}
