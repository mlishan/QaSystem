<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firstassignee;

class FirstAssigneeController extends Controller
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
        $firstassignee = new Firstassignee();

        $firstassignee->project_id = $request->project_id;

        if ($request->assignee != '') {
            $firstassignee->assignee = $request->assignee;
        }

        if ($request->chrome != '') {
            $firstassignee->chrome = $request->chrome;
        }
        if ($request->tab_horizontal != '') {
            $firstassignee->tab_horizontal = $request->tab_horizontal;
        }
        if ($request->tab_vertical != '') {
            $firstassignee->tab_vertical = $request->tab_vertical;
        }
        if ($request->ios != '') {
            $firstassignee->ios = $request->ios;
        }
        if ($request->tel_format != '') {
            $firstassignee->tel_format = $request->tel_format;
        }
        if ($request->tel_title != '') {
            $firstassignee->tel_title = $request->tel_title;
        }
        if ($request->tel_link != '') {
            $firstassignee->tel_link = $request->tel_link;
        }
        if ($request->tel_icon != '') {
            $firstassignee->tel_icon = $request->tel_icon;
        }
        if ($request->tel_icon != '') {
            $firstassignee->tel_icon = $request->tel_icon;
        }
        if ($request->tel_alignment != '') {
            $firstassignee->tel_alignment = $request->tel_alignment;
        }
        if ($request->email_task != '') {
            $firstassignee->email_task = $request->email_task;
        }
        if ($request->design_task != '') {
            $firstassignee->design_task = $request->design_task;
        }
        if ($request->responsive_task != '') {
            $firstassignee->responsive_task = $request->responsive_task;
        }
        if ($request->customer_changes != '') {
            $firstassignee->customer_changes = $request->customer_changes;
        }
        if ($request->getfrom_task != '') {
            $firstassignee->getfrom_task = $request->getfrom_task;
        }
        if ($request->addressdetails_task != '') {
            $firstassignee->addressdetails_task = $request->addressdetails_task;
        }
        if ($request->social_link != '') {
            $firstassignee->social_link = $request->social_link;
        }
        if ($request->shover_link != '') {
            $firstassignee->shover_link = $request->shover_link;
        }
        if ($request->stitle_link != '') {
            $firstassignee->stitle_link = $request->stitle_link;
        }
        if ($request->spellings_check != '') {
            $firstassignee->spellings_check = $request->spellings_check;
        }
        if ($request->dummy_links != '') {
            $firstassignee->dummy_links = $request->dummy_links;
        }
        if ($request->w3c_check != '') {
            $firstassignee->w3c_check = $request->w3c_check;
        }
        $firstassignee->save();
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
        $firstassignee = new Firstassignee();

        if( $request->has('id') ){
            $id = $request->id;
            $firstassignee = $firstassignee->find($id);
        }

        if ($request->project_id != '') {
            $firstassignee->project_id = $request->project_id;
        }

        if ($request->assignee != '') {
            $firstassignee->assignee = $request->assignee;
        }

        if ($request->chrome != '') {
            $firstassignee->chrome = $request->chrome;
        }
        if ($request->tab_horizontal != '') {
            $firstassignee->tab_horizontal = $request->tab_horizontal;
        }
        if ($request->tab_vertical != '') {
            $firstassignee->tab_vertical = $request->tab_vertical;
        }
        if ($request->ios != '') {
            $firstassignee->ios = $request->ios;
        }
        if ($request->tel_format != '') {
            $firstassignee->tel_format = $request->tel_format;
        }
        if ($request->tel_title != '') {
            $firstassignee->tel_title = $request->tel_title;
        }
        if ($request->tel_link != '') {
            $firstassignee->tel_link = $request->tel_link;
        }
        if ($request->tel_icon != '') {
            $firstassignee->tel_icon = $request->tel_icon;
        }
        if ($request->tel_icon != '') {
            $firstassignee->tel_icon = $request->tel_icon;
        }
        if ($request->tel_alignment != '') {
            $firstassignee->tel_alignment = $request->tel_alignment;
        }
        if ($request->email_task != '') {
            $firstassignee->email_task = $request->email_task;
        }
        if ($request->design_task != '') {
            $firstassignee->design_task = $request->design_task;
        }
        if ($request->responsive_task != '') {
            $firstassignee->responsive_task = $request->responsive_task;
        }
        if ($request->customer_changes != '') {
            $firstassignee->customer_changes = $request->customer_changes;
        }
        if ($request->getfrom_task != '') {
            $firstassignee->getfrom_task = $request->getfrom_task;
        }
        if ($request->addressdetails_task != '') {
            $firstassignee->addressdetails_task = $request->addressdetails_task;
        }
        if ($request->social_link != '') {
            $firstassignee->social_link = $request->social_link;
        }
        if ($request->shover_link != '') {
            $firstassignee->shover_link = $request->shover_link;
        }
        if ($request->stitle_link != '') {
            $firstassignee->stitle_link = $request->stitle_link;
        }
        if ($request->spellings_check != '') {
            $firstassignee->spellings_check = $request->spellings_check;
        }
        if ($request->dummy_links != '') {
            $firstassignee->dummy_links = $request->dummy_links;
        }
        if ($request->w3c_check != '') {
            $firstassignee->w3c_check = $request->w3c_check;
        }

        $firstassignee->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
