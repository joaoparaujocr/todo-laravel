<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(Request $request) {
        $tasks = [
            ['id' => 1, 'title' => 'Titulo 1', 'category' => 'Categoria 1'],
        ];

        return view('home')->with(compact('tasks'));
    }
}
