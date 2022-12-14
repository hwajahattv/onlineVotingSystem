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
                <div class="col-lg-12">
                    <div class="main-box clearfix">
                        <div class="table-responsive">
                            <div style="max-width:300px;">
                                <div class="input-icons">
{{--                                    <i class="fa fa-user icon"></i>--}}
                                    <i class="fa-sharp fa-solid fa-magnifying-glass icon"></i>
                                    <input id="keyfob" type="text" class="cd-search input-field-tableSearch table-filter"
                                           data-table="your-table" placeholder="Search a voter.."/>
                                </div>
                            </div>
                            <table class="table tabl1 user-list your-table">
                                <thead>
                                <tr>
                                    <th><span>Name</span></th>
                                    <th><span>Voter ID</span></th>
                                    <th><span>Region</span></th>
                                    <th><span>Province</span></th>
                                    <th class="text-center"><span>Status of vote</span></th>
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
                                            {{ $voter->id }}
                                        </td>
                                        <td>
                                            {{ $voter->current_region }}
                                        </td>
                                        <td>
                                            {{ $voter->current_province }}
                                        </td>
                                        <td class="text-center">
                                            <span class="label label-default">Not casted</span>
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
                                                {{--                                                    <span class="fa-stack">--}}
                                                {{--                                                        <i class="fa fa-square fa-stack-2x"></i>--}}
                                                <i class="fa fa-search-plus fa-2x"></i>
                                                {{--                                                    </span>--}}
                                            </a>
                                            <a href="{{ url('/editVoter/' . $voter->id) }}" class="table-link">
                                                {{--                                                    <span class="fa-stack">--}}
                                                <i class="fas fa-edit fa-2x"></i>
                                                {{--                                                    </span>--}}
                                            </a>
                                            <a href="{{route('deleteVoter',['id'=>$voter->id])}}"
                                               class="table-link danger">
                                                {{--                                                    <span class="fa-stack">--}}
                                                {{--                                                        <i class="fa fa-square fa-stack-2x"></i>--}}
                                                <i class="fa-regular fa-trash-can fa-2x"></i>
                                                {{--                                                    </span>--}}
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
    <script src="{{ asset('js/tableSearch.js') }}"></script>

@endsection
