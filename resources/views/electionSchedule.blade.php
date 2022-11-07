@extends('layouts.eVotingApp')
@section('links')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body" style="margin-left: 0;">
        <div class="container-fluid">
            <h1>Select the region and then province to see its schedule.</h1>
            <div class="container-login100">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data"
                                  action="{{ route('registerAsVoterPost') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 row">
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
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        var subjectObject = {
            "HIGHLANDS": [
                "CHIMBU",
                "EASTERN HIGHLANDS",
                "ENGA",
                "HELA",
                "JIWAKA",
                "SOUTHERN HIGHLANDS",
                "WESTERN HIGHLANDS"],
            "NEW_GUINEA_ISLANDS":[
                "BOUGAINVILLE",
                "EAST NEW BRITAIN",
                "MANUS",
                "NEW IRELAND",
                "WEST NEW BRITAIN"],

            "MOMASE": [
                "EAST SEPIK",
                "MADANG",
                "MOROBE",
                "WEST SEPIK"],
            "SOUTHERN": [
                "CENTRAL","Gulf",
                "MILNE BAY",
                "NATIONAL CAPITAL DISTRICT",
                "NORTHERN",
                "WESTERN"]
        };


        window.onload = function () {
            var regionSel = document.getElementById("region_select");
            var provinceSelect = document.getElementById("province_select");

            for (var v in subjectObject) {
                regionSel.options[regionSel.options.length] = new Option(v, v);
            }

            regionSel.onchange = function () {
                //empty Chapters- and Topics- dropdowns
                provinceSelect.length = 1;
                //display correct values
                var z = subjectObject[this.value];
                for (var i = 0; i < z.length; i++) {
                    provinceSelect.options[provinceSelect.options.length] = new Option(
                        z[i],
                        z[i]
                    );
                }
            };
        };

    </script>
@endsection
