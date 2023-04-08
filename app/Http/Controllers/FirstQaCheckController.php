<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firstqacheck;

class FirstQaCheckController extends Controller
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
        $firstqacheck = new Firstqacheck();

        $firstqacheck->project_id = $request->project_id;
        if ($request->qaassignee != '') {
            $firstqacheck->qaassignee = $request->qaassignee;
        }
        if ($request->qachrome != '') {
            $firstqacheck->qachrome = $request->qachrome;
        }
        if ($request->qa_horizontal != '') {
           $firstqacheck->qa_horizontal = $request->qa_horizontal;
        }
        if ($request->qa_vertical != '') {
           $firstqacheck->qa_vertical = $request->qa_vertical;
        }
        if ($request->qa_ios != '') {
           $firstqacheck->qa_ios = $request->qa_ios;
        }
        if ($request->qa_tel_format != '') {
           $firstqacheck->qa_tel_format = $request->qa_tel_format;
        }
        if ($request->qa_tel_title != '') {
            $firstqacheck->qa_tel_title = $request->qa_tel_title;
        }
        if ($request->qa_tel_link != '') {
            $firstqacheck->qa_tel_link = $request->qa_tel_link;
        }
        if ($request->qa_tel_icon != '') {
            $firstqacheck->qa_tel_icon = $request->qa_tel_icon;
        }
        if ($request->qa_tel_alignment != '') {
            $firstqacheck->qa_tel_alignment = $request->qa_tel_alignment;
        }
        if ($request->qa_email_task != '') {
            $firstqacheck->qa_email_task = $request->qa_email_task;
        }
        if ($request->qa_design_task != '') {
            $firstqacheck->qa_design_task = $request->qa_design_task;
        }
        if ($request->qa_responsive_task != '') {
            $firstqacheck->qa_responsive_task = $request->qa_responsive_task;
        }
        if ($request->qa_customer_changes != '') {
            $firstqacheck->qa_customer_changes = $request->qa_customer_changes;
        }
        if ($request->qa_getfrom_task != '') {
            $firstqacheck->qa_getfrom_task = $request->qa_getfrom_task;
        }
        if ($request->qa_addressdetails_task != '') {
            $firstqacheck->qa_addressdetails_task = $request->qa_addressdetails_task;
        }
        if ($request->qa_social_link != '') {
            $firstqacheck->qa_social_link = $request->qa_social_link;
        }
        if ($request->qa_shover_link != '') {
            $firstqacheck->qa_shover_link = $request->qa_shover_link;
        }
        if ($request->qa_stitle_link != '') {
            $firstqacheck->qa_stitle_link = $request->qa_stitle_link;
        }
        if ($request->qa_spellings_check != '') {
            $firstqacheck->qa_spellings_check = $request->qa_spellings_check;
        }
        if ($request->qa_dummy_links != '') {
            $firstqacheck->qa_dummy_links = $request->qa_dummy_links;
        }
        if ($request->qa_w3c_check != '') {
            $firstqacheck->qa_w3c_check = $request->qa_w3c_check;
        }
        $firstqacheck->save();
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
        $firstqacheck = new Firstqacheck();
        if( $request->has('id') ){
            $id = $request->id;
            $firstqacheck = $firstqacheck->find($id);
        }

        if ($request->project_id != '') {
            $firstqacheck->project_id = $request->project_id;
        }
        if ($request->qaassignee != '') {
            $firstqacheck->qaassignee = $request->qaassignee;
        }
        if ($request->qachrome != '') {
            $firstqacheck->qachrome = $request->qachrome;
        }
        if ($request->qa_horizontal != '') {
           $firstqacheck->qa_horizontal = $request->qa_horizontal;
        }
        if ($request->qa_vertical != '') {
           $firstqacheck->qa_vertical = $request->qa_vertical;
        }
        if ($request->qa_ios != '') {
           $firstqacheck->qa_ios = $request->qa_ios;
        }
        if ($request->qa_tel_format != '') {
           $firstqacheck->qa_tel_format = $request->qa_tel_format;
        }
        if ($request->qa_tel_title != '') {
            $firstqacheck->qa_tel_title = $request->qa_tel_title;
        }
        if ($request->qa_tel_link != '') {
            $firstqacheck->qa_tel_link = $request->qa_tel_link;
        }
        if ($request->qa_tel_icon != '') {
            $firstqacheck->qa_tel_icon = $request->qa_tel_icon;
        }
        if ($request->qa_tel_alignment != '') {
            $firstqacheck->qa_tel_alignment = $request->qa_tel_alignment;
        }
        if ($request->qa_email_task != '') {
            $firstqacheck->qa_email_task = $request->qa_email_task;
        }
        if ($request->qa_design_task != '') {
            $firstqacheck->qa_design_task = $request->qa_design_task;
        }
        if ($request->qa_responsive_task != '') {
            $firstqacheck->qa_responsive_task = $request->qa_responsive_task;
        }
        if ($request->qa_customer_changes != '') {
            $firstqacheck->qa_customer_changes = $request->qa_customer_changes;
        }
        if ($request->qa_getfrom_task != '') {
            $firstqacheck->qa_getfrom_task = $request->qa_getfrom_task;
        }
        if ($request->qa_addressdetails_task != '') {
            $firstqacheck->qa_addressdetails_task = $request->qa_addressdetails_task;
        }
        if ($request->qa_social_link != '') {
            $firstqacheck->qa_social_link = $request->qa_social_link;
        }
        if ($request->qa_shover_link != '') {
            $firstqacheck->qa_shover_link = $request->qa_shover_link;
        }
        if ($request->qa_stitle_link != '') {
            $firstqacheck->qa_stitle_link = $request->qa_stitle_link;
        }
        if ($request->qa_spellings_check != '') {
            $firstqacheck->qa_spellings_check = $request->qa_spellings_check;
        }
        if ($request->qa_dummy_links != '') {
            $firstqacheck->qa_dummy_links = $request->qa_dummy_links;
        }
        if ($request->qa_w3c_check != '') {
            $firstqacheck->qa_w3c_check = $request->qa_w3c_check;
        }

        $firstqacheck->update();
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
