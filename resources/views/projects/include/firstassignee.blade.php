<div class="col-lg-4 col-md-4 col-xs-12 d-flex">
    <table class="table table-striped">
        <tbody>
            <tr>
                <td colspan="4">
                    <p><b>1st Assignee</b></p>
                    <select id="assignee" class="form-control">
                        @foreach($project->users() as $user)
                            <option value="{{$user->id}}" {{(optional($project->firstassignee)->assignee === $user->id) ? 'selected' : null}} {{($project->firstassignee) ? 'disabled' : null}}>{{$user->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><p><b><label class="badge badge-warning">Assignee</label></b></p></td>
                <td class="text-right"><p><b><label class="badge badge-danger">QA</label></b></p></td>
            </tr>

            <tr>
                <td>1.</td>
                <td>Chrome</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="chrome" value="1" {{(optional($project->firstassignee)->chrome) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->chrome) ? 'disabled' : null}}>
                        <label for="chrome" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qachrome" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qachrome) ? 'checked' : null}} {{(optional($project->firstqasignee)->qachrome) ? 'disabled' : null}}>
                        <label for="qachrome" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>2.</td>
                <td>Tab Horizontal</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="tab_horizontal" value="1" {{(optional($project->firstassignee)->tab_horizontal) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->tab_horizontal) ? 'disabled' : null}}>
                        <label for="tab_horizontal" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_horizontal" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_horizontal) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_horizontal) ? 'disabled' : null}}>
                        <label for="qa_horizontal" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>3.</td>
                <td>Tab Vertical</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="tab_vertical" value="1" {{(optional($project->firstassignee)->tab_vertical) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->tab_vertical) ? 'disabled' : null}}>
                        <label for="tab_vertical" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_vertical" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_vertical) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_vertical) ? 'disabled' : null}}>
                        <label for="qa_vertical" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>4.</td>
                <td>Ios (Responsive)</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="ios" value="1" {{(optional($project->firstassignee)->ios) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->ios) ? 'disabled' : null}}>
                        <label for="ios" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_ios" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_ios) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_ios) ? 'disabled' : null}}>
                        <label for="qa_ios" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <p><b>Telephone / Mob number</b></p>
                </td>
            </tr>

            <tr>
                <td>5.</td>
                <td>Format</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="tel_format" value="1" {{(optional($project->firstassignee)->tel_format) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->tel_format) ? 'disabled' : null}}>
                        <label for="tel_format" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_tel_format" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_tel_format) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_tel_format) ? 'disabled' : null}}>
                        <label for="qa_tel_format" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>6.</td>
                <td>Title Tag</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="tel_title" value="1" {{(optional($project->firstassignee)->tel_title) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->tel_title) ? 'disabled' : null}}>
                        <label for="tel_title" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_tel_title" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_tel_title) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_tel_title) ? 'disabled' : null}}>
                        <label for="qa_tel_title" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>7.</td>
                <td>Link</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="tel_link" value="1" {{(optional($project->firstassignee)->tel_link) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->tel_link) ? 'disabled' : null}}>
                        <label for="tel_link" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_tel_link" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_tel_link) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_tel_link) ? 'disabled' : null}}>
                        <label for="qa_tel_link" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>8.</td>
                <td>Icon</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="tel_icon" value="1" {{(optional($project->firstassignee)->tel_icon) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->tel_icon) ? 'disabled' : null}}>
                        <label for="tel_icon" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_tel_icon" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_tel_icon) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_tel_icon) ? 'disabled' : null}}>
                        <label for="qa_tel_icon" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>9.</td>
                <td>Alignment</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="tel_alignment" value="1" {{(optional($project->firstassignee)->tel_alignment) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->tel_alignment) ? 'disabled' : null}}>
                        <label for="tel_alignment" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_tel_alignment" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_tel_alignment) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_tel_alignment) ? 'disabled' : null}}>
                        <label for="qa_tel_alignment" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <p><b>Asana Tasks - Check Every Task</b></p>
                </td>
            </tr>

                <tr>
                <td>10.</td>
                <td>Email Task</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="email_task" value="1" {{(optional($project->firstassignee)->email_task) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->email_task) ? 'disabled' : null}}>
                        <label for="email_task" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_email_task" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_email_task) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_email_task) ? 'disabled' : null}}>
                        <label for="qa_email_task" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>11.</td>
                <td>Design Task</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="design_task" value="1" {{(optional($project->firstassignee)->design_task) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->design_task) ? 'disabled' : null}}>
                        <label for="design_task" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_design_task" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_design_task) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_design_task) ? 'disabled' : null}}>
                        <label for="qa_design_task" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>12.</td>
                <td>New Responsive Task</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="responsive_task" value="1" {{(optional($project->firstassignee)->responsive_task) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->responsive_task) ? 'disabled' : null}}>
                        <label for="responsive_task" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_responsive_task" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_responsive_task) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_responsive_task) ? 'disabled' : null}}>
                        <label for="qa_responsive_task" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>13.</td>
                <td>Customer Changes Task</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="customer_changes" value="1" {{(optional($project->firstassignee)->customer_changes) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->customer_changes) ? 'disabled' : null}}>
                        <label for="customer_changes" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_customer_changes" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_customer_changes) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_customer_changes) ? 'disabled' : null}}>
                        <label for="qa_customer_changes" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>14.</td>
                <td>Get From Customer</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="getfrom_task" value="1" {{(optional($project->firstassignee)->getfrom_task) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->getfrom_task) ? 'disabled' : null}}>
                        <label for="getfrom_task" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_getfrom_task" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_getfrom_task) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_getfrom_task) ? 'disabled' : null}}>
                        <label for="qa_getfrom_task" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>15.</td>
                <td>Check Address Details Task</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="addressdetails_task" value="1" {{(optional($project->firstassignee)->addressdetails_task) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->addressdetails_task) ? 'disabled' : null}}>
                        <label for="addressdetails_task" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_addressdetails_task" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_addressdetails_task) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_addressdetails_task) ? 'disabled' : null}}>
                        <label for="qa_addressdetails_task" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <b><p>Social Media</p></b>
                </td>
            </tr>

            <tr>
                <td>16.</td>
                <td>Link</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="social_link" value="1" {{(optional($project->firstassignee)->social_link) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->social_link) ? 'disabled' : null}}>
                        <label for="social_link" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_social_link" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_social_link) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_social_link) ? 'disabled' : null}}>
                        <label for="qa_social_link" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>17.</td>
                <td>Hover Colour / Effect</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="shover_link" value="1" {{(optional($project->firstassignee)->shover_link) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->shover_link) ? 'disabled' : null}}>
                        <label for="shover_link" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_shover_link" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_shover_link) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_shover_link) ? 'disabled' : null}}>
                        <label for="qa_shover_link" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>18.</td>
                <td>Title Tag</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="stitle_link" value="1" {{(optional($project->firstassignee)->stitle_link) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->stitle_link) ? 'disabled' : null}}>
                        <label for="stitle_link" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_stitle_link" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_stitle_link) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_stitle_link) ? 'disabled' : null}}>
                        <label for="qa_stitle_link" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>19.</td>
                <td>Spellings Check</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="spellings_check" value="1" {{(optional($project->firstassignee)->spellings_check) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->spellings_check) ? 'disabled' : null}}>
                        <label for="spellings_check" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_spellings_check" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_spellings_check) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_spellings_check) ? 'disabled' : null}}>
                        <label for="qa_spellings_check" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>20.</td>
                <td>Dummy Links/ Dummy Text</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="dummy_links" value="1" {{(optional($project->firstassignee)->dummy_links) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->dummy_links) ? 'disabled' : null}}>
                        <label for="dummy_links" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_dummy_links" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->firstqasignee)->qa_dummy_links) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_dummy_links) ? 'disabled' : null}}>
                        <label for="qa_dummy_links" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <p><b>W3C check</b></p>
                </td>
            </tr>

            <tr>
                <td>21.</td>
                <td>W3C Check</td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="w3c_check" value="1" {{(optional($project->firstassignee)->w3c_check) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->firstassignee)->w3c_check) ? 'disabled' : null}}>
                        <label for="w3c_check" class="custom-control-label"></label>
                    </div>
                </td>
                <td class="text-right">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="qa_w3c_check" value="1" {{(optional($project->firstqasignee)->qa_w3c_check) ? 'checked' : null}} {{(optional($project->firstqasignee)->qa_w3c_check) ? 'disabled' : null}} {{Auth::user()->userrole == 1 ? 'disabled' : null}}>
                        <label for="qa_w3c_check" class="custom-control-label"></label>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="text-right">
                    <button id="firstCheckSave" type="button" class="btn bg-gradient-warning" {{Auth::user()->userrole == 2 ? 'disabled' : null}}
                        value="{{$project->firstassignee->id ?? null}}">
                        <i class="fas fa-tasks"></i> Submit
                    </button>
                </td>
                <td colspan="2" class="text-right">
                    <button id="firstQakSave" type="button" class="btn bg-gradient-danger" {{Auth::user()->userrole == 1 ? 'disabled' : null}}
                        value="{{$project->firstqasignee->id ?? null}}">
                        <i class="fas fa-tasks"></i> Submit
                    </button>
                </td>
            </tr>

        </tbody>
    </table>
</div>
