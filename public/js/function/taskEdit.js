$("#btntaskedit").on("click", function () {
    var task_id = $("#task_id").val();
    var projectid = $("#projectid").val();
    var task_name = $("#task_name").val();
    var taskstatus = $("#taskstatus").val();
    var taskdescription = $("#taskdescription").val();
    var devnote = $("#devnote").val();
    var loginid = $("#loginid").val();
    var roleid = $("#roleid").val();

    $.ajax({
        url: "http://127.0.0.1:8000/viewprojects/update",
        //url: $("meta[name=app-url]").attr("content") + "/viewprojects/update",
        type: "PUT",
        data: {
            task_id: task_id,
            projectid: projectid,
            task_name: task_name,
            taskstatus: taskstatus,
            taskdescription: taskdescription,
            devnote: devnote,
            loginid: loginid,
            roleid: roleid,
        },
        cache: false,
        success: function (dataResult) {
            dataResult = jQuery.parseJSON(JSON.stringify(dataResult));
            console.log(dataResult);

            Toast.fire({
                icon: "success",
                title: "Task Successfully Updated!",
            });
            setTimeout(function () {
                location.href = "";
            }, 2000);
        },
        error: function (data) {
            Toast.fire({
                icon: "error",
                title: "All fields are required!",
            });
            console.log("Error:", data);
        },
    });
});
