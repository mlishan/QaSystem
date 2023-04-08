$('#butsave').on('click', function () {
    var name = $('#name').val();
    var status = $('#status').val();
    var start_date = $('#start_date').val();
    var end_date = $('#end_date').val();
    var owner_id = $('#owner_id').val();
    var description = $('#description').val();
    var user_ids = $("#user_ids :selected").map((_, e) => e.value).get();


    $.ajax({
        url: "",
        type: "POST",
        data: {
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
                icon: 'success',
                title: 'Project Successfully Saved!'
            })
            setTimeout(function(){
                location.href = ''
            },2000)

        },
        error: function (data) {
        Toast.fire({
            icon: 'error',
            title: 'All Fields Are Required!'
          })
        console.log('Error:', data);
        }
    });
});