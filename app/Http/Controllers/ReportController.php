<?php

namespace App\Http\Controllers;

use App\Models\S1DogReport;
use App\Models\S2DogReport;
use App\Models\S3DogReport;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function getS1Reports()
    {
        $reports = S1DogReport::latest()->paginate(20);
        return view('dashboard.pages.s1-reports', [
            'reports' => $reports
        ]);
    }

    public function getS2Reports()
    {
        $reports = S2DogReport::orderBy('id', 'desc')->paginate();
        return view('dashboard.pages.s2-reports')->with([
            'reports' => $reports
        ]);
    }


    public function s1reportDetail($id)
    {
        $data = S1DogReport::find($id);
        return view('dashboard.pages.report-detail', compact('data'));
    }

    public function s2reportDetail($id)
    {
        $data = S2DogReport::find($id);
        return view('layouts.personal.detail', compact('data'));
    }

    public function copyS1ToS3($s1_id)
    {
        DB::beginTransaction();
        try {
            $report = S1DogReport::find($s1_id)->toArray();
            unset($report['id']);
            S3DogReport::create($report);
            S1DogReport::destroy($s1_id);
            DB::commit();
            return redirect()->route('dashboard.s3-report-lists')->with('status', 'Copy to S3 Success');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Copy Error');
        }
    }

    public function copyS3ToS2($s3_id)
    {
        DB::beginTransaction();
        try {
            $report = S3DogReport::find($s3_id)->toArray();
            unset($report['id']);
            S2DogReport::create($report);
            S3DogReport::destroy($s3_id);
            DB::commit();
            return redirect()->route('dashboard.s2-report-lists')->with('status', 'Copy to S2 Success');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Copy Error');
        }
    }

    public function getS3Reports()
    {
        $reports = S3DogReport::latest()->paginate();
        return view('dashboard.pages.s3-reports')->with([
            'reports' => $reports
        ]);
    }

    public function s3reportDetail($id)
    {
        $data = S3DogReport::find($id);
        return view('layouts.personal.report3_detail', compact('data'));
    }

    public function s1Destroy($id)
    {
        try {
            S1DogReport::findOrFail($id)->delete();
            return $this->apiSuccessResponse('Successfull Data Delete');
        } catch (Exception $e) {
            return $this->apiErrorResponse('Error Data Delete');
        }
    }
    public function s2Destroy($id)
    {
        try {
            S2DogReport::findOrFail($id)->delete();
            return $this->apiSuccessResponse('Successfull Data Delete');
        } catch (Exception $e) {
            return $this->apiErrorResponse('Error Data Delete');
        }
    }
    public function s3Destroy($id)
    {
        try {
            S3DogReport::findOrFail($id)->delete();
            return $this->apiSuccessResponse('Successfull Data Delete');
        } catch (Exception $e) {
            return $this->apiErrorResponse('Error Data Delete');
        }
    }
}



//
