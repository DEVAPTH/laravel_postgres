<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PersonalDetail;
use App\Models\PersonalProfile;
use App\Http\Custom\CustomHelper;
use App\Models\PersonalDetailData;
use Database\Seeders\PersonalData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function getAdminList()
    {
        $admin_list = User::all();
        return view('dashboard.pages.admin', compact('admin_list'));
    }

    public function createAdmin()
    {
        return view('dashboard.pages.admin_create');
    }

    public function store(Request $request)
    {

        $obj = new CustomHelper();
        $obj->adminCreate($request);

        return redirect()->route('dashboard.admin-list')->with('status','Successfull Data Create');
    }

    public function destroy($id)
    {
        if(Auth::user()->type =='admin'){
            return redirect()->route('dashboard.admin-list')->with('status','Do not allowed to delete for admin account?');
        }else{
            $data =  User::find($id);
            $data->delete();
            return redirect()->route('dashboard.admin-list')->with('status','Successfull Data Delete');
        }
    }

    public function show($id)
    {
        $data = User::find($id);
        return view('dashboard.pages.admin_edit', compact('data'));
    }

    public function update(Request $request,$id)
    {
        $obj = new CustomHelper();
        $obj->adminUpdate($request,$id);

        return redirect()->route('dashboard.admin-list')->with('status','Successfull Data Update');
    }



}
