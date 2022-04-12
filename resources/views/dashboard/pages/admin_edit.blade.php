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
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input value="{{$data->name}}" type="text" class="form-control " name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input value="{{$data->email}}" type="text" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input value="{{$data->password}}" type="password" class="form-control"  name="password" id="myInput">
                                <input type="checkbox" onclick="myFunction()">Show Password
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Select Type</label>
                                <select id="type" name="type" class="form-control">
                                    <option value="">{{$data->type}}</option>
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

@section('js')
<script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
@endsection
