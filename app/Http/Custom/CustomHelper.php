<?php

namespace App\Http\Custom;

use App\Models\User;
use App\Models\S1DogReport;
use App\Models\S2DogReport;
use App\Models\S3DogReport;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

use App\Models\PersonalProfile;
use Illuminate\Support\Facades\Auth;

class CustomHelper{

    public function createSOneData(Request $request)
    {
        $file = $request->file('pic');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);

        //Data Store
        $data =new S1DogReport();
        $data->setConnection('pgsql_db1');
        $data->pic = $filename;
        $data->nrc_name = $request->nrc_name;
        $data->nick_name = $request->nick_name;
        $data->age = $request->age;
        $data->height_feet = $request->height_feet;
        $data->height_inches = $request->height_inches;
        $data->address = $request->address;
        $data->country_code = $request->country_code;
        $data->phone_number = $request->phone_number;
        $data->about_report = $request->about_report;
        $data->consent_to_responsibility = $request->consent_to_responsibility;
        $data->report_state = $request->report_state;
        $data->last_updated = $request->last_updated;
        $data->moderated_by = $request->moderated_by;
        $data->report_division = $request->report_division;
        $data->reported_by = $request->reported_by;
        $data->skin_color = $request->skin_color;
        $data->physical_appearance = $request->physical_appearance;
        $data->facebook_username = $request->facebook_username;
        $data->telegram_username = $request->telegram_username;
        $data->save();

    }

    public function createSTwoData(Request $request)
    {
        $file = $request->file('pic');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);

        //Data Store
        $data =new S2DogReport();
        $data->setConnection('pgsql_db2');
        $data->pic = $filename;
        $data->nrc_name = $request->nrc_name;
        $data->nick_name = $request->nick_name;
        $data->age = $request->age;
        $data->height_feet = $request->height_feet;
        $data->height_inches = $request->height_inches;
        $data->address = $request->address;
        $data->country_code = $request->country_code;
        $data->phone_number = $request->phone_number;
        $data->about_report = $request->about_report;
        $data->consent_to_responsibility = $request->consent_to_responsibility;
        $data->report_state = $request->report_state;
        $data->last_updated = $request->last_updated;
        $data->moderated_by = $request->moderated_by;
        $data->report_division = $request->report_division;
        $data->reported_by = $request->reported_by;
        $data->skin_color = $request->skin_color;
        $data->physical_appearance = $request->physical_appearance;
        $data->facebook_username = $request->facebook_username;
        $data->telegram_username = $request->telegram_username;
        $data->save();

    }

    public function createSThreeData(Request $request)
    {
        $file = $request->file('pic');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);

        //Data Store
        $data =new S3DogReport();
        $data->setConnection('pgsql_db3');
        $data->pic = $filename;
        $data->nrc_name = $request->nrc_name;
        $data->nick_name = $request->nick_name;
        $data->age = $request->age;
        $data->height_feet = $request->height_feet;
        $data->height_inches = $request->height_inches;
        $data->address = $request->address;
        $data->country_code = $request->country_code;
        $data->phone_number = $request->phone_number;
        $data->about_report = $request->about_report;
        $data->consent_to_responsibility = $request->consent_to_responsibility;
        $data->report_state = $request->report_state;
        $data->last_updated = $request->last_updated;
        $data->moderated_by = $request->moderated_by;
        $data->report_division = $request->report_division;
        $data->reported_by = $request->reported_by;
        $data->skin_color = $request->skin_color;
        $data->physical_appearance = $request->physical_appearance;
        $data->facebook_username = $request->facebook_username;
        $data->telegram_username = $request->telegram_username;
        $data->save();

    }

    public function adminCreate(Request $request)
    {
        $validator = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $user = new User();
        $user->setConnection('pgsql_db3');
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        // $user->type = $request->type;
        $user->save();
    }

    public function adminUpdate(Request $request)
    {
        $validator = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->type = $request->type;
        $data->save();
    }

}
