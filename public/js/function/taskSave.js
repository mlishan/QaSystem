$("#butsave").on("click", function () {
    var project_id = $("#project_id").val();
    var task = $("#task").val();
    var status = $("#status").val();
    var screenshot = $("#screenshot").prop("files")[0];
    var description = $("#description").val();
    var login_id = $("#login_id").val();
    var role_id = $("#role_id").val();

    var formData = new FormData();
    formData.append("project_id", project_id);
    formData.append("task", task);
    formData.append("status", status);
    formData.append("screenshot", screenshot);
    formData.append("description", description);
    formData.append("login_id", login_id);
    formData.append("role_id", role_id);

    $.ajax({
        url: "http://127.0.0.1:8000/viewprojects",
        //url: $("meta[name=app-url]").attr("content") + "/viewprojects",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: function (dataResult) {
            dataResult = jQuery.parseJSON(JSON.stringify(dataResult));
            console.log(dataResult);

            Toast.fire({
                icon: "success",
                title: "Task Successfully Saved!",
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
