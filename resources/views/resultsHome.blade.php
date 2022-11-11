@extends('layouts.eVotingApp')

@section('links')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body" style="margin-left: 0;">
        <div class="container-fluid">
            <h1>Select area to fetch polling results</h1>
            <div class="container-login100">
                <div class="">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data"
                                  action="{{ route('fetchResults') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-7 row align-items-center justify-content-center">
                                        <div class="form-group row align-items-center">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Select
                                                Election</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" style="height: 40px;" name="electionID">
                                                    <option value="" selected disabled>Select</option>
                                                    @foreach($elections as $election)
                                                        <option
                                                            value="{{$election->id}}">{{$election->name}} {{$election->date_of_election}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Select
                                                Region</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" style="height: 40px;" name="region"
                                                        id="region_select">
                                                    <option value="" disabled selected="selected">Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Select
                                                Province</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" style="height: 40px;" name="province"
                                                        id="province_select">
                                                    <option value="" disabled selected="selected">Select
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Select
                                                District</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" style="height: 40px;" name="district"
                                                        id="district_select">
                                                    <option value="" disabled selected="selected">Select
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Select LLG</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" style="height: 40px;" name="LLG"
                                                        id="LLG_select">
                                                    <option value="" disabled selected="selected">Select
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Select ward</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" style="height: 40px;" name="ward"
                                                        id="ward_select">
                                                    <option value="" disabled selected="selected">Select
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary col-md-6">Find results</button>
                                    </div>
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
    {{--    <script src="{{asset('js/voterLookUp.js')}}">--}}
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

    </script>
@endsection
