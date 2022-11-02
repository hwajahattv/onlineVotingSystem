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

$(".fa-pencil").click(function (e) {
    var targetId = e.currentTarget.getAttribute("id");
    e.preventDefault();
    $.ajax({
        url: "/editElection/" + targetId,
        type: "GET",
        success: function (res) {
            $("#addProjectSidebar").modal("show");
            $("#name").val(res.name);
            $("#date").val(res.date_of_election);
            $(".modal-title")[0].innerHTML = "Update election";
            $(".updateBtnTarget")[0].innerHTML = "Update";
            $("#formoid").attr("action", "/editElectionPost/" + targetId);
            console.log(res);
            // alert(res);
        },
    });
});
