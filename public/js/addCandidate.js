$("#selectOccupation").change(function () {
    if ($("#selectOccupation").find(":selected").val() == "Student") {
        $("#schoolName").removeClass("hideField");
    } else {
        if (!$("#schoolName").hasClass("hideField")) {
            $("#schoolName").addClass("hideField");
        }
    }
});
