<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('todo', compact('todos'));
    }

    public function store(Request $request)
    {
        $todo = Todo::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        $request->session()->flash('message', 'Successfullyy Addeedd!!');

        return redirect()->action('TodoController@index');
    }

    public function delete(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);

        $todo->delete();
        $request->session()->flash('message', 'Successfullyy Deletted!!');
        return redirect()->action('TodoController@index');
    }

    public function edit(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);
        
        return view('edit', compact('todo'));
    }

    public function put(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);

        $todo->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        $request->session()->flash('message', 'Successfullyy Uppdattedd!!');

        return redirect()->action('TodoController@index');
    }
}
