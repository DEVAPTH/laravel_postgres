@extends('layouts.master')

@section('content')
<div class="card ">
    <div class="card-header d-flex justify-content-between">
        <h5>Dog Edit Form</h5>
    </div>
    <form action="{{route('dashboard.s3-update',$data->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="d-flex px-2">
            <div class="card ml-4 mt-5" style="flex: 0 0 400px">
                <div class="card-body deta">
                    <div class="card-text d-flex">
                        <p style="width: 100px">Image </p>
                        <p class="mr-3"> : </p>
                        <img src="{{asset('/uploads/'.$data->pic)}}" alt="">
                        <input type="file" name="pic" class="form-control">
                    </div>
                    <div class="card-text d-flex mt-1">
                        <p style="width: 100px">အမည်ရင်း </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->nrc_name}}" type="text" name="nrc_name" class="form-control">
                    </div>
                    <div class="card-text d-flex mt-1">
                        <p style="width: 100px">အခြားအမည် </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->nick_name}}" type="text" name="nick_name" class="form-control">
                    </div>
                    <div class="card-text d-flex mt-1 ">
                        <p style="width: 100px">အသက် </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->age}}" type="text" name="age" class="form-control">
                    </div>
                    <div class="card-text d-flex mt-1">
                        <p style="width: 100px">အရပ်အမြင့် </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->height_feet}}" type="text" name="height_feet" class="form-control">
                    </div>

                    <div class="card-text d-flex mt-1">
                        <p style="width:100px">skin_color </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->skin_color}}" type="text" name="skin_color" class="form-control">
                    </div>

                    <div class="card-text d-flex mt-1">
                        <p style="width: 100px">ဖုန်းနံပါတ် </p>
                        <p class="mr-3"> : </p>
                        <input  value="{{$data->phone_number}}" type="text" name="phone_number" class="form-control">
                    </div>

                    <div class="card-text d-flex mt-1">
                        <p style="width: 100px">FB Name </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->facebook_username}}" type="text" name="facebook_username" class="form-control">
                    </div>

                    <div class="card-text d-flex mt-1">
                        <p style="width: 100px">Telegram </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->telegram_username}}" type="text" name="telegram_username" class="form-control">
                    </div>
                </div>
            </div>
            <div class="card ml-3 mr-3 mt-5" style="width: 100%">


                <div class="card-body deta">
                    <div class="card-text d-flex mt-1">
                        <p style="flex: 0 0 120px">နေရပ်လိပ်စာ </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->address}}" type="text" name="address" class="form-control">
                    </div>

                    <div class="card-text d-flex mt-1">
                        <p style="flex: 0 0 120px">ရုပ်ပုံပန်းသဏ္ဍာန် </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->physical_appearance}}" type="text" name="physical_appearance" class="form-control">
                    </div>

                    <hr>

                    <div class="card-text d-flex mt-1">
                        <p style="flex: 0 0 120px">အကြောင်းအရာ </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->about_report}}" type="text" name="about_report" class="form-control">
                    </div>
                    <hr>
                    <div class="card-text d-flex mt-1">
                        <p style="flex: 0 0 120px">consent_to_responsibility </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->consent_to_responsibility}}" type="text" name="consent_to_responsibility" class="form-control">
                    </div>

                    <div class="card-text d-flex mt-1">
                        <p style="flex: 0 0 120px">report_state </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->report_state}}" type="text" name="report_state" class="form-control">
                    </div>

                    <div class="card-text d-flex mt-1">
                        <p style="flex: 0 0 120px">moderated_by </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->moderated_by}}" type="text" name="moderated_by" class="form-control">
                    </div>

                    <div class="card-text d-flex mt-1">
                        <p style="flex: 0 0 120px">report_division </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->report_division}}" type="text" name="report_division" class="form-control">
                    </div>

                    <div class="card-text d-flex mt-1">
                        <p style="flex: 0 0 120px">reported_by </p>
                        <p class="mr-3"> : </p>
                        <input value="{{$data->reported_by}}" type="text" name="reported_by" class="form-control">
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary float-right">Send</button>
        </div>
    </form>
</div>

@endsection
