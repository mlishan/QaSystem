<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secondassignee;

class SecondAssigneeController extends Controller
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
        $secondassigne = new Secondassignee();

        $secondassigne->project_id = $request->project_id;

        if ($request->secondassignee != '') {
            $secondassigne->secondassignee = $request->secondassignee;
        }
        if ($request->firefox != '') {
            $secondassigne->firefox = $request->firefox;
        }
        if ($request->android != '') {
            $secondassigne->android = $request->android;
        }
        if ($request->safari != '') {
            $secondassigne->safari = $request->safari;
        }
        if ($request->res_one != '') {
            $secondassigne->res_one = $request->res_one;
        }
        if ($request->res_two != '') {
            $secondassigne->res_two = $request->res_two;
        }
        if ($request->email_title != '') {
            $secondassigne->email_title = $request->email_title;
        }
        if ($request->email_link != '') {
            $secondassigne->email_link = $request->email_link;
        }
        if ($request->email_icon != '') {
            $secondassigne->email_icon = $request->email_icon;
        }
        if ($request->email_alignment != '') {
            $secondassigne->email_alignment = $request->email_alignment;
        }
        if ($request->meta_title != '') {
            $secondassigne->meta_title = $request->meta_title;
        }
        if ($request->logo_title != '') {
            $secondassigne->logo_title = $request->logo_title;
        }
        if ($request->size != '') {
            $secondassigne->size = $request->size;
        }
        if ($request->watermark != '') {
            $secondassigne->watermark = $request->watermark;
        }
        if ($request->favicon != '') {
            $secondassigne->favicon = $request->favicon;
        }
        if ($request->alt_tag != '') {
            $secondassigne->alt_tag = $request->alt_tag;
        }
        if ($request->imgtitle_tag != '') {
            $secondassigne->imgtitle_tag = $request->imgtitle_tag;
        }
        if ($request->privacy != '') {
            $secondassigne->privacy = $request->privacy;
        }
        if ($request->create_gal != '') {
            $secondassigne->create_gal = $request->create_gal;
        }
        if ($request->cf_email != '') {
            $secondassigne->cf_email = $request->cf_email;
        }
        if ($request->validation != '') {
            $secondassigne->validation = $request->validation;
        }
        if ($request->cf_style != '') {
            $secondassigne->cf_style = $request->cf_style;
        }
        if ($request->revamp_link != '') {
            $secondassigne->revamp_link = $request->revamp_link;
        }

        $secondassigne->save();
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
        $secondassigne = new Secondassignee();

        if( $request->has('id') ){
            $id = $request->id;
            $secondassigne = $secondassigne->find($id);
        }

        if ($request->project_id != '') {
            $secondassigne->project_id = $request->project_id;
        }
        if ($request->secondassignee != '') {
            $secondassigne->secondassignee = $request->secondassignee;
        }
        if ($request->firefox != '') {
            $secondassigne->firefox = $request->firefox;
        }
        if ($request->android != '') {
            $secondassigne->android = $request->android;
        }
        if ($request->safari != '') {
            $secondassigne->safari = $request->safari;
        }
        if ($request->res_one != '') {
            $secondassigne->res_one = $request->res_one;
        }
        if ($request->res_two != '') {
            $secondassigne->res_two = $request->res_two;
        }
        if ($request->email_title != '') {
            $secondassigne->email_title = $request->email_title;
        }
        if ($request->email_link != '') {
            $secondassigne->email_link = $request->email_link;
        }
        if ($request->email_icon != '') {
            $secondassigne->email_icon = $request->email_icon;
        }
        if ($request->email_alignment != '') {
            $secondassigne->email_alignment = $request->email_alignment;
        }
        if ($request->meta_title != '') {
            $secondassigne->meta_title = $request->meta_title;
        }
        if ($request->logo_title != '') {
            $secondassigne->logo_title = $request->logo_title;
        }
        if ($request->size != '') {
            $secondassigne->size = $request->size;
        }
        if ($request->watermark != '') {
            $secondassigne->watermark = $request->watermark;
        }
        if ($request->favicon != '') {
            $secondassigne->favicon = $request->favicon;
        }
        if ($request->alt_tag != '') {
            $secondassigne->alt_tag = $request->alt_tag;
        }
        if ($request->imgtitle_tag != '') {
            $secondassigne->imgtitle_tag = $request->imgtitle_tag;
        }
        if ($request->privacy != '') {
            $secondassigne->privacy = $request->privacy;
        }
        if ($request->create_gal != '') {
            $secondassigne->create_gal = $request->create_gal;
        }
        if ($request->cf_email != '') {
            $secondassigne->cf_email = $request->cf_email;
        }
        if ($request->validation != '') {
            $secondassigne->validation = $request->validation;
        }
        if ($request->cf_style != '') {
            $secondassigne->cf_style = $request->cf_style;
        }
        if ($request->revamp_link != '') {
            $secondassigne->revamp_link = $request->revamp_link;
        }

        $secondassigne->update();
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
