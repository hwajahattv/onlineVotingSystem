@extends('admin.parent.master')

@section('modal')
    <div class="modal fade" id="showProfile">
        <div class="modal-dialog" role="document">
            <div class="modal-content profile-modal">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="{{ asset('img/uploads/candidate/63510f3e74210.jpg') }}" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        Marcus Doe
                    </div>
                    <div class="profile-usertitle-job">
                        Developer
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">Follow</button>
                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-box clearfix">
                        <div class="table-responsive">
                            <table class="table tabl1 user-list">
                                <thead>
                                    <tr>
                                        <th><span>Election ID</span></th>
                                        <th><span>Election name</span></th>
                                        <th><span>Date held</span></th>
                                        <th class="text-center"><span>Status</span></th>
                                    </tr>
                                    {{-- <span id="successMessage"></span> --}}
                                </thead>
                                <tbody>
                                    @foreach ($elections as $election)
                                        <tr>
                                            <td>
                                                <span class="user-subhead">{{ $election->id }}</span>
                                            </td>
                                            <td>
                                                {{ $election->name }}
                                            </td>
                                            <td>
                                                {{ $election->date_of_election }}
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">Inactive</span>
                                            </td>
                                            <td style="width: 20%;">
                                                <a class="" href="" data-bs-toggle="modal"
                                                    data-bs-target="#showProfile">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="" class="table-link">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i id="{{ $election->id }}"
                                                            class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="#" class="table-link danger">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <ul class="pagination pull-right">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- </div> --}}
    <!--**********************************
@endsection
