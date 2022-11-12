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
                        <div>
                            <span class="profile-usertitle-name">Political Party:</span>
                            <div class="profile-usertitle-nameDynamic">
                                <img src="" width="50px" height="40px" id="partyFlag" class="img-responsive" alt="">
                                <span id="party"></span>

                            </div>
                        </div>
                    </div>
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
                    <h3 class="text-center display-3">List of all candidates</h3>
                    <div class="main-box clearfix">
                        <div class="table-responsive">
                            <table class="table tabl1 user-list">
                                <thead>
                                <tr>
                                    <th><span>Name</span></th>
                                    <th><span>Address</span></th>
                                    <th><span>Party Name</span></th>
                                    <th class="text-center"><span>Status</span></th>
                                    <th><span>Email</span></th>
                                    <th>&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($candidates as $candidate)
                                    <tr>
                                        <td>
                                            <img class="userImage"
                                                 src="{{ url('/img/uploads/candidate/' . $candidate->displayPicture) }}"
                                                 alt="">
                                            {{ $candidate->name }} {{$candidate->middleName}} {{$candidate->surName}}
                                            {{--                                                <span class="user-subhead">Admin</span>--}}
                                        </td>
                                        <td>
                                            {{ $candidate->birth_ward }}, {{$candidate->birth_LLG}}
                                            , {{$candidate->birth_district}}, {{$candidate->birth_province}}
                                            , {{$candidate->birth_region}}
                                        </td>
                                        <td>
                                            {{ $candidate->politicalParty->name }}
                                        </td>
                                        <td class="text-center">
                                            <span class="label label-default">Inactive</span>
                                        </td>
                                        <td>
                                            <a href="#">{{ $candidate->email }}</a>
                                        </td>
                                        <td style="width: 20%;">
                                            <a href="javascript:void(0)" id="viewProfileModal"
                                               data-url="{{ route('candidate.show', $candidate->id) }}"
                                               data-bs-toggle="modal"
                                               data-bs-target="#showProfile"
                                               class="candidateDetailsOpen">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                    </span>
                                            </a>
                                            <a href="{{ url('/editCandidate/' . $candidate->id) }}" class="table-link">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x "></i>
                                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                    </span>
                                            </a>
                                            <a href="{{route('deleteCandidate', ['id' => $candidate->id])}}"
                                               class="table-link danger">
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
    <script src="{{ asset('js/profileModalCandidate.js') }}"></script>
@endsection
