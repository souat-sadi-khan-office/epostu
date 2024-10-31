<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Images;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $models = Blog::all();
            return Datatables::of($models)
            ->addIndexColumn()
            ->editColumn('image', function ($model) {
                return Images::show($model->thumb_image);
            })
            ->editColumn('status', function ($model) {
                if($model->status == 1) {
                    $status = '<span class="badge badge-success">Active</span>';
                } else {
                    $status = '<span class="badge badge-danger">Inactive</span>';
                }

                return $status;
            })
            
            ->addColumn('action', function ($model) {
                return view('admin.support.blog.action', compact('model'));
            })
            ->rawColumns(['action', 'status', 'image'])
            ->make(true);
        }

        return view('admin.support.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.support.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $thumb_image = null;
        $main_image = null;

        if($request->thumb_image) {
            $thumb_image = Images::upload('knowledge-base', $request->thumb_image);
        }

        if($request->main_image) {
            $main_image = Images::upload('knowledge-base', $request->main_image);
        }

        $blog = Blog::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'tag' => $request->tag,
            'thumb_image' => $thumb_image,
            'main_image' => $main_image,
            'short_details' => $request->short_details,
            'details' => $request->description,
            'site_title' => $request->site_title,
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'status' => $request->status,
        ]);

        return response()->json(['status' => true, 'goto' => route('admin.knowledge-base.index'), 'message' => 'Record created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Blog::findOrFail($id);
        return view('admin.support.blog.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $model = Blog::findOrFail($id);
        $model->name = $request->name;
        $model->slug = $request->slug;
        $model->tag = $request->tag;
        $model->short_details = $request->short_details;
        $model->details = $request->description;
        $model->site_title = $request->site_title;
        $model->meta_title = $request->meta_title;
        $model->meta_keyword = $request->meta_keyword;
        $model->meta_description = $request->meta_description;
        $model->status = $request->status;

        if($request->thumb_image) {
            $model->thumb_image = Images::upload('knowledge-base', $request->thumb_image);
        }

        if($request->main_image) {
            $model->main_image = Images::upload('knowledge-base', $request->main_image);
        }

        $model->save();

        return response()->json(['status' => true, 'goto' => route('admin.knowledge-base.index'), 'message' => 'Record updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Blog::findOrFail($id);
        $model->delete();

        return response()->json(['status' => true, 'load' => true, 'message' => 'Record deleted successfully']);
    }

    public function checkSlug(Request $request)
    {
        // Generate slug from the name
        $slug = Str::slug($request->name);
        $originalSlug = $slug;

        // Check if slug exists and make it unique
        $count = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return response()->json(['slug' => $slug]);
    }

}
