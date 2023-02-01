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
                        <h3 class="text-center display-4">Results gathered from 87 districts</h3>
                        <table class="table tabl1 user-list">
                            <thead>
                                <tr>
                                    <th><span>Party Name</span></th>
                                    <th><span># of Seats Won</span></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $key=>$seats)
                                <tr>
                                    <td>
                                        <span class="user-subhead">{{ $key }}</span>
                                    </td>
                                    <td>
                                        {{ $seats }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- </div> --}}
<!--**********************************
@endsection
