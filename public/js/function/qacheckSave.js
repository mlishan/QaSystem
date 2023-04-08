//first qa save function
$("#firstQakSave").on("click", function () {
    const myButton = document.querySelector("#firstQakSave");
    if (myButton.value) {
        var id = $("#firstQakSave").val();
        var project_id = $("#project_id").val();
        var qaassignee = $("#login_id").val();
        var qachrome = $("#qachrome:checked").val();
        var qa_horizontal = $("#qa_horizontal:checked").val();
        var qa_vertical = $("#qa_vertical:checked").val();
        var qa_ios = $("#qa_ios:checked").val();
        var qa_tel_format = $("#qa_tel_format:checked").val();
        var qa_tel_title = $("#qa_tel_title:checked").val();
        var qa_tel_link = $("#qa_tel_link:checked").val();
        var qa_tel_icon = $("#qa_tel_icon:checked").val();
        var qa_tel_alignment = $("#qa_tel_alignment:checked").val();
        var qa_email_task = $("#qa_email_task:checked").val();
        var qa_design_task = $("#qa_design_task:checked").val();
        var qa_responsive_task = $("#qa_responsive_task:checked").val();
        var qa_customer_changes = $("#qa_customer_changes:checked").val();
        var qa_getfrom_task = $("#qa_getfrom_task:checked").val();
        var qa_addressdetails_task = $("#qa_addressdetails_task:checked").val();
        var qa_social_link = $("#qa_social_link:checked").val();
        var qa_shover_link = $("#qa_shover_link:checked").val();
        var qa_stitle_link = $("#qa_stitle_link:checked").val();
        var qa_spellings_check = $("#qa_spellings_check:checked").val();
        var qa_dummy_links = $("#qa_dummy_links:checked").val();
        var qa_w3c_check = $("#qa_w3c_check:checked").val();

        $.ajax({
            url: "http://127.0.0.1:8000/firstqachecklist/update",
            //url: $("meta[name=app-url]").attr("content") + "/firstqachecklist/update",
            type: "PUT",
            data: {
                id: id,
                project_id: project_id,
                qaassignee: qaassignee,
                qachrome: qachrome,
                qa_horizontal: qa_horizontal,
                qa_vertical: qa_vertical,
                qa_ios: qa_ios,
                qa_tel_format: qa_tel_format,
                qa_tel_title: qa_tel_title,
                qa_tel_link: qa_tel_link,
                qa_tel_icon: qa_tel_icon,
                qa_tel_alignment: qa_tel_alignment,
                qa_email_task: qa_email_task,
                qa_design_task: qa_design_task,
                qa_responsive_task: qa_responsive_task,
                qa_customer_changes: qa_customer_changes,
                qa_getfrom_task: qa_getfrom_task,
                qa_addressdetails_task: qa_addressdetails_task,
                qa_social_link: qa_social_link,
                qa_shover_link: qa_shover_link,
                qa_stitle_link: qa_stitle_link,
                qa_spellings_check: qa_spellings_check,
                qa_dummy_links: qa_dummy_links,
                qa_w3c_check: qa_w3c_check,
            },
            cache: false,
            success: function (dataResult) {
                dataResult = jQuery.parseJSON(JSON.stringify(dataResult));
                console.log(dataResult);

                Toast.fire({
                    icon: "success",
                    title: "Successfully Saved!",
                });
                setTimeout(function () {
                    location.href = "";
                }, 2000);
            },
            error: function (data) {
                Toast.fire({
                    icon: "error",
                    title: "All Fields Are Required!",
                });
                console.log("Error:", data);
            },
        });
    } else {
        var project_id = $("#project_id").val();
        var qaassignee = $("#login_id").val();
        var qachrome = $("#qachrome:checked").val();
        var qa_horizontal = $("#qa_horizontal:checked").val();
        var qa_vertical = $("#qa_vertical:checked").val();
        var qa_ios = $("#qa_ios:checked").val();
        var qa_tel_format = $("#qa_tel_format:checked").val();
        var qa_tel_title = $("#qa_tel_title:checked").val();
        var qa_tel_link = $("#qa_tel_link:checked").val();
        var qa_tel_icon = $("#qa_tel_icon:checked").val();
        var qa_tel_alignment = $("#qa_tel_alignment:checked").val();
        var qa_email_task = $("#qa_email_task:checked").val();
        var qa_design_task = $("#qa_design_task:checked").val();
        var qa_responsive_task = $("#qa_responsive_task:checked").val();
        var qa_customer_changes = $("#qa_customer_changes:checked").val();
        var qa_getfrom_task = $("#qa_getfrom_task:checked").val();
        var qa_addressdetails_task = $("#qa_addressdetails_task:checked").val();
        var qa_social_link = $("#qa_social_link:checked").val();
        var qa_shover_link = $("#qa_shover_link:checked").val();
        var qa_stitle_link = $("#qa_stitle_link:checked").val();
        var qa_spellings_check = $("#qa_spellings_check:checked").val();
        var qa_dummy_links = $("#qa_dummy_links:checked").val();
        var qa_w3c_check = $("#qa_w3c_check:checked").val();

        $.ajax({
            url: "http://127.0.0.1:8000/firstqachecklist",
            //url: $("meta[name=app-url]").attr("content") + "/firstqachecklist",
            type: "POST",
            data: {
                project_id: project_id,
                qaassignee: qaassignee,
                qachrome: qachrome,
                qa_horizontal: qa_horizontal,
                qa_vertical: qa_vertical,
                qa_ios: qa_ios,
                qa_tel_format: qa_tel_format,
                qa_tel_title: qa_tel_title,
                qa_tel_link: qa_tel_link,
                qa_tel_icon: qa_tel_icon,
                qa_tel_alignment: qa_tel_alignment,
                qa_email_task: qa_email_task,
                qa_design_task: qa_design_task,
                qa_responsive_task: qa_responsive_task,
                qa_customer_changes: qa_customer_changes,
                qa_getfrom_task: qa_getfrom_task,
                qa_addressdetails_task: qa_addressdetails_task,
                qa_social_link: qa_social_link,
                qa_shover_link: qa_shover_link,
                qa_stitle_link: qa_stitle_link,
                qa_spellings_check: qa_spellings_check,
                qa_dummy_links: qa_dummy_links,
                qa_w3c_check: qa_w3c_check,
            },
            cache: false,
            success: function (dataResult) {
                dataResult = jQuery.parseJSON(JSON.stringify(dataResult));
                console.log(dataResult);

                Toast.fire({
                    icon: "success",
                    title: "Successfully Saved!",
                });
                setTimeout(function () {
                    location.href = "";
                }, 2000);
            },
            error: function (data) {
                Toast.fire({
                    icon: "error",
                    title: "All Fields Are Required!",
                });
                console.log("Error:", data);
            },
        });
    }
});

//second qa save function
$("#secondQaSave").on("click", function () {
    const myButton = document.querySelector("#secondQaSave");
    if (myButton.value) {
        var id = $("#secondQaSave").val();
        var project_id = $("#project_id").val();
        var qaassignee = $("#login_id").val();
        var qafirefox = $("#qafirefox:checked").val();
        var qaandroid = $("#qaandroid:checked").val();
        var qasafari = $("#qasafari:checked").val();
        var qares_one = $("#qares_one:checked").val();
        var qares_two = $("#qares_two:checked").val();
        var qaemail_title = $("#qaemail_title:checked").val();
        var qaemail_link = $("#qaemail_link:checked").val();
        var qaemail_icon = $("#qaemail_icon:checked").val();
        var qaemail_alignment = $("#qaemail_alignment:checked").val();
        var qameta_title = $("#qameta_title:checked").val();
        var qalogo_title = $("#qalogo_title:checked").val();
        var qasize = $("#qasize:checked").val();
        var qawatermark = $("#qawatermark:checked").val();
        var qafavicon = $("#qafavicon:checked").val();
        var qaalt_tag = $("#qaalt_tag:checked").val();
        var qaimgtitle_tag = $("#qaimgtitle_tag:checked").val();
        var qaprivacy = $("#qaprivacy:checked").val();
        var qacreate_gal = $("#qacreate_gal:checked").val();
        var qacf_email = $("#qacf_email:checked").val();
        var qavalidation = $("#qavalidation:checked").val();
        var qacf_style = $("#qacf_style:checked").val();
        var qarevamp_link = $("#qarevamp_link:checked").val();

        $.ajax({
            url: "http://127.0.0.1:8000/secondqachecklist/update",
            //url: $("meta[name=app-url]").attr("content") + "/secondqachecklist/update",
            type: "PUT",
            data: {
                id: id,
                project_id: project_id,
                qaassignee: qaassignee,
                qafirefox: qafirefox,
                qaandroid: qaandroid,
                qasafari: qasafari,
                qares_one: qares_one,
                qares_two: qares_two,
                qaemail_title: qaemail_title,
                qaemail_link: qaemail_link,
                qaemail_icon: qaemail_icon,
                qaemail_alignment: qaemail_alignment,
                qameta_title: qameta_title,
                qalogo_title: qalogo_title,
                qasize: qasize,
                qawatermark: qawatermark,
                qafavicon: qafavicon,
                qaalt_tag: qaalt_tag,
                qaimgtitle_tag: qaimgtitle_tag,
                qaprivacy: qaprivacy,
                qacreate_gal: qacreate_gal,
                qacf_email: qacf_email,
                qavalidation: qavalidation,
                qacf_style: qacf_style,
                qarevamp_link: qarevamp_link,
            },
            cache: false,
            success: function (dataResult) {
                dataResult = jQuery.parseJSON(JSON.stringify(dataResult));
                console.log(dataResult);

                Toast.fire({
                    icon: "success",
                    title: "Successfully Saved!",
                });
                setTimeout(function () {
                    location.href = "";
                }, 2000);
            },
            error: function (data) {
                Toast.fire({
                    icon: "error",
                    title: "All Fields Are Required!",
                });
                console.log("Error:", data);
            },
        });
    } else {
        var project_id = $("#project_id").val();
        var qaassignee = $("#login_id").val();
        var qafirefox = $("#qafirefox:checked").val();
        var qaandroid = $("#qaandroid:checked").val();
        var qasafari = $("#qasafari:checked").val();
        var qares_one = $("#qares_one:checked").val();
        var qares_two = $("#qares_two:checked").val();
        var qaemail_title = $("#qaemail_title:checked").val();
        var qaemail_link = $("#qaemail_link:checked").val();
        var qaemail_icon = $("#qaemail_icon:checked").val();
        var qaemail_alignment = $("#qaemail_alignment:checked").val();
        var qameta_title = $("#qameta_title:checked").val();
        var qalogo_title = $("#qalogo_title:checked").val();
        var qasize = $("#qasize:checked").val();
        var qawatermark = $("#qawatermark:checked").val();
        var qafavicon = $("#qafavicon:checked").val();
        var qaalt_tag = $("#qaalt_tag:checked").val();
        var qaimgtitle_tag = $("#qaimgtitle_tag:checked").val();
        var qaprivacy = $("#qaprivacy:checked").val();
        var qacreate_gal = $("#qacreate_gal:checked").val();
        var qacf_email = $("#qacf_email:checked").val();
        var qavalidation = $("#qavalidation:checked").val();
        var qacf_style = $("#qacf_style:checked").val();
        var qarevamp_link = $("#qarevamp_link:checked").val();

        $.ajax({
            url: "http://127.0.0.1:8000/secondqachecklist",
            //url: $("meta[name=app-url]").attr("content") + "/secondqachecklist",
            type: "POST",
            data: {
                project_id: project_id,
                qaassignee: qaassignee,
                qafirefox: qafirefox,
                qaandroid: qaandroid,
                qasafari: qasafari,
                qares_one: qares_one,
                qares_two: qares_two,
                qaemail_title: qaemail_title,
                qaemail_link: qaemail_link,
                qaemail_icon: qaemail_icon,
                qaemail_alignment: qaemail_alignment,
                qameta_title: qameta_title,
                qalogo_title: qalogo_title,
                qasize: qasize,
                qawatermark: qawatermark,
                qafavicon: qafavicon,
                qaalt_tag: qaalt_tag,
                qaimgtitle_tag: qaimgtitle_tag,
                qaprivacy: qaprivacy,
                qacreate_gal: qacreate_gal,
                qacf_email: qacf_email,
                qavalidation: qavalidation,
                qacf_style: qacf_style,
                qarevamp_link: qarevamp_link,
            },
            cache: false,
            success: function (dataResult) {
                dataResult = jQuery.parseJSON(JSON.stringify(dataResult));
                console.log(dataResult);

                Toast.fire({
                    icon: "success",
                    title: "Successfully Saved!",
                });
                setTimeout(function () {
                    location.href = "";
                }, 2000);
            },
            error: function (data) {
                Toast.fire({
                    icon: "error",
                    title: "All Fields Are Required!",
                });
                console.log("Error:", data);
            },
        });
    }
});

//third qa save function
$("#thirdQaCheckSave").on("click", function () {
    const myButton = document.querySelector("#thirdQaCheckSave");
    if (myButton.value) {
        var id = $("#thirdQaCheckSave").val();
        var project_id = $("#project_id").val();
        var qaassignee = $("#login_id").val();
        var qaie = $("#qaie:checked").val();
        var qawindows = $("#qawindows:checked").val();
        var qalarge = $("#qalarge:checked").val();
        var qaopera = $("#qaopera:checked").val();
        var qaadd_spelling = $("#qaadd_spelling:checked").val();
        var qaarea_check = $("#qaarea_check:checked").val();
        var qapostal = $("#qapostal:checked").val();
        var qaadd_alignment = $("#qaadd_alignment:checked").val();
        var qaadd_icon = $("#qaadd_icon:checked").val();
        var qaaadd_order = $("#qaaadd_order:checked").val();
        var qamap = $("#qamap:checked").val();
        var qaadd_format = $("#qaadd_format:checked").val();
        var qabe_unique = $("#qabe_unique:checked").val();
        var qadesc_area = $("#qadesc_area:checked").val();
        var qabe_meaningful = $("#qabe_meaningful:checked").val();
        var qacms = $("#qacms:checked").val();
        var qablock = $("#qablock:checked").val();
        var qaservice_area = $("#qaservice_area:checked").val();
        var qaimg_upload = $("#qaimg_upload:checked").val();
        var qacompatible_design = $("#qacompatible_design:checked").val();
        var qafont_size = $("#qafont_size:checked").val();
        var qalayout_style = $("#qalayout_style:checked").val();
        var qaopacity = $("#qaopacity:checked").val();

        $.ajax({
            url: "http://127.0.0.1:8000/thirdqachecklist/update",
            //url: $("meta[name=app-url]").attr("content") + "/thirdqachecklist/update",
            type: "PUT",
            data: {
                id: id,
                project_id: project_id,
                qaassignee: qaassignee,
                qaie: qaie,
                qawindows: qawindows,
                qalarge: qalarge,
                qaopera: qaopera,
                qaadd_spelling: qaadd_spelling,
                qaarea_check: qaarea_check,
                qapostal: qapostal,
                qaadd_alignment: qaadd_alignment,
                qaadd_icon: qaadd_icon,
                qaaadd_order: qaaadd_order,
                qamap: qamap,
                qaadd_format: qaadd_format,
                qabe_unique: qabe_unique,
                qadesc_area: qadesc_area,
                qabe_meaningful: qabe_meaningful,
                qacms: qacms,
                qablock: qablock,
                qaservice_area: qaservice_area,
                qaimg_upload: qaimg_upload,
                qacompatible_design: qacompatible_design,
                qafont_size: qafont_size,
                qalayout_style: qalayout_style,
                qaopacity: qaopacity,
            },
            cache: false,
            success: function (dataResult) {
                dataResult = jQuery.parseJSON(JSON.stringify(dataResult));
                console.log(dataResult);

                Toast.fire({
                    icon: "success",
                    title: "Successfully Saved!",
                });
                setTimeout(function () {
                    location.href = "";
                }, 2000);
            },
            error: function (data) {
                Toast.fire({
                    icon: "error",
                    title: "All Fields Are Required!",
                });
                console.log("Error:", data);
            },
        });
    } else {
        var project_id = $("#project_id").val();
        var qaassignee = $("#login_id").val();
        var qaie = $("#qaie:checked").val();
        var qawindows = $("#qawindows:checked").val();
        var qalarge = $("#qalarge:checked").val();
        var qaopera = $("#qaopera:checked").val();
        var qaadd_spelling = $("#qaadd_spelling:checked").val();
        var qaarea_check = $("#qaarea_check:checked").val();
        var qapostal = $("#qapostal:checked").val();
        var qaadd_alignment = $("#qaadd_alignment:checked").val();
        var qaadd_icon = $("#qaadd_icon:checked").val();
        var qaaadd_order = $("#qaaadd_order:checked").val();
        var qamap = $("#qamap:checked").val();
        var qaadd_format = $("#qaadd_format:checked").val();
        var qabe_unique = $("#qabe_unique:checked").val();
        var qadesc_area = $("#qadesc_area:checked").val();
        var qabe_meaningful = $("#qabe_meaningful:checked").val();
        var qacms = $("#qacms:checked").val();
        var qablock = $("#qablock:checked").val();
        var qaservice_area = $("#qaservice_area:checked").val();
        var qaimg_upload = $("#qaimg_upload:checked").val();
        var qacompatible_design = $("#qacompatible_design:checked").val();
        var qafont_size = $("#qafont_size:checked").val();
        var qalayout_style = $("#qalayout_style:checked").val();
        var qaopacity = $("#qaopacity:checked").val();

        $.ajax({
            url: "http://127.0.0.1:8000/thirdqachecklist",
            //url: $("meta[name=app-url]").attr("content") + "/thirdqachecklist",
            type: "POST",
            data: {
                project_id: project_id,
                qaassignee: qaassignee,
                qaie: qaie,
                qawindows: qawindows,
                qalarge: qalarge,
                qaopera: qaopera,
                qaadd_spelling: qaadd_spelling,
                qaarea_check: qaarea_check,
                qapostal: qapostal,
                qaadd_alignment: qaadd_alignment,
                qaadd_icon: qaadd_icon,
                qaaadd_order: qaaadd_order,
                qamap: qamap,
                qaadd_format: qaadd_format,
                qabe_unique: qabe_unique,
                qadesc_area: qadesc_area,
                qabe_meaningful: qabe_meaningful,
                qacms: qacms,
                qablock: qablock,
                qaservice_area: qaservice_area,
                qaimg_upload: qaimg_upload,
                qacompatible_design: qacompatible_design,
                qafont_size: qafont_size,
                qalayout_style: qalayout_style,
                qaopacity: qaopacity,
            },
            cache: false,
            success: function (dataResult) {
                dataResult = jQuery.parseJSON(JSON.stringify(dataResult));
                console.log(dataResult);

                Toast.fire({
                    icon: "success",
                    title: "Successfully Saved!",
                });
                setTimeout(function () {
                    location.href = "";
                }, 2000);
            },
            error: function (data) {
                Toast.fire({
                    icon: "error",
                    title: "All Fields Are Required!",
                });
                console.log("Error:", data);
            },
        });
    }
});
