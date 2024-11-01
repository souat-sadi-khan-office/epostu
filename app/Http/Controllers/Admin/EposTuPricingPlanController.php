<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\EpostuPricingPlan;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class EposTuPricingPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $models = EpostuPricingPlan::all();
            return Datatables::of($models)
                ->addIndexColumn()
                ->editColumn('plan', function($model) {
                    $plan = get_settings('basic_plan_name');
                    if($model->plan_id == 2) {
                        $plan = get_settings('premium_plan_name');
                    } else if($model->plan_id == 3) {
                        $plan = get_settings('corporate_plan_name');
                    }

                    return $plan;
                })
                ->editColumn('status', function ($model) {

                    if($model->status == 1) {
                        $status = '<span class="badge badge-success">Active</span>';
                    } else {
                        $status = '<span class="badge badge-danger">Inactive</span>';
                    }

                    return $status;
                })
                ->editColumn('checked', function ($model) {

                    if($model->checked == 1) {
                        $checked = '<span class="badge badge-success">Checked</span>';
                    } else {
                        $checked = '<span class="badge badge-danger">Unchecked</span>';
                    }

                    return $checked;
                })
                ->addColumn('action', function ($model) {
                    return view('admin.epostu.pricing.action', compact('model'));
                })
                ->rawColumns(['action', 'plan', 'checked', 'status'])
                ->make(true);
        }

        return view('admin.epostu.pricing.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.epostu.pricing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        EpostuPricingPlan::create([
            'name' => $request->name,
            'plan_id' => $request->plan_id,
            'checked' => $request->checked,
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
        $model = EpostuPricingPlan::findOrFail($id);
        return view('admin.epostu.pricing.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = EpostuPricingPlan::findOrFail($id);
        $model->name = $request->name;
        $model->plan_id = $request->plan_id;
        $model->checked = $request->checked;
        $model->status = $request->status;
        $model->save();

        return response()->json(['status' => true, 'load' => true, 'message' => 'Record updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = EpostuPricingPlan::findOrFail($id);
        $model->delete();

        return response()->json(['status' => true, 'load' => true, 'message' => 'Record deleted successfully']);
    }
}
