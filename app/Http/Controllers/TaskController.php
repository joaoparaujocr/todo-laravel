<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $request) {
        $categories = Category::all();

        return view('tasks.create')->with(compact('categories'));
    }

    public function store(Request $request) {
        $task = $request->only(['title', 'due_date', 'description', 'category_id']);
        $task['user_id'] = 1;
        Task::create($task);

        return redirect()->route('home');
    }

    public function edit(Task $task) {
        $categories = Category::all();

        return view('tasks.edit')->with(compact('task', 'categories'));
    }

    public function update(Request $request, Task $task) {

        $request_data = $request->only(['title', 'due_date', 'description', 'category_id']);
        $request_data["is_done"] = boolval($request->input("is_done")) ;

        $task->update($request_data);

        return back();
    }

    public function destroy(Task $task) {
        $task->deleteQuietly();
        return back();
    }
}
