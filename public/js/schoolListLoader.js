$("#findSchoolsOfProvince").change(function () {
    var province_id = $('#findSchoolsOfProvince').val();
    var education_level_id = $('#educationLevelSelect').val();
    $.ajax({

        type: "GET",
        url: "fetchSchools/" + province_id + "/" + education_level_id,
        success: function (data) {
            var htmlOptions = [];
            if (data.length) {
                for (item in data) {
                    html = '<tr>' +
                        '<td>' + data[item].id + '</td>' +
                        '<td>' + data[item].name + '</td>' +
                        '<td><a href="school/'+data[item].id+'/edit'+'" class="table-link">\n' +
                        '                                                    <span class="fa-stack">\n' +
                        '                                                        <i class="fa fa-square fa-stack-2x "></i>\n' +
                        '                                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>\n' +
                        '                                                    </span>\n' +
                        '                                            </a>\n' +
                        '<a href="school/delete/'+data[item].id+'" class="table-link danger">\n' +
                        '                                                    <span class="fa-stack">\n' +
                        '                                                        <i class="fa fa-square fa-stack-2x"></i>\n' +
                        '                                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>\n' +
                        '                                                    </span>\n' +
                        '                                            </a></td></tr>\n';
                    htmlOptions[htmlOptions.length] = html;
                }
                // here you will empty the pre-existing data from you selectbox and will append the htmlOption created in the loop result
                $('#schoolList').empty().append(htmlOptions.join(''));
                $('#schoolTable').DataTable();

            }
        },
        error: function (error) {
            alert(error.responseJSON.message);
        }
    })
});
