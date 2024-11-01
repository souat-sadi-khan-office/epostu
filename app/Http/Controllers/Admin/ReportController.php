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
                ->editColumn('created_at', function ($model) {
                    return date('d F, Y h:i A', strtotime($model->created_at));
                })
                ->editColumn('name', function ($model) {
                    return $model->first_name. ' '. $model->last_name;
                })
                ->editColumn('status', function ($model) {
                    if($model->status) {
                        $status = '<span class="badge badge-success">Verified</span>';
                    } else {
                        $status = '<span class="badge badge-danger">Unverified</span>';
                    }

                    return $status;
                })
                ->addColumn('action', function ($model) {
                    return view('admin.report.partner.action', compact('model'));
                })
                ->rawColumns(['action', 'status', 'created_at', 'name'])
                ->make(true);
        }

        return view('admin.report.partner.index');
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

    public function partnersShow($id)
    {
        $model = Partner::findOrFail($id);
        return view('admin.report.partner.show', compact('model'));
    }

    public function partnersEdit($id)
    {
        $model = Partner::findOrFail($id);
        return view('admin.report.partner.edit', compact('model'));
    }
    
    public function partnersUpdate(Request $request, $id)
    {
        $model = Partner::findOrFail($id);
        $model->first_name = $request->first_name;
        $model->last_name = $request->last_name;
        $model->email = $request->email;
        $model->phone = $request->phone;
        $model->company_name = $request->company_name;
        $model->contact_person = $request->contact_person;
        $model->status = $request->status;
        $model->save();

        return response()->json([
            'status' => true, 
            'load' => true,
            'message' => "Record updated successfully"
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
