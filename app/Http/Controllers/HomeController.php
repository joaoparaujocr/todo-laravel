<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(Request $request) {
        $query = $request->query();
        $date = $query['date'] ?? date('Y-m-d');
        $tasks = Task::whereDate('due_date',  $date)->get();

        $carbonDate = Carbon::createFromDate($date);
        $currentDate = $carbonDate ->translatedFormat('d \d\e M');
        $prevDate = $carbonDate->addDays(-1)->format('Y-m-d');
        $nextDate = $carbonDate->addDays(2)->format('Y-m-d');

        return view('home')->with(compact('tasks', 'currentDate', 'prevDate', 'nextDate'));
    }
}
