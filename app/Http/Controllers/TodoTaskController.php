<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TodoTaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tugas2', [
            'tasks' => $tasks
        ]);

    }

    public function store (Request $request)
    {
        $request->validate([
            'task'=>'required|min:5', 
        ],
        [
            'task.required'=> 'tugas harus diisi',
            'task.min'=> 'tugas minimal 5 karakter',
        ]
    );

        Task::create([
            'task'=>$request->task,
            'tanggal'=>NOW(),
        ]);
        return redirect('/');

    }

    // public function destroy(Task $task)
    // {
    //     // Task::destroy($request);
    //     // return redirect('task')->with ('success', 'post has been deleted!');
    //     $task->delete();
    //     return redirect(route('/delete'))->with('success', 'task has been deleted');
    // }

    // public function destroy(Request $request)
    // {
    //     Task::destroy($request->id);
    //     return redirect(route('/'))->with('success', 'taks has been deleted');
    // }
    public function deleteTask(Request $request)
    {
        Task::where('task_id', $request->id)->delete();
        return redirect('/');
    }
}
