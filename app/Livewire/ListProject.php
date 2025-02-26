<?php

namespace App\Livewire;
use App\Models\Project;
use Livewire\Component;

class ListProject extends Component
{
    public $listProject =[];
    public $onRerfresh = false;

    public function render()
    {
        return view('livewire.list-project');
    }

    public function refeshListProject()
    {
        dd('melakukan refresh component');
    }
}
