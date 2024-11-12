<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\GiftItem;
use App\Http\Images;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class GiftItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $models = GiftItem::all();
            return DataTables::of($models)
            ->addIndexColumn()
            ->editColumn('image', function ($model) {
                return Images::show($model->photo);
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
                return view('admin.gift.action', compact('model'));
            })
            ->rawColumns(['action', 'status', 'image'])
            ->make(true);
        }

        return view('admin.gift.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gift.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = null;

        if($request->photo) {
            $photo = Images::upload('gift', $request->photo);
        }

        GiftItem::create([
            'name' => $request->name,
            'photo' => $photo,
            'quantity' => $request->quantity,
            'status' => $request->status,
        ]);

        return response()->json(['status' => true, 'load' => true, 'message' => 'Record created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = GiftItem::findOrFail($id);
        return view('admin.gift.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = GiftItem::findOrFail($id);
        return view('admin.gift.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = GiftItem::findOrFail($id);
        $model->name = $request->name;
        $model->quantity = $request->quantity;
        $model->status = $request->status;

        if($request->photo) {
            $model->photo = Images::upload('gift', $request->photo);
        }

        $model->save();

        return response()->json(['status' => true, 'load' => true, 'message' => 'Record updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = GiftItem::findOrFail($id);
        $model->delete();

        return response()->json(['status' => true, 'load' => true, 'message' => 'Record deleted successfully']);
    }
}
