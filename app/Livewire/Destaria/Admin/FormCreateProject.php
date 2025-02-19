<?php

namespace App\Livewire\Destaria\Admin;

use Livewire\Component;

class FormCreateProject extends Component
{
    public $titleComponent = "HALAMAN FORM CREATE PROJECT COMPONENT";
    public $content ="";

    public function render()
    {
        return view('livewire.destaria.admin.form-create-project');
    }

    public function save()
    {
       dd($this->content);
    }
}

