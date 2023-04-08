<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thirdqacheck;

class ThirdQaCheckController extends Controller
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
        $thirdqacheck = new Thirdqacheck();

        $thirdqacheck->project_id = $request->project_id;

        if ($request->qaassignee != '') {
            $thirdqacheck->qaassignee = $request->qaassignee;
        }

        if ($request->qaie != '') {
            $thirdqacheck->qaie = $request->qaie;
        }

        if ($request->qawindows != '') {
            $thirdqacheck->qawindows = $request->qawindows;
        }

        if ($request->qalarge != '') {
            $thirdqacheck->qalarge = $request->qalarge;
        }

        if ($request->qaopera != '') {
            $thirdqacheck->qaopera = $request->qaopera;
        }

        if ($request->qaadd_spelling != '') {
            $thirdqacheck->qaadd_spelling = $request->qaadd_spelling;
        }

        if ($request->qaarea_check != '') {
            $thirdqacheck->qaarea_check = $request->qaarea_check;
        }

        if ($request->qapostal != '') {
            $thirdqacheck->qapostal = $request->qapostal;
        }

        if ($request->qaadd_alignment != '') {
            $thirdqacheck->qaadd_alignment = $request->qaadd_alignment;
        }

        if ($request->qaadd_icon != '') {
            $thirdqacheck->qaadd_icon = $request->qaadd_icon;
        }

        if ($request->qaaadd_order != '') {
            $thirdqacheck->qaaadd_order = $request->qaaadd_order;
        }

        if ($request->qamap != '') {
            $thirdqacheck->qamap = $request->qamap;
        }

        if ($request->qaadd_format != '') {
            $thirdqacheck->qaadd_format = $request->qaadd_format;
        }

        if ($request->qabe_unique != '') {
            $thirdqacheck->qabe_unique = $request->qabe_unique;
        }

        if ($request->qadesc_area != '') {
            $thirdqacheck->qadesc_area = $request->qadesc_area;
        }

        if ($request->qabe_meaningful != '') {
            $thirdqacheck->qabe_meaningful = $request->qabe_meaningful;
        }

        if ($request->qacms != '') {
            $thirdqacheck->qacms = $request->qacms;
        }

        if ($request->qablock != '') {
            $thirdqacheck->qablock = $request->qablock;
        }

        if ($request->qaservice_area != '') {
            $thirdqacheck->qaservice_area = $request->qaservice_area;
        }

        if ($request->qaimg_upload != '') {
            $thirdqacheck->qaimg_upload = $request->qaimg_upload;
        }

        if ($request->qacompatible_design != '') {
            $thirdqacheck->qacompatible_design = $request->qacompatible_design;
        }

        if ($request->qafont_size != '') {
            $thirdqacheck->qafont_size = $request->qafont_size;
        }

        if ($request->qalayout_style != '') {
            $thirdqacheck->qalayout_style = $request->qalayout_style;
        }

        if ($request->qaopacity != '') {
            $thirdqacheck->qaopacity = $request->qaopacity;
        }

        $thirdqacheck->save();
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
        $thirdqacheck = new Thirdqacheck();

        if( $request->has('id') ){
            $id = $request->id;
            $thirdqacheck = $thirdqacheck->find($id);
        }

        if ($request->project_id != '') {
            $thirdqacheck->project_id = $request->project_id;
        }

        if ($request->qaassignee != '') {
            $thirdqacheck->qaassignee = $request->qaassignee;
        }

        if ($request->qaie != '') {
            $thirdqacheck->qaie = $request->qaie;
        }

        if ($request->qawindows != '') {
            $thirdqacheck->qawindows = $request->qawindows;
        }

        if ($request->qalarge != '') {
            $thirdqacheck->qalarge = $request->qalarge;
        }

        if ($request->qaopera != '') {
            $thirdqacheck->qaopera = $request->qaopera;
        }

        if ($request->qaadd_spelling != '') {
            $thirdqacheck->qaadd_spelling = $request->qaadd_spelling;
        }

        if ($request->qaarea_check != '') {
            $thirdqacheck->qaarea_check = $request->qaarea_check;
        }

        if ($request->qapostal != '') {
            $thirdqacheck->qapostal = $request->qapostal;
        }

        if ($request->qaadd_alignment != '') {
            $thirdqacheck->qaadd_alignment = $request->qaadd_alignment;
        }

        if ($request->qaadd_icon != '') {
            $thirdqacheck->qaadd_icon = $request->qaadd_icon;
        }

        if ($request->qaaadd_order != '') {
            $thirdqacheck->qaaadd_order = $request->qaaadd_order;
        }

        if ($request->qamap != '') {
            $thirdqacheck->qamap = $request->qamap;
        }

        if ($request->qaadd_format != '') {
            $thirdqacheck->qaadd_format = $request->qaadd_format;
        }

        if ($request->qabe_unique != '') {
            $thirdqacheck->qabe_unique = $request->qabe_unique;
        }

        if ($request->qadesc_area != '') {
            $thirdqacheck->qadesc_area = $request->qadesc_area;
        }

        if ($request->qabe_meaningful != '') {
            $thirdqacheck->qabe_meaningful = $request->qabe_meaningful;
        }

        if ($request->qacms != '') {
            $thirdqacheck->qacms = $request->qacms;
        }

        if ($request->qablock != '') {
            $thirdqacheck->qablock = $request->qablock;
        }

        if ($request->qaservice_area != '') {
            $thirdqacheck->qaservice_area = $request->qaservice_area;
        }

        if ($request->qaimg_upload != '') {
            $thirdqacheck->qaimg_upload = $request->qaimg_upload;
        }

        if ($request->qacompatible_design != '') {
            $thirdqacheck->qacompatible_design = $request->qacompatible_design;
        }

        if ($request->qafont_size != '') {
            $thirdqacheck->qafont_size = $request->qafont_size;
        }

        if ($request->qalayout_style != '') {
            $thirdqacheck->qalayout_style = $request->qalayout_style;
        }

        if ($request->qaopacity != '') {
            $thirdqacheck->qaopacity = $request->qaopacity;
        }

        $thirdqacheck->update();
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
