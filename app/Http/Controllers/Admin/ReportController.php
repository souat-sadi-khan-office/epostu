<?php

namespace App\Http\Controllers\Admin;

use Yajra\DataTables\Facades\DataTables;
use App\Models\Partner;
use App\Models\Subscriber;
use App\Models\ContactMessage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function partners(Request $request)
    {
        if ($request->ajax()) {
            $models = Partner::all();
            return Datatables::of($models)
                ->addIndexColumn()
                ->editColumn('name', function ($model) {
                    return $model->first_name. ' '. $model->last_name;
                })
                ->addColumn('action', function ($model) {
                    return view('admin.report.partners_action', compact('model'));
                })
                ->rawColumns(['action', 'name'])
                ->make(true);
        }

        return view('admin.report.partners');
    }

    public function destroyPartnerRecord($id) 
    {
        $model = Partner::findOrFail($id);
        $model->delete();

        return response()->json([
            'status' => true, 
            'load' => true,
            'message' => "Record deleted successfully"
        ]);
    }

    public function contactMessages(Request $request)
    {
        if ($request->ajax()) {
            $models = ContactMessage::all();
            return Datatables::of($models)
                ->addIndexColumn()
                ->editColumn('name', function ($model) {
                    return $model->first_name. ' '. $model->last_name;
                })
                ->addColumn('action', function ($model) {
                    return view('admin.report.message_action', compact('model'));
                })
                ->rawColumns(['action', 'name'])
                ->make(true);
        }

        return view('admin.report.message');
    }

    public function destroyContactMessage($id)
    {
        $model = ContactMessage::findOrFail($id);
        $model->delete();

        return response()->json([
            'status' => true, 
            'load' => true,
            'message' => "Record deleted successfully"
        ]);
    }

    public function subscriber(Request $request)
    {
        if ($request->ajax()) {
            $models = Subscriber::all();
            return Datatables::of($models)
                ->addIndexColumn()
                ->addColumn('action', function ($model) {
                    return view('admin.report.subscriber_action', compact('model'));
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.report.subscriber');
    }

    public function destroySubscriber($id)
    {
        $model = Subscriber::findOrFail($id);
        $model->delete();

        return response()->json([
            'status' => true, 
            'load' => true,
            'message' => "Record deleted successfully"
        ]);
    }
}
