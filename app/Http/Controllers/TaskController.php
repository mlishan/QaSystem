<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();

        $task->project_id = $request->project_id;
        $task->task = $request->task;
        $task->status = $request->status;

        if ($screenshot = $request->file('screenshot')) {
            $destinationPath = 'images/task/';
            $screenshotImage = date('YmdHis') . "." . $screenshot->getClientOriginalExtension();
            $screenshot->move($destinationPath, $screenshotImage);
            $task['screenshot'] = "$screenshotImage";
        }else{
            unset($task['screenshot']);
        }

        $task->description = $request->description;

        $task->login_id = $request->login_id;
        $task->role_id = $request->role_id;

        $task->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = new Task();
        if( $request->has('task_id') ){
            $id = $request->task_id;
            $task = $task->find($id);
        }

        $task->project_id = $request->projectid;
        $task->task = $request->task_name;
        $task->status = $request->taskstatus;
        $task->description = $request->taskdescription;

        if ($request->devnote != '') {
            $task->devnote = $request->devnote;
        }

        $task->login_id = $request->loginid;
        $task->role_id = $request->roleid;

        $task->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $task = Task::findOrfail($request->delete_id);
        $task->delete();
        return back();
    }
}
