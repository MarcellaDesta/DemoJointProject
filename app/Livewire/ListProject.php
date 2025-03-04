<?php

namespace App\Livewire;
use App\Models\Project;
use Livewire\Component;

class ListProject extends Component
{
    public $listProject =[];


    public function render()
    {
        return view('livewire.list-project');
    }

    public function mount()
    {
        $this->refeshListProject();
    }

    public function refeshListProject()
    {

        $this->listProject= Project::where('status','PUBLISHED')->get();
    }

    public function sendSubmission($projectId)
    {

          // mengirimkan parameter ProjectId melalui session
           session()->put('selected_projectId', $projectId);

          // dan mengarahkan ke halaman submission
          $this->redirectIntended(route('login'), navigate: true);

    }
}
