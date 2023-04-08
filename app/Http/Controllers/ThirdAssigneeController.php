<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thirdassignee;

class ThirdAssigneeController extends Controller
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
        $thirdassignee = new Thirdassignee();

        $thirdassignee->project_id = $request->project_id;

        if ($request->thirdassignee != '') {
            $thirdassignee->thirdassignee = $request->thirdassignee;
        }
        if ($request->ie != '') {
            $thirdassignee->ie = $request->ie;
        }
        if ($request->windows != '') {
            $thirdassignee->windows = $request->windows;
        }
        if ($request->large != '') {
            $thirdassignee->large = $request->large;
        }
        if ($request->opera != '') {
            $thirdassignee->opera = $request->opera;
        }
        if ($request->add_spelling != '') {
            $thirdassignee->add_spelling = $request->add_spelling;
        }
        if ($request->area_check != '') {
            $thirdassignee->area_check = $request->area_check;
        }
        if ($request->postal != '') {
            $thirdassignee->postal = $request->postal;
        }
        if ($request->add_alignment != '') {
            $thirdassignee->add_alignment = $request->add_alignment;
        }
        if ($request->add_icon != '') {
            $thirdassignee->add_icon = $request->add_icon;
        }
        if ($request->add_order != '') {
            $thirdassignee->add_order = $request->add_order;
        }
        if ($request->map != '') {
            $thirdassignee->map = $request->map;
        }
        if ($request->add_format != '') {
            $thirdassignee->add_format = $request->add_format;
        }
        if ($request->be_unique != '') {
            $thirdassignee->be_unique = $request->be_unique;
        }
        if ($request->desc_area != '') {
            $thirdassignee->desc_area = $request->desc_area;
        }
        if ($request->be_meaningful != '') {
            $thirdassignee->be_meaningful = $request->be_meaningful;
        }
        if ($request->cms != '') {
            $thirdassignee->cms = $request->cms;
        }
        if ($request->block != '') {
            $thirdassignee->block = $request->block;
        }
        if ($request->service_area != '') {
            $thirdassignee->service_area = $request->service_area;
        }
        if ($request->img_upload != '') {
            $thirdassignee->img_upload = $request->img_upload;
        }
        if ($request->compatible_design != '') {
            $thirdassignee->compatible_design = $request->compatible_design;
        }
        if ($request->font_size != '') {
            $thirdassignee->font_size = $request->font_size;
        }
        if ($request->layout_style != '') {
            $thirdassignee->layout_style = $request->layout_style;
        }
        if ($request->opacity != '') {
            $thirdassignee->opacity = $request->opacity;
        }
        $thirdassignee->save();
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
        $thirdassignee = new Thirdassignee();

        if( $request->has('id') ){
            $id = $request->id;
            $thirdassignee = $thirdassignee->find($id);
        }

        if ($request->project_id != '') {
            $thirdassignee->project_id = $request->project_id;
        }
        if ($request->thirdassignee != '') {
            $thirdassignee->thirdassignee = $request->thirdassignee;
        }
        if ($request->ie != '') {
            $thirdassignee->ie = $request->ie;
        }
        if ($request->windows != '') {
            $thirdassignee->windows = $request->windows;
        }
        if ($request->large != '') {
            $thirdassignee->large = $request->large;
        }
        if ($request->opera != '') {
            $thirdassignee->opera = $request->opera;
        }
        if ($request->add_spelling != '') {
            $thirdassignee->add_spelling = $request->add_spelling;
        }
        if ($request->area_check != '') {
            $thirdassignee->area_check = $request->area_check;
        }
        if ($request->postal != '') {
            $thirdassignee->postal = $request->postal;
        }
        if ($request->add_alignment != '') {
            $thirdassignee->add_alignment = $request->add_alignment;
        }
        if ($request->add_icon != '') {
            $thirdassignee->add_icon = $request->add_icon;
        }
        if ($request->add_order != '') {
            $thirdassignee->add_order = $request->add_order;
        }
        if ($request->map != '') {
            $thirdassignee->map = $request->map;
        }
        if ($request->add_format != '') {
            $thirdassignee->add_format = $request->add_format;
        }
        if ($request->be_unique != '') {
            $thirdassignee->be_unique = $request->be_unique;
        }
        if ($request->desc_area != '') {
            $thirdassignee->desc_area = $request->desc_area;
        }
        if ($request->be_meaningful != '') {
            $thirdassignee->be_meaningful = $request->be_meaningful;
        }
        if ($request->cms != '') {
            $thirdassignee->cms = $request->cms;
        }
        if ($request->block != '') {
            $thirdassignee->block = $request->block;
        }
        if ($request->service_area != '') {
            $thirdassignee->service_area = $request->service_area;
        }
        if ($request->img_upload != '') {
            $thirdassignee->img_upload = $request->img_upload;
        }
        if ($request->compatible_design != '') {
            $thirdassignee->compatible_design = $request->compatible_design;
        }
        if ($request->font_size != '') {
            $thirdassignee->font_size = $request->font_size;
        }
        if ($request->layout_style != '') {
            $thirdassignee->layout_style = $request->layout_style;
        }
        if ($request->opacity != '') {
            $thirdassignee->opacity = $request->opacity;
        }
        $thirdassignee->update();
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
