<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('Pages.newTask');
    }
    public function show()
    {
        return view('Pages.viewAllTasks');
    }
    public function update($id)
    {
        return view('Pages.update',compact('id'));
    }
}
