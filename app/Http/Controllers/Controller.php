<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\S1DogReport;
use Illuminate\Http\Request;
use App\Http\Custom\CustomHelper;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests,ApiResponser;


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

    public function getReport($id)
    {
        $datas=S1DogReport::find($id);
        return view('dashboard.detail',['data'=>$datas]);
    }

    public function updateReport(Request $request,$id)
    {
       $dogs = S1DogReport::findOrFail($id);
        if($request->hasFile('pic')){
            $file = $request->file('pic');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/dog/',$filename);
            $dogs->update([
                'pic'=>$filename
            ]);
        }else{
            $dogs->update([
                'nrc_name'=>$request->nrc_name,
                'nick_name'=>$request->nick_name,
                'age'=>$request->age,
                'height_feet'=>$request->height_feet,
                // 'height_inches'=>$request->height_inches,
                'address'=>$request->address,
                // 'country_code'=>$request->country_code,
                'phone_number'=>$request->phone_number,
                'about_report'=>$request->about_report,
                'consent_to_responsibility'=>$request->consent_to_responsibility,
                'report_state'=>$request->report_state,
                // 'last_updated'=>$request->last_updated,
                'moderated_by'=>$request->moderated_by,
                'report_division'=>$request->report_division,
                'reported_by'=>$request->reported_by,
                'skin_color'=>$request->skin_color,
                'physical_appearance'=>$request->physical_appearance,
                'facebook_username'=>$request->facebook_username,
                'telegram_username'=>$request->telegram_username
            ]);
        }
    return redirect()->route('dashboard.s1-report-lists')->with('success','Dog updated Successfull');
    }

}
