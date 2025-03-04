<?php

namespace App\Livewire\User;
use App\Models\{Project, Teams};
use Livewire\Component;

class Dashboard extends Component
{

    public $project = [];
    public $listProject = [];

    public function mount()
    {
        $requestProjectId = request()->query('projectId');
       // Cek kondisi bila ada $requestProjectId, ambil data project melalui model project dimana id project adalah $requestProjectId ke dalam $project
      if($requestProjectId) {
        // single project
        $this->project = Project::with(['user'])->where('id', $requestProjectId)->first();
      } else {
        // listproject
        $this->listProject = Project::with(['user'])->get();
      }


       // ambil semua project, masukan kedalam listproject
    }
    public function render()
    {
        return view('livewire.user.dashboard');
    }
}
