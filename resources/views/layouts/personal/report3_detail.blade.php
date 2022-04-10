@extends('layouts.master')


@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Peronsal Information</h5>
        </div>
        <div class="row card-block">
            <div class="col-md-12">
                <ul class="list-view">
                    <li>
                        <div class="card list-view-media">
                            <div class="card-block">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="{{asset('jpg/avatar-5.jpg')}}" alt="" style="width: 150px;height:150px">
                                        {{-- <img class="media-object card-list-img" src="jpg/avatar-2.jpg"
                                            alt="Generic placeholder image"> --}}
                                    </a>
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="" class="control-label">User Id =</label>
                                                <h6 class="d-inline-block">{{ $data->id }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="control-label">မှတ်ပုံတင်အမည် =</label>
                                                <h6 class="d-inline-block">{{ $data->nrc_name }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">အမည် =</label>
                                                <h6 class="d-inline-block">{{ $data->nick_name }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">အသက် =</label>
                                                <h6 class="d-inline-block ">{{ $data->age }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="control-label">အရပ်အမြင်. =</label>
                                                <h6 class="d-inline-block">{{ $data->height_feet }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="control-label">အမြင်.ပေ =</label>
                                                <h6 class="d-inline-block">{{ $data->height_inches }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">နေရပ်လိပ်စာ =</label>
                                                <h6 class="d-inline-block">{{ $data->address }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">နိင်ငံသားကုတ် =</label>
                                                <h6 class="d-inline-block ">{{ $data->country_code }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">ဖုန်းနံပတ် =</label>
                                                <h6 class="d-inline-block ">{{ $data->phone_number }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">အကြောင်းရာ =</label>
                                                <h6 class="d-inline-block ">{{ $data->about_report }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Consent Responsibility=</label>
                                                <h6 class="d-inline-block ">{{ $data->consent_to_responsibility }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Last Updated =</label>
                                                <h6 class="d-inline-block ">{{ $data->last_updated }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">အသားရောင် =</label>
                                                <h6 class="d-inline-block ">{{ $data->skin_color }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Physical Appearance =</label>
                                                <h6 class="d-inline-block ">{{ $data->physical_appearance }}</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Facebook URL =</label>
                                                <a href="">{{ $data->facebook_username }}</a>
                                                {{-- <h6 class="d-inline-block ">{{$data->physical_appearance}}</h6> --}}
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Telegram URl =</label>
                                                <a href="">{{ $data->telegram_username }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            {{-- <a href="{{ route('personal.profile') }}" class="btn btn-outline-primary btn-sm  ml-4">Go Back</a> --}}

        </div>
    @endsection
