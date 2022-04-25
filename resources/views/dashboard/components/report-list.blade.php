@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            @if (Route::currentRouteName() == 'dashboard.s1-report-lists')
                <h5>S1 List</h5>
            @endif
            @if (Route::currentRouteName() == 'dashboard.s2-report-lists')
                <h5>S2 List</h5>
            @endif
            @if (Route::currentRouteName() == 'dashboard.s3-report-lists')
                <h5>S3 List</h5>
            @endif
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
