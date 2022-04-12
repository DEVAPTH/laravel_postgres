<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Custom\CustomHelper;

class S3Controller extends Controller
{

    public function store(Request $request)
    {
        // $result=$request->validate([
        //     'name' => 'required',
        //     'name' => 'required',
        //     'name' => 'required',
        //     'name' => 'required',
        //     'name' => 'required',
        //     'name' => 'required',
        //     'name' => 'required',
        //     'name' => 'required',
        //     'name' => 'required',
        //     'name' => 'required',
        //     'name' => 'required',
        //     'name' => 'required',
        //     'name' => 'required',
        // ]);
        // $file = $request->file('pic');
        // $filename = uniqid().'_'.$file->getClientOriginalName();
        // $file->move(public_path().'/uploads/',$filename);

        // //Data Store
        // $data =new S3DogReport();
        // $data->pic = $filename;
        // $data->nrc_name = $request->nrc_name;
        // $data->nick_name = $request->nick_name;
        // $data->age = $request->age;
        // $data->height_feet = $request->height_feet;
        // $data->height_inches = $request->height_inches;
        // $data->address = $request->address;
        // $data->country_code = $request->country_code;
        // $data->phone_number = $request->phone_number;
        // $data->about_report = $request->about_report;
        // $data->consent_to_responsibility = $request->consent_to_responsibility;
        // $data->report_state = $request->report_state;
        // $data->last_updated = $request->last_updated;
        // $data->moderated_by = $request->moderated_by;
        // $data->report_division = $request->report_division;
        // $data->reported_by = $request->reported_by;
        // $data->skin_color = $request->skin_color;
        // $data->physical_appearance = $request->physical_appearance;
        // $data->facebook_username = $request->facebook_username;
        // $data->telegram_username = $request->telegram_username;
        // $data->save();

        // return redirect('/dahsboard/s3-reports')->with('status','Successfull Data Create For S1');
    }

}
