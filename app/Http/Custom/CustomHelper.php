<?php

namespace App\Http\Custom;

use App\Models\PersonalProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomHelper{

    public function createData(Request $request)
    {

        PersonalProfile::create([
            'pic'=>$request->pic,
            'nrc_name' => $request->nrc_name,
            'nick_name' => $request->nick_name,
            'age' => $request->age,
            'height_feet' => $request->height_feet,
            'height_inches' => $request->height_inches,
            'address' => $request->address,
            'country_code' => $request->country_code,
            'phone_number' => $request->phone_number,
            'about_report' => $request->about_report,
            'consent_to_responsibility' => $request->consent_to_responsibility,
            'report_state' => $request->report_state,
            'last_updated' => $request->last_updated,
            'moderated_by_id' => $request->moderated_by_id,
            'report_division' => $request->report_division,
            'reported_by_id' => $request->reported_by_id,
            'skin_color' => $request->skin_color,
            'physical_appearance' => $request->physical_appearance,
            'facebook_username'=>$request->facebook_username,
            'telegram_username'=>$request->telegram_username
        ]);
    }

    public function adminCreate(Request $request)
    {
        $validator = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'type'=>$request->type,
        ]);
    }

}
