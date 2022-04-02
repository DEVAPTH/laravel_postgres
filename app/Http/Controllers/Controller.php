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

}
