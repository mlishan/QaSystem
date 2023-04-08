<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\User;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::with('owner')->get();
        $users = User::all();
        return view('projects.index',compact('projects', 'users'));
    }

    public function viewprojects(Projects $projects)
    {
        $projects->load(['firstassignee']);
        $projects->load(['secondassignee']);
        $projects->load(['thirdassignee']);
        $projects->load(['lastqasignee']);
        $projects->load(['firstqasignee']);
        $projects->load(['secondqasignee']);
        $projects->load(['thirdqasignee']);
        $qausers = User::where('userrole', 2)->get();
        return view('projects.viewprojects', ['project' => $projects], ['qausers' => $qausers]);
    }

    public function editprojects(Projects $projects)
    {
        $users = User::all();
        $projects->load(['firstassignee']);
        $projects->load(['secondassignee']);
        $projects->load(['thirdassignee']);
        return view('projects.editprojects', compact('projects', 'users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {

    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $projects = new Projects();

        $projects->name = $request->name;
        $projects->description = $request->description;
        $projects->status = $request->status;
        $projects->start_date = $request->start_date;
        $projects->end_date = $request->end_date;
        $projects->owner_id = $request->owner_id;
        $projects->user_ids = implode(',', $request->user_ids);

        $projects->save();
        // return back();
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
        $projects = new Projects();
        if( $request->has('id') ){
            $id = $request->id;
            $projects = $projects->find($id);
        }

        $projects->name = $request->name;
        $projects->description = $request->description;
        $projects->status = $request->status;
        $projects->start_date = $request->start_date;
        $projects->end_date = $request->end_date;
        $projects->owner_id = $request->owner_id;

        if (($request->user_ids) != '') {
            $temp_user_ids = $request->user_ids;
            $firstassigneeUser = optional($projects->firstassignee)->user;
            if($firstassigneeUser && !in_array($firstassigneeUser->id, $temp_user_ids)) {
                array_push($temp_user_ids, $firstassigneeUser->id);
            }
            $secondassigneeUser = optional($projects->secondassignee)->user;
            if($secondassigneeUser && !in_array($secondassigneeUser->id, $temp_user_ids)) {
                array_push($temp_user_ids, $secondassigneeUser->id);
            }
            $thirdassigneeUser = optional($projects->thirdassignee)->user;
            if($thirdassigneeUser && !in_array($thirdassigneeUser->id, $temp_user_ids)) {
                array_push($temp_user_ids, $thirdassigneeUser->id);
            }

            $projects->user_ids = implode(',', $temp_user_ids);
        }

        $projects->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $projects = Projects::findOrfail($request->id);
        $projects->delete();
        return back();
    }
}

