@extends('admin.parent.master')

@section('modal')
    <div class="modal fade" id="showProfile">
        <div class="modal-dialog" role="document">
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
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                {{--                <div class="profile-userbuttons">--}}
                {{--                    <button type="button" class="btn btn-success btn-sm">Follow</button>--}}
                {{--                    <button type="button" class="btn btn-danger btn-sm">Message</button>--}}
                {{--                </div>--}}
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                {{--                <div class="profile-usermenu">--}}
                {{--                    <ul class="nav">--}}
                {{--                        <li class="active">--}}
                {{--                            <a href="#">--}}
                {{--                                <i class="glyphicon glyphicon-home"></i>--}}
                {{--                                Overview </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#">--}}
                {{--                                <i class="glyphicon glyphicon-user"></i>--}}
                {{--                                Account Settings </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#" target="_blank">--}}
                {{--                                <i class="glyphicon glyphicon-ok"></i>--}}
                {{--                                Tasks </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href="#">--}}
                {{--                                <i class="glyphicon glyphicon-flag"></i>--}}
                {{--                                Help </a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <!-- Add Project -->
            <div class="modal fade" id="addProjectSidebar">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label class="text-black font-w500">Project Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Dadeline</label>
                                    <div class="cal-icon"><input type="date" class="form-control"><i
                                            class="far fa-calendar-alt"></i></div>
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Client Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary">CREATE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- <a class="add-project-sidebar btn btn-primary" href="" data-bs-toggle="modal"
                    data-bs-target="#showProfile">+ New Project</a> --}}
                <div class="col-lg-12">
                    <div class="main-box clearfix">
                        <div class="table-responsive">
                            <table class="table tabl1 user-list">
                                <thead>
                                    <tr>
                                        <th><span>Voter</span></th>
                                        <th><span>Phone number</span></th>
                                        <th><span>CNIC</span></th>
                                        <th class="text-center"><span>Status</span></th>
                                        <th><span>Email</span></th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($voters as $voter)
                                        <tr>
                                            <td>
                                                <img class="userImage"
                                                    src="{{ url('/img/uploads/voter/' . $voter->displayPicture) }}"
                                                    alt="">
                                                <a class="" href="" data-bs-toggle="modal"
                                                    data-bs-target="#showProfile">{{ $voter->name }}</a>
{{--                                                <span class="user-subhead">Admin</span>--}}
                                            </td>
                                            <td>
                                                {{ $voter->phone_no }}
                                            </td>
                                            <td>
                                                {{ $voter->CNIC }}
                                            </td>
                                            <td class="text-center">
                                                <span class="label label-default">Inactive</span>
                                            </td>
                                            <td>
                                                <a href="#">{{ $voter->email }}</a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="javascript:void(0)" id="viewProfileModal"
                                                   data-url="{{ route('voter.show', $voter->id) }}"
                                                   data-bs-toggle="modal"
                                                   data-bs-target="#showProfile"
                                                   class="candidateDetailsOpen">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="{{ url('/editVoter/' . $voter->id) }}" class="table-link">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="{{route('deleteVoter',['id'=>$voter->id])}}" class="table-link danger">
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
@endsection
@section('script')
    <script src="{{ asset('js/profileModalVoter.js') }}"></script>
@endsection
