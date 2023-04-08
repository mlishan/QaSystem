<div class="col-lg-4 col-md-4 col-xs-12 d-flex">
<table class="table table-striped">
    <tbody>
        <tr>
            <td colspan="3">
                <p><b>2nd Assignee</b></p>
                <select id="secondassignee" class="form-control">
                    @foreach($project->users() as $user)
                        <option value="{{$user->id}}" {{(optional($project->secondassignee)->secondassignee === $user->id) ? 'selected' : null}} {{($project->secondassignee) ? 'disabled' : null}}>{{$user->name}}</option>
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
            <td>Firefox</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="firefox" value="1" {{(optional($project->secondassignee)->firefox) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->firefox) ? 'disabled' : null}}>
                    <label for="firefox" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qafirefox" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qafirefox) ? 'checked' : null}} {{(optional($project->secondqasignee)->qafirefox) ? 'disabled' : null}}>
                    <label for="qafirefox" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Android (Responsive)</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="android" value="1" {{(optional($project->secondassignee)->android) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->android) ? 'disabled' : null}}>
                    <label for="android" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qaandroid" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qaandroid) ? 'checked' : null}} {{(optional($project->secondqasignee)->qaandroid) ? 'disabled' : null}}>
                    <label for="qaandroid" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Safari</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="safari" value="1" {{(optional($project->secondassignee)->safari) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->safari) ? 'disabled' : null}}>
                    <label for="safari" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qasafari" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qasafari) ? 'checked' : null}} {{(optional($project->secondqasignee)->qasafari) ? 'disabled' : null}}>
                    <label for="qasafari" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>1440 (Responsive) </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="res_one" value="1" {{(optional($project->secondassignee)->res_one) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->res_one) ? 'disabled' : null}}>
                    <label for="res_one" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qares_one" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qares_one) ? 'checked' : null}} {{(optional($project->secondqasignee)->qares_one) ? 'disabled' : null}}>
                    <label for="qares_one" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>1280 (Responsive) </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="res_two" value="1" {{(optional($project->secondassignee)->res_two) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->res_two) ? 'disabled' : null}}>
                    <label for="res_two" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qares_two" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qares_two) ? 'checked' : null}} {{(optional($project->secondqasignee)->qares_two) ? 'disabled' : null}}>
                    <label for="qares_two" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="3"><p><b>Email</b></p></td>
        </tr>

        <tr>
            <td>Title Tag</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="email_title" value="1" {{(optional($project->secondassignee)->email_title) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->email_title) ? 'disabled' : null}}>
                    <label for="email_title" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qaemail_title" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qaemail_title) ? 'checked' : null}} {{(optional($project->secondqasignee)->qaemail_title) ? 'disabled' : null}}>
                    <label for="qaemail_title" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Link</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="email_link" value="1" {{(optional($project->secondassignee)->email_link) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->email_link) ? 'disabled' : null}}>
                    <label for="email_link" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qaemail_link" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qaemail_link) ? 'checked' : null}} {{(optional($project->secondqasignee)->qaemail_link) ? 'disabled' : null}}>
                    <label for="qaemail_link" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Icon</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="email_icon" value="1" {{(optional($project->secondassignee)->email_icon) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->email_icon) ? 'disabled' : null}}>
                    <label for="email_icon" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qaemail_icon" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qaemail_icon) ? 'checked' : null}} {{(optional($project->secondqasignee)->qaemail_icon) ? 'disabled' : null}}>
                    <label for="qaemail_icon" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Alignment</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="email_alignment" value="1" {{(optional($project->secondassignee)->email_alignment) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->email_alignment) ? 'disabled' : null}}>
                    <label for="email_alignment" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qaemail_alignment" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qaemail_alignment) ? 'checked' : null}} {{(optional($project->secondqasignee)->qaemail_alignment) ? 'disabled' : null}}>
                    <label for="qaemail_alignment" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="3"><p><b>Meta Titles</b></p></td>
        </tr>

        <tr>
            <td>Company | Main Service | Area</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="meta_title" value="1" {{(optional($project->secondassignee)->meta_title) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->meta_title) ? 'disabled' : null}}>
                    <label for="meta_title" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qameta_title" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qameta_title) ? 'checked' : null}} {{(optional($project->secondqasignee)->qameta_title) ? 'disabled' : null}}>
                    <label for="qameta_title" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="3"><p><b>Images</b></p></td>
        </tr>

        <tr>
            <td>Logo Title Tag (Company | Home)</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="logo_title" value="1" {{(optional($project->secondassignee)->logo_title) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->logo_title) ? 'disabled' : null}}>
                    <label for="logo_title" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qalogo_title" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qalogo_title) ? 'checked' : null}} {{(optional($project->secondqasignee)->qalogo_title) ? 'disabled' : null}}>
                    <label for="qalogo_title" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Size</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="size" value="1" {{(optional($project->secondassignee)->size) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->size) ? 'disabled' : null}}>
                    <label for="size" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qasize" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qasize) ? 'checked' : null}} {{(optional($project->secondqasignee)->qasize) ? 'disabled' : null}}>
                    <label for="qasize" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Check Watermark</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="watermark" value="1" {{(optional($project->secondassignee)->watermark) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->watermark) ? 'disabled' : null}}>
                    <label for="watermark" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qawatermark" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qawatermark) ? 'checked' : null}} {{(optional($project->secondqasignee)->qawatermark) ? 'disabled' : null}}>
                    <label for="qawatermark" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Favicon</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="favicon" value="1" {{(optional($project->secondassignee)->favicon) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->favicon) ? 'disabled' : null}}>
                    <label for="favicon" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qafavicon" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qafavicon) ? 'checked' : null}} {{(optional($project->secondqasignee)->qafavicon) ? 'disabled' : null}}>
                    <label for="qafavicon" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Alt Tags</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="alt_tag" value="1" {{(optional($project->secondassignee)->alt_tag) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->alt_tag) ? 'disabled' : null}}>
                    <label for="alt_tag" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qaalt_tag" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qaalt_tag) ? 'checked' : null}} {{(optional($project->secondqasignee)->qaalt_tag) ? 'disabled' : null}}>
                    <label for="qaalt_tag" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Title Tags</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="imgtitle_tag" value="1" {{(optional($project->secondassignee)->imgtitle_tag) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->imgtitle_tag) ? 'disabled' : null}}>
                    <label for="imgtitle_tag" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qaimgtitle_tag" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qaimgtitle_tag) ? 'checked' : null}} {{(optional($project->secondqasignee)->qaimgtitle_tag) ? 'disabled' : null}}>
                    <label for="qaimgtitle_tag" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td></td>
            <td class="text-right"></td>
        </tr>

        <tr>
            <td>Privacy Policy Page</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="privacy" value="1" {{(optional($project->secondassignee)->privacy) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->privacy) ? 'disabled' : null}}>
                    <label for="privacy" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qaprivacy" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qaprivacy) ? 'checked' : null}} {{(optional($project->secondqasignee)->qaprivacy) ? 'disabled' : null}}>
                    <label for="qaprivacy" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td></td>
            <td class="text-right"></td>
        </tr>

        <tr>
            <td>Create Gallery & Upload Images</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="create_gal" value="1" {{(optional($project->secondassignee)->create_gal) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->create_gal) ? 'disabled' : null}}>
                    <label for="create_gal" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qacreate_gal" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qacreate_gal) ? 'checked' : null}} {{(optional($project->secondqasignee)->qacreate_gal) ? 'disabled' : null}}>
                    <label for="qacreate_gal" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td colspan="3"><p><b>Contact Form</b></p></td>
        </tr>

        <tr>
            <td>Email</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="cf_email" value="1" {{(optional($project->secondassignee)->cf_email) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->cf_email) ? 'disabled' : null}}>
                    <label for="cf_email" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qacf_email" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qacf_email) ? 'checked' : null}} {{(optional($project->secondqasignee)->qacf_email) ? 'disabled' : null}}>
                    <label for="qacf_email" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Validations</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="validation" value="1" {{(optional($project->secondassignee)->validation) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->validation) ? 'disabled' : null}}>
                    <label for="validation" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qavalidation" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qavalidation) ? 'checked' : null}} {{(optional($project->secondqasignee)->qavalidation) ? 'disabled' : null}}>
                    <label for="qavalidation" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td>Styles</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="cf_style" value="1" {{(optional($project->secondassignee)->cf_style) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->cf_style) ? 'disabled' : null}}>
                    <label for="cf_style" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qacf_style" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qacf_style) ? 'checked' : null}} {{(optional($project->secondqasignee)->qacf_style) ? 'disabled' : null}}>
                    <label for="qacf_style" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>Comment Revamp Link on Asana</td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="revamp_link" value="1" {{(optional($project->secondassignee)->revamp_link) ? 'checked' : null}} {{Auth::user()->userrole == 2 ? 'disabled' : null}} {{(optional($project->secondassignee)->revamp_link) ? 'disabled' : null}}>
                    <label for="revamp_link" class="custom-control-label"></label>
                </div>
            </td>
            <td class="text-right">
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="qarevamp_link" value="1" {{Auth::user()->userrole == 1 ? 'disabled' : null}} {{(optional($project->secondqasignee)->qarevamp_link) ? 'checked' : null}} {{(optional($project->secondqasignee)->qarevamp_link) ? 'disabled' : null}}>
                    <label for="qarevamp_link" class="custom-control-label"></label>
                </div>
            </td>
        </tr>

        <tr>
            <td class="text-right">
                <button id="secondCheckSave" type="button" class="btn bg-gradient-warning" {{Auth::user()->userrole == 2 ? 'disabled' : null}}
                    value="{{$project->secondassignee->id ?? null}}">
                    <i class="fas fa-tasks"></i> Submit
                </button>
            </td>
            <td colspan="3" class="text-right">
                <button id="secondQaSave" type="button" class="btn bg-gradient-danger" {{Auth::user()->userrole == 1 ? 'disabled' : null}}
                    value="{{$project->secondqasignee->id ?? null}}">
                    <i class="fas fa-tasks"></i> Submit
                </button>
            </td>
        </tr>

    </tbody>
</table>
</div>
