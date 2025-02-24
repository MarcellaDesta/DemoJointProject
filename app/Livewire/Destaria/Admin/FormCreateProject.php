<?php

namespace App\Livewire\Destaria\Admin;
use App\Models\Project;
use Livewire\Component;

class FormCreateProject extends Component
{
    public $titleComponent="HALAMAN FORM CREATE PROJECT COMPONENT";
    public $name="";
    public $description="";
    public $status="";
    public $category="";


    public function render()
    {
        return view('livewire.destaria.admin.form-create-project');
    }

    public function sendDataProject()
    {
        $this->validate([
            'name'        => 'required|min:10',
            'description' => 'required|min:10',
            'status'      => 'required',
            'category'    => 'required'
        ],[
            'name.required' => 'Nama Project Wajib Diisi....',
            'name.min' => 'Nama Project minimal 10 nama....',
            'description.required' => 'Keterangan project wajib disii....',
            'description.min' => 'Keterangan project minimal 10 karakter....',
            'status.required' => 'Status Project wajib diisi....',
            'category.required' => 'Kategori Project wajib diisi....'
        ]);

        Project::create([
            'name'        => $this->name,
            'user_id'     => auth()->id(),
            'status'      => $this->status,
            'category'    => $this->category,
            'description' => $this->description
        ]);

        dd('data berhasil disimpan');

        $this->resetForm();
    }

    public function resetForm(){
        $this->name="";
        $this->description="";
        $this->status="";
        $this->category="";
        $this->resetErrorBag();
    }
}

