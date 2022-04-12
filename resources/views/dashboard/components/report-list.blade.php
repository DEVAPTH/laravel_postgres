@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Admin List</h5>
        </div>
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                @if (Route::currentRouteName() == 'dashboard.s1-report-lists')
                    <livewire:s1-dog-report-table />
                @endif
                @if (Route::currentRouteName() == 'dashboard.s2-report-lists')
                    <livewire:s2-dog-report-table />
                @endif
                @if (Route::currentRouteName() == 'dashboard.s3-report-lists')
                    <livewire:s3-dog-report-table />
                @endif
            </div>
        </div>
    </div>
@endsection
