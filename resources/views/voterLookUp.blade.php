@extends('layouts.eVotingApp')

@section('links')
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
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
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" name="birth_district"
                                                        id="district_select">
                                                    <option value="" selected="selected">Select District
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" name="birth_LLG"
                                                        id="LLG_select">
                                                    <option value="" selected="selected">Select LLG
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" name="birth_ward"
                                                        id="ward_select">
                                                    <option value="" selected="selected">Select ward
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
        };

    </script>
@endsection
