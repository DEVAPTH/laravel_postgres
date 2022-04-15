@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Admin Detail List</h5>
            <a href="{{route('dashboard.admin-create')}}" class="btn btn-primary btn-sm float-right">Create</a>
        </div>
        <div class="card-block">
            @if (session('status'))
                <p class="alert alert-success">{{session('status')}}</p>
            @endif
            <div class="dt-responsive table-responsive">
                <table id="order-table" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin_list as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            {{-- <td>{{ Str::limit($data->password, 10) }}</td> --}}
                            <td>
                                <div class="form-row">
                                    <a href="{{route('admin-approve',$data->id)}}" class="btn btn-warning btn-sm" style="height:35px;margin-right:10px">Peding</a>
                                    <a href="{{route('dashboard.admin-edit',$data->id)}}" class="btn btn-success btn-sm" style="height:35px;margin-right:10px">Edit</a>
                                    <form action="{{route('dashboard.admin-delete', $data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


