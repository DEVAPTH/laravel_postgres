<?php

namespace App\Http\Livewire\Dashboard\Pages;

use App\Models\S2DogReport;
use Livewire\Component;

class S2ReportDetailComponent extends Component
{
    public $data_id;
    public function mount($id){
        $this->data_id=$id;
    }
    public function render()
    {
        $data=S2DogReport::find($this->data_id);

        return view('livewire.dashboard.pages.s2-report-detail-component')->layout('layouts.master')->with([
            'data'=>$data
        ]);
    }
}
