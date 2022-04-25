<div class="card ">
    <div class="card-header d-flex justify-content-between">
        <h5>Detail Information (S1)</h5>
        <div>

            <a href="{{ route('db1.copy-s1-to-s3', ['s1_id' => $data['id']]) }}"
                class="btn btn-outline-success rounded mr-2" type="button">Move to S3</a>
            <a href="{{route('dashboard.dog-report',$data['id'])}}" class="btn btn-primary">Edit</a>
            <button class="btn btn-danger rounded mr-2" type="button"
                onclick="deleteReport({{ $data['id'] }})">Delete</button>

        </div>
    </div>
    <div class="d-flex px-2">
        <div class="card ml-3 mt-5" style="flex: 0 0 300px">

            <div class="card-body deta">
                <img src="{{ $data['pic'] }}" height="150" class=" object-cover rounded mb-3 d-block " alt="">
                <div class="card-text d-flex">
                    <p style="width: 100px">အမည်ရင်း </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['nrc_name'] }} </p>
                </div>
                <div class="card-text d-flex">
                    <p style="width: 100px">အခြားအမည် </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['nick_name'] }} </p>
                </div>
                <div class="card-text d-flex">
                    <p style="width: 100px">အသက် </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['age'] }}</p>
                </div>
                <div class="card-text d-flex">
                    <p style="width: 100px">အရပ်အမြင့် </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['height_feet'] }} ပေ {{ $data['height_inches'] }} လက်မ</p>

                </div>

                <div class="card-text d-flex">
                    <p style="width:100px">skin_color </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['skin_color'] }}</p>
                </div>

                <div class="card-text d-flex">
                    <p style="width: 100px">ဖုန်းနံပါတ် </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['phone_number'] }}</p>
                </div>

                <div class="card-text d-flex">
                    <p style="width: 100px">FB Name </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['facebook_username'] }}</p>
                </div>

                <div class="card-text d-flex">
                    <p style="width: 100px">Telegram </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['telegram_username'] }}</p>
                </div>




            </div>
        </div>
        <div class="card ml-3 mr-3 mt-5" style="width: 100%">


            <div class="card-body deta">
                <div class="card-text d-flex">
                    <p style="flex: 0 0 120px">နေရပ်လိပ်စာ </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['address'] }}</p>
                </div>

                <div class="card-text d-flex">
                    <p style="flex: 0 0 120px">ရုပ်ပုံပန်းသဏ္ဍာန် </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['physical_appearance'] }}</p>
                </div>

                <hr>

                <div class="card-text d-flex">
                    <p style="flex: 0 0 120px">အကြောင်းအရာ </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['about_report'] }}</p>
                </div>
                <hr>
                <div class="card-text d-flex">
                    <p style="flex: 0 0 120px">consent_to_responsibility </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['consent_to_responsibility'] }}</p>
                </div>

                <div class="card-text d-flex">
                    <p style="flex: 0 0 120px">report_state </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['report_state'] }}</p>
                </div>

                <div class="card-text d-flex">
                    <p style="flex: 0 0 120px">moderated_by </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['moderated_by'] }}</p>
                </div>

                <div class="card-text d-flex">
                    <p style="flex: 0 0 120px">report_division </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['report_division'] }}</p>
                </div>

                <div class="card-text d-flex">
                    <p style="flex: 0 0 120px">reported_by </p>
                    <p class="mr-3"> : </p>
                    <p>{{ $data['reported_by'] }}</p>
                </div>








            </div>
        </div>
    </div>
</div>


<script>
    function deleteReport(id) {
        var url = "{{ url('api/dashboard/reports/s1-delete') }}/" + id;
        console.log('url', url);

        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    fetch(url, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                'accept': 'application/json',
                            }
                        })
                        .then(res => res.json())
                        .then(res => {
                            console.log('res', res);
                            if (res.status == 'success') {
                                swal("Poof! Your data has been deleted!", {
                                    icon: "success",
                                }).then(() => {
                                    window.location.href =
                                    "{{ route('dashboard.s1-report-lists') }}";
                                });
                            } else {
                                swal("Error!", res.message, "error");
                            }
                        });

                } else {
                    swal("Your imaginary file is safe!");
                }
            })
            .catch(err => {
                swal("Error!", err.message, "error");
            });

    }
</script>
