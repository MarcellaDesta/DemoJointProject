<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;

class AdminDashboard extends Component
{
    // Registrasi array kosong dengan nama listProject
    public $listProject = [];

    public function mount()
    {
        $this->getListSubmission();
    }

    public function render()
    {
        return view('livewire.admin.admin-dashboard');
    }

    // buat satu function dengan nama getListSubmission
    public function getListSubmission()
    {
        // didalam function tersebut ambil semua data project yang isinya ada team yang ingin join ke project
        $projects = Project::with('teams')
        ->whereHas('teams',function ($query) {
            $query->where('status', 'submission');
        })
        ->get();

        // dd($projects);
    }

}
