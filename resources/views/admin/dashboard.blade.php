@extends('admin.parent.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
{{--            <h3 class="text-black text-center display-3">Welcome to the Online Voting System Dashboard</h3>--}}
{{--            <h4>Select an option from sidebar.</h4>--}}
            @if($errors->any())
                <h4>{{$errors->first()}}</h4>
            @endif
            <div class="row">
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="fs-20 mb-0 text-black">Marital Status
                            <select class="fs-20 mb-0 text-green" name="cars" id="maritalStatus">
                                <option selected disabled >--select--</option>
                                <option value="overall">Overall</option>
                                @foreach($provinces as $province)
                                <option value="{{$province->name}}">{{$province->name}}</option>
                                @endforeach
                            </select></h4>
                            <div class="dropdown">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center pt-0">
                            <div id="radialChart" class="monthly-project-chart"></div>
                            <span class="fs-14 text-black d-block op5" id="regionSelectedForMaritalSatus"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="fs-20 mb-0 text-black">Occupation
                            <select class="fs-20 mb-0 text-green" name="cars" id="occupation">
                                <option selected disabled >--select--</option>
                                <option value="overall">Overall</option>
                                @foreach($provinces as $province)
                                <option value="{{$province->name}}">{{$province->name}}</option>
                                @endforeach
                            </select></h4>
                            <div class="dropdown">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center pt-0">
                            <div id="radialChartOccupation" class="monthly-project-chart"></div>
                            <span class="fs-14 text-black d-block op5" id="regionSelectedForOccupation"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="fs-20 mb-0 text-black">Disabled persons
                            <select class="fs-20 mb-0 text-green" name="cars" id="disability">
                                <option selected disabled >--select--</option>
                                <option value="overall">Overall</option>
                                @foreach($provinces as $province)
                                <option value="{{$province->name}}">{{$province->name}}</option>
                                @endforeach
                            </select></h4>
                            <div class="dropdown">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center pt-0">
                            <div id="radialChartDisability" class="monthly-project-chart"></div>
                            <span class="fs-14 text-black d-block op5" id="regionSelectedForDisability"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="fs-20 mb-0 text-black">Religion
                            <select class="fs-20 mb-0 text-green" name="cars" id="Religion">
                                <option selected disabled >--select--</option>
                                <option value="overall">Overall</option>
                                @foreach($provinces as $province)
                                <option value="{{$province->name}}">{{$province->name}}</option>
                                @endforeach
                            </select></h4>
                            <div class="dropdown">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                            stroke="#575757" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center pt-0">
                            <div id="radialChartReligion" class="monthly-project-chart"></div>
                            <span class="fs-14 text-black d-block op5" id="regionSelectedForReligion"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
