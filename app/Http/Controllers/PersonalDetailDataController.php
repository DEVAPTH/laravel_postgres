<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalDetailData;
use Illuminate\Support\Facades\DB;

class PersonalDetailDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=DB::connection('pgsql_second')->table('personal_details')->get();
        return view('layouts.personal.personal_data',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalDetailData  $personalDetailData
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalDetailData $personalDetailData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalDetailData  $personalDetailData
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalDetailData $personalDetailData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonalDetailData  $personalDetailData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalDetailData $personalDetailData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalDetailData  $personalDetailData
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalDetailData $personalDetailData)
    {
        //
    }
}
