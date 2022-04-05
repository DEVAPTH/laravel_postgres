@extends('layouts.master')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h5>Admin Create Form</h5>
            </div>
            <div class="card-block">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control " name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="type" class="form-control">
                                    <option value="">Type</option>
                                    <option value="">Admin</option>
                                    <option value="">User</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
