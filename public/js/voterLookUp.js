var subjectObject = {
    "HIGHLANDS": {
        "CHIMBU": {
            "CHUAVE": {
                "abd": ["a", "b"],
            },
            "GUMINE": {
                "abd": ["d", "bd"],
            },
            "KARIMUI-NOMANE": {
                "abd": ["ad", "bd"],
            },
            "KEROWAGI": {
                "abd": ["aq", "bq"],
            },
            "SINASINA-YONGGAMUGL,": {
                "abd": ["at", "yb"],
            },
            "KUNDIAWA": {
                "abd": ["ayy", "byyy"],
            },
        },
    }
};
window.onload = function () {
    var regionSel = document.getElementById("region_select");
    var provinceSelect = document.getElementById("province_select");
    var districtSelect = document.getElementById("district_select");
    var topicSel = document.getElementById("LLG_select");
    var chapterSel = document.getElementById("ward_select");

    for (var v in subjectObject) {
        regionSel.options[regionSel.options.length] = new Option(v, v);
    }

    regionSel.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        provinceSelect.length = 1;
        districtSelect.length = 1;
        chapterSel.length = 1;
        topicSel.length = 1;
        //display correct values
        for (var w in subjectObject[this.value]) {
            provinceSelect.options[provinceSelect.options.length] = new Option(w, w);
        }
    };
    provinceSelect.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        districtSelect.length = 1;
        chapterSel.length = 1;
        topicSel.length = 1;
        //display correct values
        for (var x in subjectObject[regionSel.value][this.value]) {
            districtSelect.options[districtSelect.options.length] = new Option(x, x);
        }
    };
    districtSelect.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        chapterSel.length = 1;
        topicSel.length = 1;
        //display correct values
        for (var y in subjectObject[regionSel.value][provinceSelect.value][this.value]) {
            topicSel.options[topicSel.options.length] = new Option(y, y);
        }
    };
    topicSel.onchange = function () {
        //empty Chapters dropdown
        chapterSel.length = 1;
        //display correct values
        var z = subjectObject[regionSel.value][provinceSelect.value][districtSelect.value][this.value];
        for (var i = 0; i < z.length; i++) {
            chapterSel.options[chapterSel.options.length] = new Option(
                z[i],
                z[i]
            );
        }
    };
};

//    *******************AJAX CALL*****************************//
$(document).ready(function () {
    $("form").submit(function (e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var actionUrl = form.attr('action');
        //******************form validation********************************//
        var test = form[0];
        if ((test['name'].value == "") || (test['surName'].value == "") || (test['birth_region'].value == "") || (test['birth_province'].value == "") || (test['birth_district'].value == "")) {
            alert("Fill your complete information.");
            return false;
        }
        //******************form validation end********************************//


        //******************AJAX CALL START********************************//
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                if (data == "null") {
                    document.getElementById("dataNotFound").style.display = 'block';
                    document.getElementById("dataFound").style.display = 'none';
                } else {
                    clearFields();
                    document.getElementById("dataNotFound").style.display = 'none';
                    document.getElementById("dataFound").style.display = 'block';
                    $('#voterID').text(data.id);
                    $('#candidateFirstName').text(data.name);
                    $('#candidateMiddleName').text(data.middleName);
                    $('#candidateSurName').text(data.surName);
                    $('#village').text(data.current_village);
                    $('#ward').text(data.current_ward);
                    $('#LLG').text(data.current_LLG);
                    $('#district').text(data.current_district);
                    $('#province').text(data.current_province);
                    $('#region').text(data.current_region);
                    $("#candidateImage").attr(
                        "src",
                        "img/uploads/voter/" + data.displayPicture
                    );
                    $("#castVoteBtn").attr(
                        "href",
                        "/castVote/" + data.id
                    );
                }
                // console.log(data); // show response from the php script.
            }
        });

    });


});

function clearFields() {
    var formFields = $('form')[0];
    formFields['name'].value = "";
    formFields['name'].value = "";
    formFields['surName'].value = "";
    formFields['birth_region'].value = "";
    formFields['birth_province'].value = "";
    formFields['birth_district'].value = "";
    formFields['birth_LLG'].value = "";
    formFields['birth_ward'].value = "";
};
