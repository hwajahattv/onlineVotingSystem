@extends('admin.parent.master')
@section('link')
    <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="container">
                <h3 class="text-center display-3">Provincial Schools record</h3>
                <div class="row">
                    <div class="col-md-4">
                        <a class="btn btn-outline-success" href="{{route('school.create')}}">
                            Add new school
                        </a>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="text-black">Education level</label>
                        <select class="form-control" name="education_level"
                                value="{{ old('education_level') }}" id="educationLevelSelect">
                            <option selected value="1">Primary</option>
                            <option value="2">Secondary</option>
                            <option value="3">Tertiary</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="text-black">Select province</label>
                        <select class="form-control" name="province"
                                value="{{ old('province_id') }}" id="findSchoolsOfProvince">
                            <option selected disabled>--select--</option>
                            @foreach($provinces as $province)
                                <option value="{{$province->id}}">{{$province->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <table class="table table-bordered" id="schoolTable">
                    <thead>
                        <tr>
                            <th>School ID</th>
                            <th>School name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="schoolList">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--**********************************
                                                                                        Content body end
                                                                                    ***********************************-->
@endsection
@section('script')
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script src="{{asset('/js/schoolListLoader.js')}}">
    </script>
@endsection
