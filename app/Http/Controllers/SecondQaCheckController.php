<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secondqacheck;

class SecondQaCheckController extends Controller
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
        $secondqacheck = new Secondqacheck();

        $secondqacheck->project_id = $request->project_id;
        if ($request->qaassignee != '') {
            $secondqacheck->qaassignee = $request->qaassignee;
        }
        if ($request->qafirefox != '') {
            $secondqacheck->qafirefox = $request->qafirefox;
        }
        if ($request->qaandroid != '') {
           $secondqacheck->qaandroid = $request->qaandroid;
        }
        if ($request->qasafari != '') {
           $secondqacheck->qasafari = $request->qasafari;
        }
        if ($request->qares_one != '') {
           $secondqacheck->qares_one = $request->qares_one;
        }
        if ($request->qares_two != '') {
           $secondqacheck->qares_two = $request->qares_two;
        }
        if ($request->qaemail_title != '') {
            $secondqacheck->qaemail_title = $request->qaemail_title;
        }
        if ($request->qaemail_link != '') {
            $secondqacheck->qaemail_link = $request->qaemail_link;
        }
        if ($request->qaemail_icon != '') {
            $secondqacheck->qaemail_icon = $request->qaemail_icon;
        }
        if ($request->qaemail_alignment != '') {
            $secondqacheck->qaemail_alignment = $request->qaemail_alignment;
        }
        if ($request->qameta_title != '') {
            $secondqacheck->qameta_title = $request->qameta_title;
        }
        if ($request->qalogo_title != '') {
            $secondqacheck->qalogo_title = $request->qalogo_title;
        }
        if ($request->qasize != '') {
            $secondqacheck->qasize = $request->qasize;
        }
        if ($request->qawatermark != '') {
            $secondqacheck->qawatermark = $request->qawatermark;
        }
        if ($request->qafavicon != '') {
            $secondqacheck->qafavicon = $request->qafavicon;
        }
        if ($request->qaalt_tag != '') {
            $secondqacheck->qaalt_tag = $request->qaalt_tag;
        }
        if ($request->qaimgtitle_tag != '') {
            $secondqacheck->qaimgtitle_tag = $request->qaimgtitle_tag;
        }
        if ($request->qaprivacy != '') {
            $secondqacheck->qaprivacy = $request->qaprivacy;
        }
        if ($request->qacreate_gal != '') {
            $secondqacheck->qacreate_gal = $request->qacreate_gal;
        }
        if ($request->qacf_email != '') {
            $secondqacheck->qacf_email = $request->qacf_email;
        }
        if ($request->qavalidation != '') {
            $secondqacheck->qavalidation = $request->qavalidation;
        }
        if ($request->qacf_style != '') {
            $secondqacheck->qacf_style = $request->qacf_style;
        }
        if ($request->qarevamp_link != '') {
            $secondqacheck->qarevamp_link = $request->qarevamp_link;
        }
        $secondqacheck->save();
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
        $secondqacheck = new Secondqacheck();

        if( $request->has('id') ){
            $id = $request->id;
            $secondqacheck = $secondqacheck->find($id);
        }

        if ($request->project_id != '') {
            $secondqacheck->project_id = $request->project_id;
        }
        if ($request->qaassignee != '') {
            $secondqacheck->qaassignee = $request->qaassignee;
        }
        if ($request->qafirefox != '') {
            $secondqacheck->qafirefox = $request->qafirefox;
        }
        if ($request->qaandroid != '') {
           $secondqacheck->qaandroid = $request->qaandroid;
        }
        if ($request->qasafari != '') {
           $secondqacheck->qasafari = $request->qasafari;
        }
        if ($request->qares_one != '') {
           $secondqacheck->qares_one = $request->qares_one;
        }
        if ($request->qares_two != '') {
           $secondqacheck->qares_two = $request->qares_two;
        }
        if ($request->qaemail_title != '') {
            $secondqacheck->qaemail_title = $request->qaemail_title;
        }
        if ($request->qaemail_link != '') {
            $secondqacheck->qaemail_link = $request->qaemail_link;
        }
        if ($request->qaemail_icon != '') {
            $secondqacheck->qaemail_icon = $request->qaemail_icon;
        }
        if ($request->qaemail_alignment != '') {
            $secondqacheck->qaemail_alignment = $request->qaemail_alignment;
        }
        if ($request->qameta_title != '') {
            $secondqacheck->qameta_title = $request->qameta_title;
        }
        if ($request->qalogo_title != '') {
            $secondqacheck->qalogo_title = $request->qalogo_title;
        }
        if ($request->qasize != '') {
            $secondqacheck->qasize = $request->qasize;
        }
        if ($request->qawatermark != '') {
            $secondqacheck->qawatermark = $request->qawatermark;
        }
        if ($request->qafavicon != '') {
            $secondqacheck->qafavicon = $request->qafavicon;
        }
        if ($request->qaalt_tag != '') {
            $secondqacheck->qaalt_tag = $request->qaalt_tag;
        }
        if ($request->qaimgtitle_tag != '') {
            $secondqacheck->qaimgtitle_tag = $request->qaimgtitle_tag;
        }
        if ($request->qaprivacy != '') {
            $secondqacheck->qaprivacy = $request->qaprivacy;
        }
        if ($request->qacreate_gal != '') {
            $secondqacheck->qacreate_gal = $request->qacreate_gal;
        }
        if ($request->qacf_email != '') {
            $secondqacheck->qacf_email = $request->qacf_email;
        }
        if ($request->qavalidation != '') {
            $secondqacheck->qavalidation = $request->qavalidation;
        }
        if ($request->qacf_style != '') {
            $secondqacheck->qacf_style = $request->qacf_style;
        }
        if ($request->qarevamp_link != '') {
            $secondqacheck->qarevamp_link = $request->qarevamp_link;
        }
        $secondqacheck->update();
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
