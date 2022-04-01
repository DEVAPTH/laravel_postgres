<?php

namespace App\Http\Controllers;

use App\Models\PersonalDetail;
use App\Models\PersonalDetailData;
use App\Models\PersonalProfile;
use Database\Seeders\PersonalData;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function personal_profile()
    {
        $datas =DB::connection('pgsql')->table('personal_profiles')->get();
        return view('home',compact('datas'));
    }

    public function personal_list($id)
    {
        $data = PersonalProfile::find($id);
        return view('layouts.personal.detail',compact('data'));
    }

    public function personal_detail()
    {
        $datas=DB::connection('pgsql_second')->table('personal_details')->get();
        return view('layouts.personal.personal_data',compact('datas'));
    }

    public function personal_show($id)
    {
        // $detail = PersonalDetail::find($id);
        // dd($detail);
    }

}
