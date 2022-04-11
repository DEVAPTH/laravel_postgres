@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Admin List</h5>
        </div>
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <livewire:s1-dog-report-table/>
            </div>
        </div>
    </div>
@endsection
