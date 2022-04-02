@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Create Person Form Data</h5>
            <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
        </div>
        <div class="card-block">
            <form method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Photo</label>
                        <input type="file" class="form-control" name="pic">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">NRC Name</label>
                        <input type="text" class="form-control" name="nrc_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Nick Name</label>
                        <input type="text" class="form-control" name="nick_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Age</label>
                        <input type="number" class="form-control" name="age">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Hight Feet</label>
                        <input type="number" class="form-control" name="height_feet">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Hight Inches</label>
                        <input type="number" class="form-control" name="height_inches">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Address</label>
                        {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
                        <input type="text" class="form-control" name="address">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Country Code</label>
                        <input type="number" class="form-control" name="country_code">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Phone Number</label>
                        <input type="number" class="form-control" name="phone_number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">About Report</label>
                        <input type="text" class="form-control" name="about_report">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Consent to Responsibility</label>
                        <input type="text" class="form-control" name="consent_to_responsibility">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Report State</label>
                        <input type="text" class="form-control" name="report_state">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Last Updated</label>
                        <input type="date" class="form-control" name="last_updated">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Moderated_by_id</label>
                        <input type="text" class="form-control" name="moderated_by_id">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Report Division</label>
                        <input type="text" class="form-control" name="report_division">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Reported by id'</label>
                        <input type="text" class="form-control" name="reported_by_id">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Skin Color</label>
                        <input type="text" class="form-control" name="skin_color">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Physical Appearance</label>
                        <input type="text" class="form-control" name="physical_appearance">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Facebook Name</label>
                        <input type="text" class="form-control" name="facebook_username">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Telegram Name</label>
                        <input type="text" class="form-control" name="telegram_username">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Send</button>
        </form>
            </div>


        </div>
    </div>


@endsection
