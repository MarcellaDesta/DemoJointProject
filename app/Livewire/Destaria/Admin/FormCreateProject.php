<?php

namespace App\Livewire\Destaria\Admin;

use Livewire\Component;

class FormCreateProject extends Component
{
    public $name="";
    public $price="";

    public function render()
    {
        return view('livewire.destaria.admin.form-create-project');
    }

    public function sendDataProject()
    {
        dd($this->name, $this->price);
    }
}

