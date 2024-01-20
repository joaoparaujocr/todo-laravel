<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function test(Request $request) {
        return view('tasks.index');
    }

    public function create(Request $request) {
        return view('tasks.create');
    }

    public function edit(Request $request, int $task) {
        return view('tasks.edit')->with(['task' => $task]);
    }

    public function destroy(int $task) {
        return back();
    }
}
