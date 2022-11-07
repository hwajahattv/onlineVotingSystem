$("#selectOccupation").change(function () {
    if ($("#selectOccupation").find(":selected").val() == "Student") {
        $("#schoolName").removeClass("hideField");
    } else {
        if (!$("#schoolName").hasClass("hideField")) {
            $("#schoolName").addClass("hideField");
        }
    }
});
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
    var topicSel=     document.getElementById("LLG_select");
    var chapterSel=    document.getElementById("ward_select");

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

    //for current address
    var regionSel1 = document.getElementById("region_select1");
    var provinceSelect1 = document.getElementById("province_select1");
    var districtSelect1 = document.getElementById("district_select1");
    var topicSel1=     document.getElementById("LLG_select1");
    var chapterSel1=    document.getElementById("ward_select1");
    for (var v in subjectObject) {
        regionSel1.options[regionSel1.options.length] = new Option(v, v);
    }

    regionSel1.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        provinceSelect1.length = 1;
        districtSelect1.length = 1;
        chapterSel1.length = 1;
        topicSel1.length = 1;
        //display correct values
        for (var w in subjectObject[this.value]) {
            provinceSelect1.options[provinceSelect1.options.length] = new Option(w, w);
        }
    };
    provinceSelect1.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        districtSelect1.length = 1;
        chapterSel1.length = 1;
        topicSel1.length = 1;
        //display correct values
        for (var x in subjectObject[regionSel1.value][this.value]) {
            districtSelect1.options[districtSelect1.options.length] = new Option(x, x);
        }
    };
    districtSelect1.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        chapterSel1.length = 1;
        topicSel1.length = 1;
        //display correct values
        for (var y in subjectObject[regionSel1.value][provinceSelect1.value][this.value]) {
            topicSel1.options[topicSel1.options.length] = new Option(y, y);
        }
    };
    topicSel1.onchange = function () {
        //empty Chapters dropdown
        chapterSel1.length = 1;
        //display correct values
        var z = subjectObject[regionSel1.value][provinceSelect1.value][districtSelect1.value][this.value];
        for (var i = 0; i < z.length; i++) {
            chapterSel1.options[chapterSel1.options.length] = new Option(
                z[i],
                z[i]
            );
        }
    };
};
