<?php

namespace App\Livewire\Destaria\Admin;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Project;

class ListProject extends Component
{
    public $projects = []; // Array of projects

    public function mount()
    {
        $this->getListProject();
    }

    public function render()
    {
        return view('livewire.destaria.admin.list-project');
    }

    #[On('project-created')]
    #[On('project-deleted')]
    public function getListProject()
    {
        $this->projects = Project::with('user')->get();
    }

    public function deleteProject($projectId)
    {
        $project = Project::find($projectId);
        $project->delete();
        $this->dispatch('project-deleted')->self();
    }

}
