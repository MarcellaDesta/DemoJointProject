<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index()
    {
        return view('admin-todo', [
            'pageTitle' => 'yesy',
            // 'todos'     => $todos
            
        ]);
    }

}
