<?php

namespace App\Http\Livewire\Dashboard\Pages;

use Livewire\Component;

class S3ReportDetailComponent extends Component
{
    public $data_id;
    public function mount($id){
        $this->data_id=$id;
    }
    public function render()
    {
        $data=S1DogReport::find($this->data_id);

        return view('livewire.dashboard.pages.s3-report-detail-component')->layout('layouts.master')->with([
            'data'=>$data
        ]);
    }
}
