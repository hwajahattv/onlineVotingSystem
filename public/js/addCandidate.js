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
    HIGHLANDS: {
        CHIMBU: [
            "CHUAVE",
            "GUMINE",
            "KARIMUI-NOMANE",
            "KEROWAGI",
            "SINASINA-YONGGAMUGL,",
            "KUNDIAWA",
        ],
        "EASTERN HIGHLANDS": [
            "DAULO",
            "GOROKA",
            "HENGANOFI",
            "KAINANTU",
            "LUFA",
            "OBURA-WONENARA",
            "OKAPA",
            "UNGAI-BENA",
        ],
        ENGA: [
            "KANDEP",
            "KOMPIAM/AMBUM",
            "LAGAIP",
            "POGERA-PAIELA",
            "WABAG",
            "WAPENAMANDA",
        ],
        HELA: ["KOMO-HULIA", "KOROBA KUPIAGO", "MAGARIMA", "TARI/PORI"],
        JIWAKA: ["ANGLIMP/SOUTH WAGHI", "JIMI", "NORTH WAGHI"],
        "SOUTHERN HIGHLANDS": [
            "IALIBU/PANGIA",
            "IMBONGGU",
            "KAGUA/ERAVE",
            "MENDI",
        ],
        "WESTERN HIGHLANDS": [
            "DEI",
            "HAGEN CENTRAL",
            "MUL-BAIYER",
            "TAMBUL/NEBILYER",
        ],
    },
    NEW_GUINEA_ISLANDS: {
        BOUGAINVILLE: [
            "CENTRAL BOUGAINVILLE",
            "NORTH BOUGAINVILLE",
            "SOUTH BOUGAINVILLE",
        ],
        "EAST NEW BRITAIN": ["GAZELLE", "KOKOPO", "POMIO", "RABAUL"],
        MANUS: ["MANUS"],
        "NEW IRELAND": ["KAVIENG", "NAMATANAI"],
        "WEST NEW BRITAIN": ["KANDRIAN-GLOUCESTER", "NAKANAI", "TALASEA"],
    },

    MOMASE: {
        "EAST SEPIK": [
            "AMBUNTI-DREIKIKIR",
            "ANGORAM",
            "MAPRIK",
            "WEWAK",
            "WOSERA-GAUI",
            "YANGORU-SAUSSIA",
        ],
        MADANG: [
            "BOGIA",
            "MADANG",
            "MIDDLE RAMU",
            "RAI COAST",
            "SUMKAR",
            "USINO-BUNDI",
        ],
        MOROBE: [
            "BULOLO",
            "FINSCHAFEN",
            "HUON GULF",
            "KABWUM",
            "LAE",
            "MARKHAM",
            "MENYAMYA",
            "NAWAE",
            "TEWAI-SIASSI",
            "WAU-WARIA",
        ],
        "WEST SEPIK": [
            "AITAPE-LUMI",
            "NUKU",
            "TELEFOMIN",
            "VANIMO-GREEN RIVER",
        ],
    },
    SOUTHERN: {
        CENTRAL: ["ABAU", "GOILALA", "x.x", "KAIRUKU", "RIGO"],
        Gulf: ["KEREMA", "KIKORI"],
        "MILNE BAY": [
            "ALOTAU",
            "ESAALA",
            "KIRIWINA/GOODENOUGH",
            "SAMARAI-MURUA",
        ],
        "NATIONAL CAPITAL DISTRICT": [
            "MORESBY NORTH-EAST",
            "MORESBY NORTH-WEST",
            "MORESBY SOUTH",
        ],
        NORTHERN: ["IJIVITARI", "POPONDETTA", "SOHE"],
        WESTERN: ["DELTA FLY", "MIDDLE FLY", "NORTH FLY", "SOUTH FLY"],
    },
};
window.onload = function () {
    var subjectSel = document.getElementById("region_select");
    var topicSel = document.getElementById("province_select");
    var chapterSel = document.getElementById("district_select");
    for (var x in subjectObject) {
        subjectSel.options[subjectSel.options.length] = new Option(x, x);
    }
    subjectSel.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        chapterSel.length = 1;
        topicSel.length = 1;
        //display correct values
        for (var y in subjectObject[this.value]) {
            topicSel.options[topicSel.options.length] = new Option(y, y);
        }
    };
    topicSel.onchange = function () {
        //empty Chapters dropdown
        chapterSel.length = 1;
        //display correct values
        var z = subjectObject[subjectSel.value][this.value];
        for (var i = 0; i < z.length; i++) {
            chapterSel.options[chapterSel.options.length] = new Option(
                z[i],
                z[i]
            );
        }
    };
};
