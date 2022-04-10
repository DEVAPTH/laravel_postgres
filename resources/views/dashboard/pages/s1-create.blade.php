@extends('layouts.master')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Admin Create Form</h5>
            </div>
            <div class="card-block">
               @if (session('status'))
                <p class="alert alert-success">{{session('status')}}</p>
               @endif
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">ဓာတ်ပုံ</label>
                                <input type="file" class="form-control " name="pic">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">နိင်ငံသားစီရင်ကတ််ပြား</label>
                                <input type="text" class="form-control" name="nrc_name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">အမည်</label>
                                <input type="text" class="form-control" name="nick_name" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">အသက်</label>
                                <input type="number" class="form-control" name="age" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">အရပ်အမြင့်(ပေ)</label>
                                <input type="number" class="form-control" name="height_feet" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">အရပ်အမြင့်(လက်မ)</label>
                                <input type="number" class="form-control" name="height_inches" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">နေရပ်လိပ်စာ</label>
                                <input type="text" class="form-control" name="address" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">နိင်ငံသားကုတ်</label>
                                <input type="text" class="form-control" name="country_code" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">ဖုန်းနံပတ်</label>
                                <input type="number" class="form-control" name="phone_number" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">အကြောင်းရာ</label>
                                <input type="text" class="form-control" name="about_report" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Consent_to_responsibility</label>
                                <input type="text" class="form-control" name="consent_to_responsibility" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">ပြည်နယ်သတင်းပို့ပါ။</label>
                                <input type="text" class="form-control" name="report_state" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">ပြက္ခဒိန်</label>
                                <input type="date" class="form-control" name="last_updated" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">အကဲဖြတ်သည်_</label>
                                <input type="text" class="form-control" name="moderated_by" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">အစီရင်ခံစာ_ဌာနခွဲ</label>
                                <input type="text" class="form-control" name="report_division" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">အစီရင်ခံစာ</label>
                                <input type="text" class="form-control" name="reported_by" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">အသားရောင်</label>
                                <input type="text" class="form-control" name="skin_color" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">ရုပ်ပိုင်းဆိုင်ရာ အသွင်အပြင်</label>
                                <input type="text" class="form-control" name="physical_appearance" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Facebook_username</label>
                                <input type="text" class="form-control" name="facebook_username" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Telegram_username</label>
                                <input type="text" class="form-control" name="telegram_username" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection
