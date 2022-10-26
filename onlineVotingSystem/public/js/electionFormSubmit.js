// $("#formoid").submit(function (event) {
//     /* stop form from submitting normally */
//     event.preventDefault();

//     /* get the action attribute from the <form action=""> element */
//     var $form = $(this),
//         url = $form.attr("action");

//     /* Send the data using post with element id name and name2*/
//     var posting = $.post(url, {
//         name: $("#name").val(),
//         date: $("#date").val(),
//     });

//     /* Alerts the results */
//     posting.done(function (data) {
//         $("#result").text("success");
//     });
//     posting.fail(function () {
//         $("#result").text("failed");
//     });
// });
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$("#btn-submit").click(function (e) {
    e.preventDefault();

    var name = $("input[name=name]").val();
    var date = $("input[name=date]").val();
    url = $("#formoid").attr("action");
    //  var email = $("input[name=email]").val();

    $.ajax({
        type: "POST",
        url: url,
        data: { name: name, date: date },
        success: function (data) {
            $("#successMessage").text(data.msg);
        },
        error: function (data) {
            $("#nameError").text(data.responseJSON.errors.name);
            $("#dateError").text(data.responseJSON.errors.date);
        },
    });
    $("#addProjectSidebar").modal("hide");
});
