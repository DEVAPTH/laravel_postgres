@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Personal Detail Data</h5>
            <span>Lets say you want to sort the fourth column (3) descending and the first column (0) ascending: your order:
                would look like this: order: [[ 3, 'desc' ], [ 0, 'asc' ]]</span>
        </div>
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <table id="order-table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nrc Name</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nrc_name}}</td>
                                <td>{{ $data->nick_name }}</td>
                                <td>{{ $data->age }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->phone_number }}</td>
                                <td>
                                    {{-- <a href="{{route('personal.show',$data->id)}}" class="btn btn-primary btn-sm">Detail</a> --}}
                                    <a href="" class="btn btn-success btn-sm">Confirm</a>
                                    <a href="" class="btn btn-danger btn-sm" onclick="confirm('Delete Data is Comming Soon')">Delete</a>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
