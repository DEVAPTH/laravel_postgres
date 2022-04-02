<?php

namespace App\Http\Controllers;

use App\Models\S1DogReport;
use App\Models\S2DogReport;
use App\Models\S3DogReport;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function getS1Reports(){
       $data= S1DogReport::paginate();
       return view('dashboard.pages.s1-reports')->with([
        'data'=>$data
    ]);
    }

    public function getS2Reports(){
        $data= S2DogReport::paginate();
        return view('dashboard.pages.s1-reports')->with([
            'data'=>$data
        ]);

     }

     public function s1reportDetail($id){
         $data=S1DogReport::find($id);
        return view('layouts.personal.detail',compact('data'));

     }

     public function s2reportDetail($id){
        $data=S2DogReport::find($id);
       return view('layouts.personal.detail',compact('data'));

    }

    public function copyS1ToS3($s1_id){
        $report=S1DogReport::find($s1_id)->toArray();
        unset($report['id']);
        S3DogReport::create($report);
        S1DogReport::destroy($s1_id);
        return redirect()->back()->with('status','S1 report copied to S3');
    }


}



//
