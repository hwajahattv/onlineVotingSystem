@extends('layouts.eVotingApp')

@section('content')
    <div class="content-body" style="margin-left: 0;">
        <div class="container-fluid">
            <h1>Fill in the elector details</h1>
            <div class="container-login100">
                <div class="">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data"
                                  action="{{ route('registerAsVoterPost') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control addInput" name="name"
                                                       id="" aria-describedby="" placeholder="Enter the first name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control addInput" name="name"
                                                       id="" aria-describedby="" placeholder="Enter the Last name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" name="birth_region"
                                                        id="region_select">
                                                    <option value="" selected="selected">Select Region</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" name="birth_province"
                                                        id="province_select">
                                                    <option value="" selected="selected">Select Province
                                                    </option>
                                                </select>
                                            </div>
                                        </div>                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" name="birth_district"
                                                        id="district_select">
                                                    <option value="" selected="selected">Select District
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group wrapper">
                                            <div>
                                                <div class="wrapper">
                                                    <label for="exampleInputEmail1">Upload voter's profile image</label>
                                                </div>
                                                <div class="wrapper">
                                                    <div class="file-upload">
                                                        <input type="file" name="profilePicture"
                                                               onchange="PreviewImage();" id="files"/>
                                                        <i class="fa fa-arrow-up" id="uploadIcon"></i>
                                                        <img class="imgCard mt-4 mb-2" id="uploadPreview" src=""
                                                             class="mt-3"/>
                                                    </div>
                                                </div>
                                                <div class="wrapper">
                                                    <small id="emailHelp" class="form-text text-muted">Upload the
                                                        passport
                                                        size image
                                                        (max.
                                                        size: 100kb).</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
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
                "CHIMBU": [
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
                "ENGA": [
                    "KANDEP",
                    "KOMPIAM/AMBUM",
                    "LAGAIP",
                    "POGERA-PAIELA",
                    "WABAG",
                    "WAPENAMANDA",
                ],
                "HELA": ["KOMO-HULIA", "KOROBA KUPIAGO", "MAGARIMA", "TARI/PORI"],
                "JIWAKA": ["ANGLIMP/SOUTH WAGHI", "JIMI", "NORTH WAGHI"],
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
            "NEW_GUINEA_ISLANDS": {
                "BOUGAINVILLE": [
                    "CENTRAL BOUGAINVILLE",
                    "NORTH BOUGAINVILLE",
                    "SOUTH BOUGAINVILLE",
                ],
                "EAST NEW BRITAIN": ["GAZELLE", "KOKOPO", "POMIO", "RABAUL"],
                "MANUS": ["MANUS"],
                "NEW IRELAND": ["KAVIENG", "NAMATANAI"],
                "WEST NEW BRITAIN": ["KANDRIAN-GLOUCESTER", "NAKANAI", "TALASEA"],
            },

            "MOMASE": {
                "EAST SEPIK": [
                    "AMBUNTI-DREIKIKIR",
                    "ANGORAM",
                    "MAPRIK",
                    "WEWAK",
                    "WOSERA-GAUI",
                    "YANGORU-SAUSSIA",
                ],
                "MADANG": [
                    "BOGIA",
                    "MADANG",
                    "MIDDLE RAMU",
                    "RAI COAST",
                    "SUMKAR",
                    "USINO-BUNDI",
                ],
                "MOROBE": [
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
            "SOUTHERN": {
                "CENTRAL": ["ABAU", "GOILALA", "x.x", "KAIRUKU", "RIGO"],
                "Gulf": ["KEREMA", "KIKORI"],
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
                "NORTHERN": ["IJIVITARI", "POPONDETTA", "SOHE"],
                "WESTERN": ["DELTA FLY", "MIDDLE FLY", "NORTH FLY", "SOUTH FLY"],
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

            var subjectSel1 = document.getElementById("region_select1");
            var topicSel1 = document.getElementById("province_select1");
            var chapterSel1 = document.getElementById("district_select1");

            for (var x in subjectObject) {
                subjectSel1.options[subjectSel1.options.length] = new Option(x, x);
            }

            subjectSel1.onchange = function () {
                //empty Chapters- and Topics- dropdowns
                chapterSel1.length = 1;
                topicSel1.length = 1;
                //display correct values
                for (var y in subjectObject[this.value]) {
                    topicSel1.options[topicSel1.options.length] = new Option(y, y);
                }
            };
            topicSel1.onchange = function () {
                //empty Chapters dropdown
                chapterSel1.length = 1;
                //display correct values
                var z = subjectObject[subjectSel1.value][this.value];
                for (var i = 0; i < z.length; i++) {
                    chapterSel1.options[chapterSel1.options.length] = new Option(
                        z[i],
                        z[i]
                    );
                }
            };
        };

    </script>
@endsection
