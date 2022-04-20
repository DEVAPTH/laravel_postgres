@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Admin List</h5>
        </div>
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <livewire:user-table/>
                {{-- @livewire('dashboard.pages.s1-report-component') --}}
            </div>
        </div>
    </div>
@endsection
