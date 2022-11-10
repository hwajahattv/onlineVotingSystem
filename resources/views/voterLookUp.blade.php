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
                                  action="{{ route('findMe') }}">
                                <div class="row">
                                    <div class="col-md-7 row align-items-center justify-content-center">
                                @csrf
                                        <div class="form-group row align-items-center">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">First name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control addInput" style="height: 40px;" name="name"
                                                       id="name" aria-describedby="" placeholder="Enter the first name">
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Last name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control addInput" style="height: 40px;" name="surName"
                                                       id="surName" aria-describedby="" placeholder="Enter the last name">
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Select Region</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" style="height: 40px;" name="birth_region"
                                                        id="region_select">
                                                    <option value="" disabled selected="selected">Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Select Province</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" style="height: 40px;" name="birth_province"
                                                        id="province_select">
                                                    <option value="" disabled selected="selected">Select
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Select District</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" style="height: 40px;" name="birth_district"
                                                        id="district_select">
                                                    <option value="" disabled selected="selected">Select
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Select LLG</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" style="height: 40px;" name="birth_LLG"
                                                        id="LLG_select">
                                                    <option value="" disabled selected="selected">Select
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label for="staticEmail" class="col-sm-4 col-form-label">Select ward</label>
                                            <div class="col-sm-8">
                                                <select class="form-control" style="height: 40px;" name="birth_ward"
                                                        id="ward_select">
                                                    <option value="" disabled selected="selected">Select
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    <button type="submit" class="btn btn-primary col-md-6">Check if I am registered.</button>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="bg-danger" id="dataNotFound">
                                            <h1 class="text-info display-3 text-center">DATA NOT FOUND</h1>
                                            <div class="d-flex justify-content-center">
                                            <a href="{{route('registerAsVoter')}}" class="btn-outline-info">Click here to register.</a>
                                            </div>
                                        </div>

                                        <div class=" bg-success" id="dataFound">
                                            <h1 class="text-white display-6 text-center">You are registered.</h1>
                                            <div class="modal-content profile-modal">
                                                <!-- SIDEBAR USERPIC -->
                                                <div class="d-flex justify-content-end">
                                                    <img src="" id="candidateImage" class="img-responsive" alt="">

                                                    <!-- END SIDEBAR USERPIC -->
                                                    <!-- SIDEBAR USER TITLE -->
                                                    <div class="profile-usertitle">
                                                        <div>
                                                            <span class="profile-usertitle-name">Full Name: </span>
                                                            <div class="profile-usertitle-nameDynamic">
                                                                <span id="candidateFirstName"></span>
                                                                <span id="candidateMiddleName"></span>
                                                                <span id="candidateSurName"></span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <span class="profile-usertitle-name">Current Address: </span>
                                                            <div class="profile-usertitle-nameDynamic">
                                                                <span id="village"></span>
                                                                <span id="ward"></span>
                                                                <span id="LLG"></span>
                                                                <span id="district"></span>
                                                                <span id="province"></span>
                                                                <span id="region"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
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

    //    *******************AJAX CALL*****************************//
        $(document).ready(function () {
            $("form").submit(function(e) {

                e.preventDefault(); // avoid to execute the actual submit of the form.

                var form = $(this);
                var actionUrl = form.attr('action');
                //******************form validation********************************//
                var test=form[0];
                if ((test['name'].value == "")||(test['surName'].value == "")||(test['birth_region'].value == "")||(test['birth_province'].value == "")||(test['birth_district'].value == "")) {
                    alert("Fill your complete information.");
                    return false;
                }
                //******************form validation end********************************//


                //******************AJAX CALL START********************************//
                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data)
                    {
                        if(data=="null"){
                            document.getElementById("dataNotFound").style.display='block';
                            document.getElementById("dataFound").style.display='none';
                        }
                        else{
                            clearFields();
                            document.getElementById("dataNotFound").style.display='none';
                            document.getElementById("dataFound").style.display='block';
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
                        }
                        // console.log(data); // show response from the php script.
                    }
                });

            });


        });
        function clearFields(){
            var formFields=$('form')[0];
            formFields['name'].value = "";
            formFields['surName'].value = "";
            formFields['birth_region'].value = "";
            formFields['birth_province'].value = "";
            formFields['birth_district'].value = "";
            formFields['birth_LLG'].value = "";
            formFields['birth_ward'].value = "";
        };
    </script>
@endsection
