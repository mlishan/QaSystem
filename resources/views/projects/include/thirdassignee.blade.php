
<div class="col-lg-4 col-md-4 col-xs-12 d-flex">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td colspan="3">
                    <p><b>3rd Assignee</b></p>
                    <select id="thirdassignee" class="form-control">
                        @foreach($project->users() as $user)
                            <option value="{{$user->id}}" {{(optional($project->thirdassignee)->thirdassignee === $user->id) ? 'selected' : null}} {{($project->thirdassignee) ? 'disabled' : null}}>{{$user->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><p><b><label class="badge badge-warning">Assignee</label></b></p></td>
                <td class="text-right"><p><b><label class="badge badge-danger">QA</label></b></p></td>
            </tr>

            <tr>
                <td>IE</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="ie" value="1" {{(optional($project->thirdassignee)->ie) ? 'checked' : null}} {{(optional($project->thirdassignee)->ie) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="ie" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qaie" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qaie) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qaie) ? 'disabled' : null}}>
                        <label for="qaie" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Windows (Responsive)</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="windows" value="1" {{(optional($project->thirdassignee)->windows) ? 'checked' : null}} {{(optional($project->thirdassignee)->windows) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="windows" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qawindows" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qawindows) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qawindows) ? 'disabled' : null}}>
                        <label for="qawindows" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Large Screen</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="large" value="1" {{(optional($project->thirdassignee)->large) ? 'checked' : null}} {{(optional($project->thirdassignee)->large) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="large" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qalarge" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qalarge) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qalarge) ? 'disabled' : null}}>
                        <label for="qalarge" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Opera</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="opera" value="1" {{(optional($project->thirdassignee)->opera) ? 'checked' : null}} {{(optional($project->thirdassignee)->opera) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="opera" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qaopera" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qaopera) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qaopera) ? 'disabled' : null}}>
                        <label for="qaopera" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3"><p><b>Address details</b></p></td>
            </tr>

            <tr>
                <td>Spelling</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="add_spelling" value="1" {{(optional($project->thirdassignee)->add_spelling) ? 'checked' : null}} {{(optional($project->thirdassignee)->add_spelling) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="add_spelling" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qaadd_spelling" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qaadd_spelling) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qaadd_spelling) ? 'disabled' : null}}>
                        <label for="qaadd_spelling" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Area Checking</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="area_check" value="1" {{(optional($project->thirdassignee)->area_check) ? 'checked' : null}} {{(optional($project->thirdassignee)->area_check) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="area_check" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qaarea_check" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qaarea_check) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qaarea_check) ? 'disabled' : null}}>
                        <label for="qaarea_check" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Postal Code</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="postal" value="1" {{(optional($project->thirdassignee)->postal) ? 'checked' : null}} {{(optional($project->thirdassignee)->postal) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="postal" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qapostal" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qapostal) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qapostal) ? 'disabled' : null}}>
                        <label for="qapostal" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Alignment</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="add_alignment" value="1" {{(optional($project->thirdassignee)->add_alignment) ? 'checked' : null}} {{(optional($project->thirdassignee)->add_alignment) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="add_alignment" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qaadd_alignment" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qaadd_alignment) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qaadd_alignment) ? 'disabled' : null}}>
                        <label for="qaadd_alignment" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Icon</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="add_icon" value="1" {{(optional($project->thirdassignee)->add_icon) ? 'checked' : null}} {{(optional($project->thirdassignee)->add_icon) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="add_icon" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qaadd_icon" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qaadd_icon) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qaadd_icon) ? 'disabled' : null}}>
                        <label for="qaadd_icon" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Order</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="add_order" value="1" {{(optional($project->thirdassignee)->add_order) ? 'checked' : null}} {{(optional($project->thirdassignee)->add_order) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="add_order" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qaaadd_order" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qaaadd_order) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qaaadd_order) ? 'disabled' : null}}>
                        <label for="qaaadd_order" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Map</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="map" value="1" {{(optional($project->thirdassignee)->map) ? 'checked' : null}} {{(optional($project->thirdassignee)->map) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="map" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qamap" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qamap) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qamap) ? 'disabled' : null}}>
                        <label for="qamap" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Address Format</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="add_format" value="1" {{(optional($project->thirdassignee)->add_format) ? 'checked' : null}} {{(optional($project->thirdassignee)->add_format) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="add_format" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qaadd_format" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qaadd_format) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qaadd_format) ? 'disabled' : null}}>
                        <label for="qaadd_format" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3"><p><b>Descriptions</b></p></td>
            </tr>

            <tr>
                <td>Should Be Unique</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="be_unique" value="1" {{(optional($project->thirdassignee)->be_unique) ? 'checked' : null}} {{(optional($project->thirdassignee)->be_unique) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="be_unique" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qabe_unique" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qabe_unique) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qabe_unique) ? 'disabled' : null}}>
                        <label for="qabe_unique" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Add Services & Areas</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="desc_area" value="1" {{(optional($project->thirdassignee)->desc_area) ? 'checked' : null}} {{(optional($project->thirdassignee)->desc_area) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="desc_area" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qadesc_area" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qadesc_area) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qadesc_area) ? 'disabled' : null}}>
                        <label for="qadesc_area" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Should Be Meaningful</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="be_meaningful" value="1" {{(optional($project->thirdassignee)->be_meaningful) ? 'checked' : null}} {{(optional($project->thirdassignee)->be_meaningful) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="be_meaningful" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qabe_meaningful" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qabe_meaningful) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qabe_meaningful) ? 'disabled' : null}}>
                        <label for="qabe_meaningful" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td>Customer CMS Login (If a CMS Holder)</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="cms" value="1" {{(optional($project->thirdassignee)->cms) ? 'checked' : null}} {{(optional($project->thirdassignee)->cms) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="cms" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qacms" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qacms) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qacms) ? 'disabled' : null}}>
                        <label for="qacms" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Include Blocks To Every Content</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="block" value="1" {{(optional($project->thirdassignee)->block) ? 'checked' : null}} {{(optional($project->thirdassignee)->block) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="block" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qablock" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qablock) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qablock) ? 'disabled' : null}}>
                        <label for="qablock" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3"><p><b>Keywords</b></p></td>
            </tr>

            <tr>
                <td>Services + Areas</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="service_area" value="1" {{(optional($project->thirdassignee)->service_area) ? 'checked' : null}} {{(optional($project->thirdassignee)->service_area) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="service_area" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qaservice_area" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qaservice_area) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qaservice_area) ? 'disabled' : null}}>
                        <label for="qaservice_area" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td>Image Upload</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="img_upload" value="1" {{(optional($project->thirdassignee)->img_upload) ? 'checked' : null}} {{(optional($project->thirdassignee)->img_upload) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="img_upload" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qaimg_upload" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qaimg_upload) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qaimg_upload) ? 'disabled' : null}}>
                        <label for="qaimg_upload" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3"><p><b>Layout</b></p></td>
            </tr>

            <tr>
                <td>Compatible With Design</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="compatible_design" value="1" {{(optional($project->thirdassignee)->compatible_design) ? 'checked' : null}} {{(optional($project->thirdassignee)->compatible_design) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="compatible_design" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qacompatible_design" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qacompatible_design) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qacompatible_design) ? 'disabled' : null}}>
                        <label for="qacompatible_design" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Font Size</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="font_size" value="1" {{(optional($project->thirdassignee)->font_size) ? 'checked' : null}} {{(optional($project->thirdassignee)->font_size) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="font_size" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qafont_size" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qafont_size) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qafont_size) ? 'disabled' : null}}>
                        <label for="qafont_size" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Styles</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="layout_style" value="1" {{(optional($project->thirdassignee)->layout_style) ? 'checked' : null}} {{(optional($project->thirdassignee)->layout_style) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="layout_style" class="custom-control-label"></label>
                    </div>
                </td>


                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qalayout_style" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qalayout_style) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qalayout_style) ? 'disabled' : null}}>
                        <label for="qalayout_style" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>Opacity Range</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="opacity" value="1" {{(optional($project->thirdassignee)->opacity) ? 'checked' : null}} {{(optional($project->thirdassignee)->opacity) ? 'disabled' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}}>
                        <label for="opacity" class="custom-control-label"></label>
                    </div>
                </td>

                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qaopacity" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->thirdqasignee)->qaopacity) ? 'checked' : null}} {{(optional($project->thirdqasignee)->qaopacity) ? 'disabled' : null}}>
                        <label for="qaopacity" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="text-right">
                    <button id="thirdCheckSave" type="button" class="btn bg-gradient-warning" {{Auth::user()->userrole == 2 ? 'disabled' : null}}
                        value="{{$project->thirdassignee->id ?? null}}">
                        <i class="fas fa-tasks"></i> Submit
                    </button>
                </td>

                <td colspan="3" class="text-right">
                    <button id="thirdQaCheckSave" type="button" class="btn bg-gradient-danger" {{Auth::user()->userrole == 1 ? 'disabled' : null}}
                        value="{{$project->thirdqasignee->id ?? null}}">
                        <i class="fas fa-tasks"></i> Submit
                    </button>
                </td>
            </tr>

        </tbody>
    </table>
</div>
