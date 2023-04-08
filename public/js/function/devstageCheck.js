$("#firstCheckSave").on("click", function () {
    const myButton = document.querySelector("#firstCheckSave");
    if (myButton.value) {
        var id = $("#firstCheckSave").val();
        var project_id = $("#project_id").val();
        var assignee = $("#assignee").val();
        var chrome = $("#chrome:checked").val();
        var tab_horizontal = $("#tab_horizontal:checked").val();
        var tab_vertical = $("#tab_vertical:checked").val();
        var ios = $("#ios:checked").val();
        var tel_format = $("#tel_format:checked").val();
        var tel_title = $("#tel_title:checked").val();
        var tel_link = $("#tel_link:checked").val();
        var tel_icon = $("#tel_icon:checked").val();
        var tel_alignment = $("#tel_alignment:checked").val();
        var email_task = $("#email_task:checked").val();
        var design_task = $("#design_task:checked").val();
        var responsive_task = $("#responsive_task:checked").val();
        var customer_changes = $("#customer_changes:checked").val();
        var getfrom_task = $("#getfrom_task:checked").val();
        var addressdetails_task = $("#addressdetails_task:checked").val();
        var social_link = $("#social_link:checked").val();
        var shover_link = $("#shover_link:checked").val();
        var stitle_link = $("#stitle_link:checked").val();
        var spellings_check = $("#spellings_check:checked").val();
        var dummy_links = $("#dummy_links:checked").val();
        var w3c_check = $("#w3c_check:checked").val();

        $.ajax({
            url: "http://127.0.0.1:8000/firstchecklist/update",
            //url: $("meta[name=app-url]").attr("content") + "/firstchecklist/update",
            type: "PUT",
            data: {
                id: id,
                project_id: project_id,
                assignee: assignee,
                chrome: chrome,
                tab_horizontal: tab_horizontal,
                tab_vertical: tab_vertical,
                ios: ios,
                tel_format: tel_format,
                tel_title: tel_title,
                tel_link: tel_link,
                tel_icon: tel_icon,
                tel_alignment: tel_alignment,
                email_task: email_task,
                design_task: design_task,
                responsive_task: responsive_task,
                customer_changes: customer_changes,
                getfrom_task: getfrom_task,
                addressdetails_task: addressdetails_task,
                social_link: social_link,
                shover_link: shover_link,
                stitle_link: stitle_link,
                spellings_check: spellings_check,
                dummy_links: dummy_links,
                w3c_check: w3c_check,
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
        var assignee = $("#assignee").val();
        var chrome = $("#chrome:checked").val();
        var tab_horizontal = $("#tab_horizontal:checked").val();
        var tab_vertical = $("#tab_vertical:checked").val();
        var ios = $("#ios:checked").val();
        var tel_format = $("#tel_format:checked").val();
        var tel_title = $("#tel_title:checked").val();
        var tel_link = $("#tel_link:checked").val();
        var tel_icon = $("#tel_icon:checked").val();
        var tel_alignment = $("#tel_alignment:checked").val();
        var email_task = $("#email_task:checked").val();
        var design_task = $("#design_task:checked").val();
        var responsive_task = $("#responsive_task:checked").val();
        var customer_changes = $("#customer_changes:checked").val();
        var getfrom_task = $("#getfrom_task:checked").val();
        var addressdetails_task = $("#addressdetails_task:checked").val();
        var social_link = $("#social_link:checked").val();
        var shover_link = $("#shover_link:checked").val();
        var stitle_link = $("#stitle_link:checked").val();
        var spellings_check = $("#spellings_check:checked").val();
        var dummy_links = $("#dummy_links:checked").val();
        var w3c_check = $("#w3c_check:checked").val();

        $.ajax({
            url: "http://127.0.0.1:8000/firstchecklist",
            //url: $("meta[name=app-url]").attr("content") + "/firstchecklist",
            type: "POST",
            data: {
                project_id: project_id,
                assignee: assignee,
                chrome: chrome,
                tab_horizontal: tab_horizontal,
                tab_vertical: tab_vertical,
                ios: ios,
                tel_format: tel_format,
                tel_title: tel_title,
                tel_link: tel_link,
                tel_icon: tel_icon,
                tel_alignment: tel_alignment,
                email_task: email_task,
                design_task: design_task,
                responsive_task: responsive_task,
                customer_changes: customer_changes,
                getfrom_task: getfrom_task,
                addressdetails_task: addressdetails_task,
                social_link: social_link,
                shover_link: shover_link,
                stitle_link: stitle_link,
                spellings_check: spellings_check,
                dummy_links: dummy_links,
                w3c_check: w3c_check,
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

//second assignee check function
$("#secondCheckSave").on("click", function () {
    const myButton = document.querySelector("#secondCheckSave");
    if (myButton.value) {
        var id = $("#secondCheckSave").val();
        var project_id = $("#project_id").val();
        var secondassignee = $("#secondassignee").val();
        var firefox = $("#firefox:checked").val();
        var android = $("#android:checked").val();
        var safari = $("#safari:checked").val();
        var res_one = $("#res_one:checked").val();
        var res_two = $("#res_two:checked").val();
        var email_title = $("#email_title:checked").val();
        var email_link = $("#email_link:checked").val();
        var email_icon = $("#email_icon:checked").val();
        var email_alignment = $("#email_alignment:checked").val();
        var meta_title = $("#meta_title:checked").val();
        var logo_title = $("#logo_title:checked").val();
        var size = $("#size:checked").val();
        var watermark = $("#watermark:checked").val();
        var favicon = $("#favicon:checked").val();
        var alt_tag = $("#alt_tag:checked").val();
        var imgtitle_tag = $("#imgtitle_tag:checked").val();
        var privacy = $("#privacy:checked").val();
        var create_gal = $("#create_gal:checked").val();
        var cf_email = $("#cf_email:checked").val();
        var validation = $("#validation:checked").val();
        var cf_style = $("#cf_style:checked").val();
        var revamp_link = $("#revamp_link:checked").val();

        $.ajax({
            url: "http://127.0.0.1:8000/secondchecklist/update",
            //url: $("meta[name=app-url]").attr("content") + "/secondchecklist/update",
            type: "PUT",
            data: {
                id: id,
                project_id: project_id,
                secondassignee: secondassignee,
                firefox: firefox,
                android: android,
                safari: safari,
                res_one: res_one,
                res_two: res_two,
                email_title: email_title,
                email_link: email_link,
                email_icon: email_icon,
                email_alignment: email_alignment,
                meta_title: meta_title,
                logo_title: logo_title,
                size: size,
                watermark: watermark,
                favicon: favicon,
                alt_tag: alt_tag,
                imgtitle_tag: imgtitle_tag,
                privacy: privacy,
                create_gal: create_gal,
                cf_email: cf_email,
                validation: validation,
                cf_style: cf_style,
                revamp_link: revamp_link,
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
        var secondassignee = $("#secondassignee").val();
        var firefox = $("#firefox:checked").val();
        var android = $("#android:checked").val();
        var safari = $("#safari:checked").val();
        var res_one = $("#res_one:checked").val();
        var res_two = $("#res_two:checked").val();
        var email_title = $("#email_title:checked").val();
        var email_link = $("#email_link:checked").val();
        var email_icon = $("#email_icon:checked").val();
        var email_alignment = $("#email_alignment:checked").val();
        var meta_title = $("#meta_title:checked").val();
        var logo_title = $("#logo_title:checked").val();
        var size = $("#size:checked").val();
        var watermark = $("#watermark:checked").val();
        var favicon = $("#favicon:checked").val();
        var alt_tag = $("#alt_tag:checked").val();
        var imgtitle_tag = $("#imgtitle_tag:checked").val();
        var privacy = $("#privacy:checked").val();
        var create_gal = $("#create_gal:checked").val();
        var cf_email = $("#cf_email:checked").val();
        var validation = $("#validation:checked").val();
        var cf_style = $("#cf_style:checked").val();
        var revamp_link = $("#revamp_link:checked").val();

        $.ajax({
            url: "http://127.0.0.1:8000/secondchecklist",
            //url: $("meta[name=app-url]").attr("content") + "/secondchecklist",
            type: "POST",
            data: {
                project_id: project_id,
                secondassignee: secondassignee,
                firefox: firefox,
                android: android,
                safari: safari,
                res_one: res_one,
                res_two: res_two,
                email_title: email_title,
                email_link: email_link,
                email_icon: email_icon,
                email_alignment: email_alignment,
                meta_title: meta_title,
                logo_title: logo_title,
                size: size,
                watermark: watermark,
                favicon: favicon,
                alt_tag: alt_tag,
                imgtitle_tag: imgtitle_tag,
                privacy: privacy,
                create_gal: create_gal,
                cf_email: cf_email,
                validation: validation,
                cf_style: cf_style,
                revamp_link: revamp_link,
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

//third assignee check function
$("#thirdCheckSave").on("click", function () {
    const myButton = document.querySelector("#thirdCheckSave");
    if (myButton.value) {
        var id = $("#thirdCheckSave").val();
        var project_id = $("#project_id").val();
        var thirdassignee = $("#thirdassignee").val();
        var ie = $("#ie:checked").val();
        var windows = $("#windows:checked").val();
        var large = $("#large:checked").val();
        var opera = $("#opera:checked").val();
        var add_spelling = $("#add_spelling:checked").val();
        var area_check = $("#area_check:checked").val();
        var postal = $("#postal:checked").val();
        var add_alignment = $("#add_alignment:checked").val();
        var add_icon = $("#add_icon:checked").val();
        var add_order = $("#add_order:checked").val();
        var map = $("#map:checked").val();
        var add_format = $("#add_format:checked").val();
        var be_unique = $("#be_unique:checked").val();
        var desc_area = $("#desc_area:checked").val();
        var be_meaningful = $("#be_meaningful:checked").val();
        var cms = $("#cms:checked").val();
        var block = $("#block:checked").val();
        var service_area = $("#service_area:checked").val();
        var img_upload = $("#img_upload:checked").val();
        var compatible_design = $("#compatible_design:checked").val();
        var font_size = $("#font_size:checked").val();
        var layout_style = $("#layout_style:checked").val();
        var opacity = $("#opacity:checked").val();

        $.ajax({
            url: "http://127.0.0.1:8000/thirdchecklist/update",
            //url: $("meta[name=app-url]").attr("content") + "/thirdchecklist/update",
            type: "PUT",
            data: {
                id: id,
                project_id: project_id,
                thirdassignee: thirdassignee,
                ie: ie,
                windows: windows,
                large: large,
                opera: opera,
                add_spelling: add_spelling,
                area_check: area_check,
                postal: postal,
                add_alignment: add_alignment,
                add_icon: add_icon,
                add_order: add_order,
                map: map,
                add_format: add_format,
                be_unique: be_unique,
                desc_area: desc_area,
                be_meaningful: be_meaningful,
                cms: cms,
                block: block,
                service_area: service_area,
                img_upload: img_upload,
                compatible_design: compatible_design,
                font_size: font_size,
                layout_style: layout_style,
                opacity: opacity,
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
        var thirdassignee = $("#thirdassignee").val();
        var ie = $("#ie:checked").val();
        var windows = $("#windows:checked").val();
        var large = $("#large:checked").val();
        var opera = $("#opera:checked").val();
        var add_spelling = $("#add_spelling:checked").val();
        var area_check = $("#area_check:checked").val();
        var postal = $("#postal:checked").val();
        var add_alignment = $("#add_alignment:checked").val();
        var add_icon = $("#add_icon:checked").val();
        var add_order = $("#add_order:checked").val();
        var map = $("#map:checked").val();
        var add_format = $("#add_format:checked").val();
        var be_unique = $("#be_unique:checked").val();
        var desc_area = $("#desc_area:checked").val();
        var be_meaningful = $("#be_meaningful:checked").val();
        var cms = $("#cms:checked").val();
        var block = $("#block:checked").val();
        var service_area = $("#service_area:checked").val();
        var img_upload = $("#img_upload:checked").val();
        var compatible_design = $("#compatible_design:checked").val();
        var font_size = $("#font_size:checked").val();
        var layout_style = $("#layout_style:checked").val();
        var opacity = $("#opacity:checked").val();

        $.ajax({
            url: "http://127.0.0.1:8000/thirdchecklist",
            //url: $("meta[name=app-url]").attr("content") + "/thirdchecklist",
            type: "POST",
            data: {
                project_id: project_id,
                thirdassignee: thirdassignee,
                ie: ie,
                windows: windows,
                large: large,
                opera: opera,
                add_spelling: add_spelling,
                area_check: area_check,
                postal: postal,
                add_alignment: add_alignment,
                add_icon: add_icon,
                add_order: add_order,
                map: map,
                add_format: add_format,
                be_unique: be_unique,
                desc_area: desc_area,
                be_meaningful: be_meaningful,
                cms: cms,
                block: block,
                service_area: service_area,
                img_upload: img_upload,
                compatible_design: compatible_design,
                font_size: font_size,
                layout_style: layout_style,
                opacity: opacity,
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

//final check function
$("#finalCheckSave").on("click", function () {
    var project_id = $("#project_id").val();
    var lastassignee = $("#lastassignee").val();

    $.ajax({
        url: "http://127.0.0.1:8000/qachecksave",
        //url: $("meta[name=app-url]").attr("content") + "/qachecksave",
        type: "POST",
        data: {
            project_id: project_id,
            lastassignee: lastassignee,
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
});
