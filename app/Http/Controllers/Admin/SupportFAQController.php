<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SupportFAQ;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class SupportFAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $models = SupportFAQ::all();
            return Datatables::of($models)
                ->addIndexColumn()
                ->editColumn('answer', function ($model) {
                    return Str::limit($model->answer, 50);
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
                    return view('admin.support.faq.action', compact('model'));
                })
                ->rawColumns(['action', 'name', 'status'])
                ->make(true);
        }

        return view('admin.support.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.support.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SupportFAQ::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'status' => $request->status
        ]);

        return response()->json(['status' => true, 'load' => true, 'message' => 'Record created successfully']);
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
        $model = SupportFAQ::findOrFail($id);
        return view('admin.support.faq.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = SupportFAQ::findOrFail($id);
        $model->question = $request->question;
        $model->answer = $request->answer;
        $model->status = $request->status;
        $model->save();

        return response()->json(['status' => true, 'load' => true, 'message' => 'Record updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = SupportFAQ::findOrFail($id);
        $model->delete();

        return response()->json(['status' => true, 'load' => true, 'message' => 'Record deleted successfully']);
    }
}
