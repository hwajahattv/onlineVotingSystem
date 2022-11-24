@extends('admin.parent.master')

@section('modal')
    <div class="modal fade" id="changeRole">
        <div class="modal-dialog" role="document">
            <div class="modal-content profile-modal">
                <!-- SIDEBAR USERPIC -->
                <div class="d-flex justify-content-end">
                    <form id="roleSelectForm" method="POST" action="{{ route('userRoleUpdate') }}">
                        @csrf
                        <select class="form-control" name="role" id="userRole">
                            <option disabled selected>--select--</option>
                            <option value="Admin">Admin</option>
                            <option value="SuperAdmin">Super Admin</option>
                        </select>
                        <input type="text" name="userIDHolder" hidden id="userIDHolder">
                        <input type="submit" value="Update" class="btn btn-secondary">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="registerForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content profile-modal">
                <div class="modal-header">
                    <h5 class="modal-title">Create an admin user</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" style="padding: 0;">
                    <form class="login100-form validate-form " method="POST" action="{{ route('addNewUser') }}">
                        @csrf
                        <div class="wrap-input100 validate-input"
                             data-validate="Valid email is required: ex@abc.xyz">
                            <input id="name" type="text" placeholder="Name"
                                   class="input100 @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                            <i class="fa-regular fa-user" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="wrap-input100 validate-input"
                             data-validate="Valid email is required: ex@abc.xyz">
                            <input id="email" type="email" placeholder="Email"
                                   class="input100 @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input id="password" type="password"
                                   class=" input100 @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input id="password" type="password"
                                   class=" input100 @error('password') is-invalid @enderror"
                                   name="password_confirmation" required autocomplete="current-password"
                                   placeholder="Confirm Password">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="login100-form-btn">
                                    Create Admin
                                </button>
                            </div>
                        </div>
                    </form>
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
                    <h3 class="text-center display-3">List of all Users</h3>
                    <div class="main-box clearfix">
                        <div class="table-responsive">
                            <div class="d-flex">
                                <a class="add-project-sidebar" href="" data-bs-toggle="modal"
                                   data-bs-target="#registerForm">+ Add new user</a>
                                <div style="max-width:300px;">
                                    <div class="input-icons">
                                        {{--                                    <i class="fa fa-user icon"></i>--}}
                                        <i class="fa-sharp fa-solid fa-magnifying-glass icon"></i>
                                        <input id="keyfob" type="text"
                                               class="cd-search input-field-tableSearch table-filter"
                                               data-table="your-table" placeholder="Search a user.."/>
                                    </div>
                                </div>
                            </div>

                            <table class="table tabl1 user-list">
                                <thead>
                                <tr>
                                    <th><span>Name</span></th>
                                    <th><span>Email</span></th>
                                    <th><span>Role</span></th>
                                    <th><span>Member since</span></th>
                                    <th class="text-center"><span>Status</span></th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
{{--                                            <img class="userImage"--}}
{{--                                                 src="{{ url('/img/uploads/user/' . $user->displayPicture) }}"--}}
{{--                                                 alt="no image uploaded">--}}
                                            <span class="user-list_name">{{ $user->name }}</span>
                                            <br>

                                        </td>
                                        <td>{{$user->email}}</td>
                                        <td><span id="roleText">{{$user->roles}}</span>
                                            <a href="javascript:void(0)" id="changeRoleBtn"
                                               data-url="{{ route('userRoleUpdate', $user->id) }}"
                                               data-id="{{$user->id}}"
                                               data-bs-toggle="modal"
                                               data-bs-target="#changeRole"
                                               class="candidateDetailsOpen"
                                            ><i class="fa-regular fa-pen-to-square"></i></a></td>
                                        <td>{{$user->created_at}}
                                        </td>
                                        <td class="text-center">
                                            @if($user->onlineCheck)
                                                <span class="label label-success">Online</span><br>
                                                <small class="text-muted">Login since: {{$user->loginTime}}</small>

                                            @else
                                                <span class="label label-default">Offline</span>
                                            @endif
                                        </td>
                                        <td style="width: 20%;" class="text-center">
                                            {{--                                            <a href="javascript:void(0)" id="viewProfileModal"--}}
                                            {{--                                               data-url="{{ route('candidate.show', $candidate->id) }}"--}}
                                            {{--                                               data-bs-toggle="modal"--}}
                                            {{--                                               data-bs-target="#showProfile"--}}
                                            {{--                                               class="candidateDetailsOpen">--}}
                                            {{--                                                                                    <span class="fa-stack">--}}
                                            {{--                                                                                        <i class="fa fa-square fa-stack-2x"></i>--}}
                                            {{--                                                                                        <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>--}}
                                            {{--                                                                                    </span>--}}
                                            {{--                                            </a>--}}
                                            {{--                                            <a href="{{ url('/editCandidate/' . $candidate->id) }}" class="table-link">--}}
                                            {{--                                                                                    <span class="fa-stack">--}}
                                            {{--                                                                                        <i class="fa fa-square fa-stack-2x "></i>--}}
                                            {{--                                                                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>--}}
                                            {{--                                                                                    </span>--}}
                                            {{--                                            </a>--}}
                                            <a href="{{route('deleteUser', ['id' => $user->id])}}"
                                               class="table-link danger">
                                                <i class="fa-regular fa-trash-can"></i>
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
    <script src="{{ asset('js/userRoleUpdate.js') }}"></script>
    <script src="{{ asset('js/tableSearch.js') }}"></script>

@endsection
