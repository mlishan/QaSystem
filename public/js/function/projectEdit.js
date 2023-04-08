$("#butedit").on("click", function () {
    var id = $("#id").val();
    var name = $("#name").val();
    var status = $("#status").val();
    var start_date = $("#start_date").val();
    var end_date = $("#end_date").val();
    var owner_id = $("#owner_id").val();
    var description = $("#description").val();
    var user_ids = $("#user_ids :selected")
        .map((_, e) => e.value)
        .get();

    $.ajax({
        url: "http://127.0.0.1:8000/projects/update",
        //url: $("meta[name=app-url]").attr("content") + "/projects/update",
        type: "PUT",
        data: {
            id: id,
            name: name,
            status: status,
            start_date: start_date,
            end_date: end_date,
            owner_id: owner_id,
            description: description,
            user_ids: user_ids,
        },
        cache: false,
        success: function (dataResult) {
            dataResult = jQuery.parseJSON(JSON.stringify(dataResult));
            console.log(dataResult);

            Toast.fire({
                icon: "success",
                title: "Data Successfully Updated!",
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
