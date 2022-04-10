@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Wanted Personal Data</h5>
        </div>
        <div class="card-block">
            @if ($message = Session::get('status'))
            <p class="alert alert-success">{{$message}}</p>
            @endif
            @if ($message = Session::get('error'))
            <p class="alert alert-danger">{{$message}}</p>
            @endif
            <div class="dt-responsive table-responsive">
                <table id="order-table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nrc Name</th>
                            <th>Nick Name</th>
                            <th>Age</th>
                            <th>Height Feet</th>
                            <th>Height Inches</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nrc_name}}</td>
                                <td>{{ $data->nick_name }}</td>
                                <td>{{ $data->age }}</td>
                                <td>{{ $data->height_feet }}</td>
                                <td>{{ $data->height_inches }}</td>
                                <td>
                                    <a href="{{route('db1.report-detail',$data->id)}}" class="btn btn-primary btn-sm">Detail</a>
                                    <a href="{{route('db1.copy-s1-to-s3',$data->id)}}" class="btn btn-success btn-sm">Confirm</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>

                </table>
                {{$reports->links()}}

            </div>
        </div>
    </div>
@endsection
