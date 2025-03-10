<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Project;

class TodoListController extends Controller
{

        public function index() {
            $todos = Todo::with('project')->get();
            $projects = Project::all();  // Mengambil semua data project
            return view('admin-todo', [
                'pageTitle' => 'Haha',
                'todos' => $todos,
                'projects' => $projects,  // Kirim data projects ke view
            ]);
        }

        public function create()
        {
            $projects = Project::all();
            return view('admin-todocreate', compact('projects'));
        }


        public function store(Request $request)
        {

            // Validasi data yang diterima dari form
            $validated = $request->validate([
                'name' => 'required',
                'status' => 'required',
                'category' => 'required',
                'project_id' => 'required', // Pastikan project_id valid
            ],[
                'name.required' => 'Nama Wajib Diisi....',
                'status.required' => 'Status wajib disii....',
                'category.required' => 'Category wajib diisi....',
                'project_id.required' => 'Project wajib diisi....'
            ]);

            // dd($validated);

            // Membuat Todo baru
            Todo::create([
                'name' => $validated['name'],
                'status' => $validated['status'],
                'category' => $validated['category'],
                'project_id' => $validated['project_id'],
            ]);

            // Redirect setelah berhasil menyimpan
            return redirect()->route('admin-todo')->with('success', 'Data Berhasil Ditambahkan!');
        }
    }


