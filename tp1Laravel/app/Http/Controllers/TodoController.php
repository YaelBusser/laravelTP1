<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function todo()
    {

        return view("todo", ["todos" => Todo::all()]);
    }

    public function addTodo(Request $request)
    {
        Todo::create($request->all());
        return redirect("/todo");
    }
}
