<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\CreateTaskRequest;
class TaskController extends Controller
{
    public function index()
    {
        $tasks=Task::orderBy('id','DESC')->get();
        return view('task.index',compact('tasks'));
    }


    public function create()
    {
        return view('task.create');
    }


    public function store(CreateTaskRequest $request)
    {
        Task::create([
            'title' => $request->title
        ]);
        return redirect()->route('task.index')->with('success','!رویداد جدید اضافه شد');
    }
    

    public function edit(Task $task)
    {
        return view('task.edit',compact('task'));
    }


    public function update(Request $request,Task $task)
    {
        $task->update($request->all());
        return redirect()->route('task.index')->with('success','! ویرایش انجام شد');
    }


    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('task.index')->with('success','!رویداد مورد نظر حذف شد');
    }
}
